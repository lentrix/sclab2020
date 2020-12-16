@extends('base')

@section('content')

<div style="font-size: 1.3em">

@include('lab_tests.results._header')

<?php $data = json_decode($labtest->data); ?>

<p><strong>{{ $data[1]->name }} {{$data[1]->result}}</strong></p>

<div class="row">
    <div class="col-md-3">{{$data[2]->name}} {{$data[2]->result}}</div>
    <div class="col-md-3">{{$data[3]->name}} {{$data[3]->result}}</div>
    <div class="col-md-3">{{$data[4]->name}} {{$data[4]->result}}</div>
    <div class="col-md-3">{{$data[5]->name}} {{$data[5]->result}}</div>
</div>

<div class="row">
    <div class="col-md-12">
        METHOD:
        &nbsp;&nbsp;&nbsp;<i class="fas {{$data[6]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[6]->name}}
        &nbsp;&nbsp;&nbsp;<i class="fas {{$data[7]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[7]->name}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        {{$data[8]->name}} {{$data[8]->result}}
    </div>
</div>

<div class="row" style="margin-top: 18px">
    <div class="col-md-4">
        STATEMENT OF ADEQUACY: <br>
        <div style="padding-left: 50px">
            <i class="fas {{$data[9]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[9]->name}} <br>
            <i class="fas {{$data[10]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[10]->name}} {{$data[10]->result}}<br>
            <i class="fas {{$data[11]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[11]->name}} {{$data[11]->result}}
        </div>
    </div>
    <div class="col-md-4">
        GENERAL CONSIDERATION: <br>
        <div style="padding-left: 50px">
            <i class="fas {{$data[12]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[12]->name}} <br>
            <i class="fas {{$data[13]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[13]->name}} <br>
        </div>
    </div>
</div>
<br>
<h3 style='text-align:center'>INTERPRETATION/RESULTS</h3>

<p style="text-align: center">
    {{$data[14]->result ? $data[14]->name : ''}} &nbsp;&nbsp;&nbsp;&nbsp;
    {{$data[15]->result ? $data[14]->name : ''}}
</p>

<p>
    Inflamation: &nbsp;&nbsp;
    <i class="fas {{$data[16]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[16]->name}}&nbsp;&nbsp;&nbsp;
    <i class="fas {{$data[17]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[17]->name}}&nbsp;&nbsp;&nbsp;
    <i class="fas {{$data[18]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[18]->name}}&nbsp;&nbsp;&nbsp;
    <i class="fas {{$data[19]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[19]->name}}&nbsp;&nbsp;&nbsp;

</p>

<div class="row" style="margin-top: 18px">
    <div class="col-md-4">
        <i class="fas {{$data[20]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[20]->name}} <br>
    </div>
    <div class="col-md-4">
        <i class="fas {{$data[21]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[21]->name}} <br>
        <div style="padding-left: 20px">
            <i class="fas {{$data[22]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[22]->name}} <br>
            <i class="fas {{$data[23]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[23]->name}} <br>
            <i class="fas {{$data[24]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[24]->name}} <br>
            <i class="fas {{$data[25]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[25]->name}} <br>
            <i class="fas {{$data[26]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[26]->name}} <br>
        </div>
    </div>

    <div class="col-md-4">
        <div style="padding-left: 20px">
            <i class="fas {{$data[27]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[27]->name}} <br>
            <i class="fas {{$data[28]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[28]->name}} <br>
            <i class="fas {{$data[29]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[29]->name}} <br>
            <i class="fas {{$data[30]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[30]->name}} <br>
            <i class="fas {{$data[31]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[31]->name}} <br>
            <i class="fas {{$data[32]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[32]->name}} <br>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 18px">
    <div class="col-md-6">
        <i class="fas {{$data[33]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[33]->name}} <br>
        <i class="fas {{$data[34]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[34]->name}} <br>
        <i class="fas {{$data[35]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[35]->name}} <br>
    </div>
    <div class="col-md-6">
        <i class="fas {{$data[36]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[36]->name}} <br>
        <i class="fas {{$data[37]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[37]->name}} <br>
        <i class="fas {{$data[38]->result?'fa-check-circle':'fa-circle'}}"></i> {{$data[38]->name}} <br>
    </div>
</div>

<p style="text-align: center; margin-top: 80px">
    <strong><u style="text-transform: uppercase">{{$labtest->pathologist}}</u></strong> <br>
    <strong><i>Pathologist</i></strong>
</p>

</div>
@stop
