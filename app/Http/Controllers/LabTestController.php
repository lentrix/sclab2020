<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\LabTest;
use App\LbtTemplate;


class LabTestController extends Controller
{

    public function index() {
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
     * Create a lab test from patient view
     */
    public function create(Patient $patient) {
        return view('lab_tests.create', compact('patient'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'patient_id' => 'required|numeric',
            'template_id' => 'required|numeric',
            'physician' => 'required',
            'pathologist' => 'required'
        ]);

        $tmplt = LbtTemplate::find($request['template_id']);

        $lab = LabTest::create([
            'patient_id' => $request['patient_id'],
            'test_name' => $tmplt->name,
            'amount' => $tmplt->price,
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
        ]);

        foreach($tmplt->items as $item) {
            \App\TestItem::create([
                'lab_test_id' => $lab->id,
                'item' => $item->test,
                'normal' => $item->normal,
            ]);
        }

        return redirect("/labtests")->with('Info','New Lab Test pending.');
    }

    public function show(LabTest $labtest) {
        return view('lab_tests.view', ['labTest'=>$labtest]);
    }

    public function editResults(LabTest $labtest) {
        if($labtest->status=="pending") {
            $labtest->update(['status'=>'on-going']);
        }

        return view('lab_tests.edit', compact('labtest'));
    }

    public function updateResults(LabTest $labtest, Request $request) {
        foreach($request['item'] as $id=>$result) {
            $item = \App\TestItem::find($id);
            if($item) {
                $item->update(['result'=>$result]);
            }
        }

        $labtest->update([
            'remarks'=>$request['remarks'],
            'status' =>$request['status'],
            'med_tech' => auth()->user()->fullname
        ]);

        if($labtest->status=="available") {
            return redirect("/labtests/$labtest->id")->with('Info', 'Laboratory test results updated.');
        }else {
            return redirect()->back()->with('Info', 'Laboratory test results updated.');
        }
    }
}
