@extends('base')

@section('content')

@include('lab_tests.results._header')

<div class="page">

<?php $data = json_decode($labtest->data); ?>

<table class="table table-bordered table-sm">
    <tr>
        <th colspan="3">
            COMPLETE BLOOD COUNT
        </th>
    </tr>
    <tr>
        <th>&nbsp;</th>
        <th>NORMAL VALUES</th>
        <th>PATIENT'S RESULT</th>
    </tr>
    @for($i=1; $i<=7; $i++)

    <tr>
        <th>{{$data[$i]->name}}</th>
        <td>{!! $data[$i]->normal !!}</td>
        <td>{{$data[$i]->result}}</td>
    </tr>

    @endfor
</table>

<table class="table table-bordered table-sm">
    <tr>
        <th>
            WBC Differential Count
        </th>
        <th>Adult</th>
        <th>0-6 mos.</th>
        <th>6-12 mos.</th>
        <th>Result</th>
    </tr>
    @for($i=8; $i<=13; $i++)

    <tr>
        <th>{{$data[$i]->name}}</th>
        <td>{{$data[$i]->adult}}</td>
        <td>{{$data[$i]->zerotosix}}</td>
        <td>{{$data[$i]->sixtotwelve}}</td>
        <td>{{$data[$i]->result}}</td>
    </tr>

    @endfor
    <tr>
        <td colspan="5">&nbsp;</td>
    </tr>
    @for($i=14; $i<=16; $i++)

    <tr>
        <th>{{$data[$i]->name}}</th>
        <td colspan="3" class="text-center">{{$data[$i]->normal}}</td>
        <td>{{$data[$i]->result}}</td>
    </tr>

    @endfor

</table>

<p style="font-size: 1.8em"><strong>BLOOD TYPE: {{$data[17]->result}}</strong></p>

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
