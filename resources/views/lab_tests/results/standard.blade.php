@extends('base')

@section('content')

@include("lab_tests.results._header")

<br>
<table class="table table-bordered result-table">
    <tr>
        <th>Patient Name:</th><td colspan="3">{{$labtest->patient->name}}</td>
        <th>Physician:</th><td>{{$labtest->physician}}</td>
    </tr>
    <tr>
        <th>Age:</th><td>{{$labtest->patient->bdate->age}} Y.O.</td>
        <th>Sex:</th><td>{{$labtest->patient->gender}}</td>
        <th>Date & Time:</th><td>{{$labtest->created_at->toDayDateTimeString()}}</td>
    </tr>
</table>

<h2 style="text-align:center">{{$labtest->test_name}}</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th with="25%">Test</th>
            <th>Normal Values</th>
            <th width="25%">Test Result</th>
        </tr>
    </thead>
    <tbody>
        @foreach(json_decode($labtest->data) as $i=>$item)
            <?php if($i==0) continue; ?>
        <tr>
            <td>{{$item->name}}</td>
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
            <strong><u>{{$labtest->pathologist}}</u></strong><br>
            <i>Pathologist</i>
        </td>
        <td width="50%">
            &nbsp;
        </td>
        <td width="25%" style="text-align:center; font-size: 1.2em">
            <strong><u>{{$labtest->med_tech}}</u></strong><br>
            <i>Medical Technologist</i>
        </td>
    </tr>
</table>

@stop
