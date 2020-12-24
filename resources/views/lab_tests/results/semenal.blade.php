@extends('base')

@section('content')

@include('lab_tests.results._header')

<?php $data = json_decode($labtest->data) ?>

<div class="page">

<table class="table table-bordered table-sm">
    <tr><th colspan="2" class="text-center"><h3>MACROSCOPIC EXAMINATION</h3></th></tr>
    @for($i=1; $i<=4; $i++)
    <tr>
        <th class="text-right" style="width:30%">{{$data[$i]->name}}</th>
        <td>{{$data[$i]->result}} {{$data[$i]->unit}}</td>
    </tr>
    @endfor
    <tr>
        <th class="text-right">LIQUEFACTION TIME</th>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <th class="text-right">{{$data[5]->name}}</th>
        <td>{{$data[5]->result}} {{$data[$i]->unit}}</td>
    </tr>
    <tr>
        <th class="text-right">{{$data[6]->name}}</th>
        <td>{{$data[6]->result}} {{$data[$i]->unit}}</td>
    </tr>
    <tr>
        <th class="text-center" colspan="2"><h3>MICROSCOPING EXAMINATION</h3></th>
    </tr>

    @for($i=7; $i<=11; $i++)
    <tr>
        <th class="text-right" style="width:30%">{{$data[$i]->name}}</th>
        <td>{{$data[$i]->result}} {{$data[$i]->unit}}</td>
    </tr>
    @endfor

    <tr>
        <th class="text-center" colspan="2"><h3>SPERM MORPHOLOGY</h3></th>
    </tr>

    <tr>
        <th class="text-right">{{$data[12]->name}}</th>
        <td>{{$data[12]->result}} {{$data[12]->unit}}</td>
    </tr>
    <tr>
        <th class="text-right">{{$data[13]->name}}</th>
        <td>{{$data[13]->result}} {{$data[13]->unit}}</td>
    </tr>
    <tr>
        <th>&nbsp;</th>
        <td>
            <table>
                @for($i=14; $i<=19; $i++)
                <tr>
                    <th class="text-right" style="border: 0">{{$data[$i]->name}}</th>
                    <td style="border: 0">{{$data[$i]->result}} {{$data[$i]->unit}}</td>
                </tr>
                @endfor
            </table>
        </td>
    </tr>
</table>
<br>
<div class="row" style="margin-top: 40px">
    <div class="col-md-6">
        <div class="text-left">
            <strong><u>{{$labtest->med_tech}}</u></strong> <br>
            <i>Medical Technologist</i>
        </div>
    </div>
    <div class="col-md-6">
        <div class="text-right">
            <strong><u>{{$labtest->pathologist}}</u></strong> <br>
            <i>Pathologist</i>
        </div>
    </div>
</div>

</div>

@stop
