<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderByRaw('updated_at DESC')->limit(10)->get();
        $details = "Most recent records.";
        return view('patients.index', [
            'patients' => $patients,
            'details' => $details
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patients.create');
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
            'lname' => 'required',
            'fname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'bdate' => 'required',
        ]);

        Patient::create($request->all());

        return redirect('/patients')->with('Info', 'A new patient record has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patients.view', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $this->validate($request, [
            'lname' => 'required',
            'fname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'bdate' => 'required',
        ]);

        $patient->update($request->all());

        return redirect("/patients/$patient->id")->with('Info', 'Patient record updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $name = $patient->lname . ', ' . $patient->fname;
        $patient->delete();
        return redirect("/patients")->with('Info', "Patient record of $name has been deleted permanently.");
    }

    public function search(Request $request) {
        $lname = $request['lname'];
        $fname = $request['fname'];

        $patients = Patient::orderByRaw('lname, fname');
        if(isset($lname)) {
            $patients->where('lname','like',"%$lname%");
        }
        if(isset($fname)) {
            $patients->where('fname','like',"%$fname%");
        }

        $details = "Filtered by $lname $fname";
        $patients = $patients->get();

        return view('patients.index', [
            'patients' => $patients,
            'details' => $details
        ]);
    }
}
