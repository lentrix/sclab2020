@extends('base')

@section('content')

<div class="page">

@include('lab_tests.results._header')

<?php $data = json_decode($labtest->data); ?>

<div class="row">
    <div class="col-md-6">
        <h3>GROSS EXAMINATION</h3>
        <table class="table table-bordered table-sm">
            @for($i=1; $i<=2; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}}</td>
            </tr>
            @endfor
        </table>

        <br>
        <h3>CHEMICAL EXAMINATION</h3>
        <table class="table table-bordered table-sm">
            @for($i=10; $i<=13; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}}</td>
            </tr>
            @endfor
        </table>

        <br>
        <h3>CRYSTALS</h3>
        <table class="table table-bordered table-sm">
            @for($i=20; $i<=28; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}}</td>
            </tr>
            @endfor
        </table>
    </div>
    <div class="col-md-6">
        <h3>MICROSCOPIC EXAMINATION</h3>
        <table class="table table-bordered table-sm">
            @for($i=3; $i<=9; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}} {{$data[$i]->unit}}</td>
            </tr>
            @endfor
        </table>

        <br>
        <h3>CASTS</h3>
        <table class="table table-bordered table-sm">
            @for($i=14; $i<=19; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}}</td>
            </tr>
            @endfor
        </table>
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
