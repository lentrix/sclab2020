@extends('base')

@section('content')

@include('lab_tests.results._header')

<?php $data = json_decode($labtest->data); ?>

<div class="page">

    <br>

    <h3>Examination Desired: {!! $data[1]->result !!}</h3>
    <br>

    <div class="card">
        <div class="card-body">
            <h3>Remarks:</h3>
            <p>
                {!! $data[2]->result !!}
            </p>
        </div>
    </div>

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
