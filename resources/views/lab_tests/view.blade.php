@extends('base')

@section('content')

<h1 class="d-print-none">
    View Laboratory Test
    <button class="btn btn-secondary float-right" onclick="window.print()">
        Print Result
    </button>
</h1>
<br>
<div class="row">
    <div class="col-md-12">

        <div style="color: #e36602; text-align:center">
            <img src="{{asset('images/sclab_logo.png')}}" style="float:left; height: 50px" alt="">
            <div style="font-size: 1.3em; font-weight: bold; border-bottom: 3px solid #e36602; margin: 0 150px">
                STARS AND COMET MEDICAL CLINIC & LABORATORY
            </div>
            <div>
                Pooc Occidental, Tubigon, Bohol. Cell No.: 0948.594.8216 / Tel.No.: 508-8055<br>
                Email Address: stars.comet_laboratory@yahoo.com.ph <br>
                DOH License No.: GCL-7-2017-173-P
            </div>
        </div>
        <br>
        <table class="table table-bordered result-table">
            <tr>
                <th>Patient Name:</th><td colspan="3">{{$labTest->patient->name}}</td>
                <th>Physician:</th><td>{{$labTest->physician}}</td>
            </tr>
            <tr>
                <th>Age:</th><td>{{$labTest->patient->bdate->age}} Y.O.</td>
                <th>Sex:</th><td>{{$labTest->patient->gender}}</td>
                <th>Date & Time:</th><td>{{$labTest->created_at->toDayDateTimeString()}}</td>
            </tr>
        </table>

        <h2 style="text-align:center">{{$labTest->test_name}}</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th with="25%">Test</th>
                    <th>Normal Values</th>
                    <th width="25%">Test Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach($labTest->items as $item)

                <tr>
                    <td>{{$item->item}}</td>
                    <td>{{$item->normal}}</td>
                    <td>{{$item->result}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <br><br>
        <table style="width: 100%">
            <tr>
                <td width="25%" style="text-align:center; font-size: 1.2em">
                    <strong><u>{{$labTest->pathologist}}</u></strong><br>
                    <i>Pathologist</i>
                </td>
                <td width="50%">
                    &nbsp;
                </td>
                <td width="25%" style="text-align:center; font-size: 1.2em">
                    <strong><u>{{$labTest->med_tech}}</u></strong><br>
                    <i>Medical Technologist</i>
                </td>
            </tr>
        </table>
    </div>
</div>

@stop
