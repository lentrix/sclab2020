<?php

namespace App\Http\Controllers;

use App\LabTest;
use App\LabTestBlueprint;
use App\Patient;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dateNow = date('Y-m-d');
        $from = $dateNow . " 00:00:00";
        $to = $dateNow . "23:59:59";

        $today = LabTest::whereBetween('created_at',[$from,$to])
            ->orWhereIn('status', ['pending','on-going'])->get();

        return view('lab_tests.index', [
            'today' => $today
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view('lab_tests.create', compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'patient_id' => 'required|numeric',
            'formal_name' => 'required',
            'physician' => 'required',
        ]);

        // dd(\App\LabTestBlueprint::blueprint()[$request['formal_name']]);

        $labTest = LabTest::create([
            'patient_id' => $request['patient_id'],
            'formal_name' => $request['formal_name'],
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
            'med_tech' => auth()->user()->fullname,
            'status' => 'pending',
            'data' => json_encode(\App\LabTestBlueprint::blueprint()[$request['formal_name']])
        ]);

        $patient = Patient::find($request['patient_id']);

        return redirect("/labtests")->with('Info', "New laboratory request have been created for $patient->name");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LabTest  $labTest
     * @return \Illuminate\Http\Response
     */
    public function show(LabTest $labtest)
    {
        $view = json_decode($labtest->data)[0]->view;
        return view('lab_tests.results.' . $view, compact('labtest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LabTest  $labTest
     * @return \Illuminate\Http\Response
     */
    public function edit(LabTest $labTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LabTest  $labTest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LabTest $labTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LabTest  $labTest
     * @return \Illuminate\Http\Response
     */
    public function destroy(LabTest $labTest)
    {
        //
    }

    public function editResults(LabTest $labtest) {
        $filename = str_replace(" ", "_", $labtest->formal_name);
        return view('lab_tests.forms.' . $filename, compact('labtest'));
    }

    public function updateResults(LabTest $labtest, Request $request) {
        $data = json_decode($labtest->data);

        for($i=1; $i<count($data); $i++) {
            $data[$i]->result = $request['item'][$i];
        }

        $labtest->update([
            'data' => $data
        ]);

        return redirect("/labtests/$labtest->id")->with('Info','Laboratory Results have been updated.');
    }
}
