<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\LabTest;
use App\LbtTemplate;


class LabTestController extends Controller
{

    public function index($status) {
        $labTests = LabTest::where('status',$status)
            ->with('patient')
            ->orderBy('created_at')->get();

        return view('lab_tests.index', [
            'status' => $status,
            'labTests' => $labTests
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

        LabTest::create([
            'patient_id' => $request['patient_id'],
            'test_name' => $tmplt->name,
            'amount' => $tmplt->price,
            'physician' => $request['physician'],
            'pathologist' => $request['pathologist'],
        ]);

        return redirect("/labtests/pending")->with('Info','New Lab Test pending.');
    }
}
