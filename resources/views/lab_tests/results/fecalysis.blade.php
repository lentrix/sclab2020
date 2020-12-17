@extends("base")

@section("content")

<div class="page">

<?php $data = json_decode($labtest->data);?>

@include("lab_tests.results._header")

<h2 style="text-align:center">GROSS EXAMINATION</h2>
<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered">
            @for($i=1; $i<=4; $i++)
            <tr>
                <th>{{$data[$i]->name}}</th>
                <td>{{$data[$i]->result}}</td>
            </tr>
            @endfor
        </table>
    </div>
</div>

<h2 style="text-align:center">MICROSCOPIC EXAMINATION</h2>
<div class="row">
    <div class="col-md-6">
        <p><strong>{{$data[5]->name}}</strong> {{$data[5]->result}}</p>
        <table class="table table-bordered">
            @for($i=6; $i<=9; $i++)
                <tr>
                    <th>{{$data[$i]->name}}</th>
                    <td>{{$data[$i]->result}}</td>
                </tr>
            @endfor
        </table>
    </div>
    <div class="col-md-6">
        <p><strong>{{$data[10]->name}}</strong> {{$data[10]->result}}</p>
        <table class="table table-bordered">
            @for($i=11; $i<=18; $i++)
                <tr>
                    <th>
                        @if($i==11 || $i==12)
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        @endif
                        {{$data[$i]->name}}
                    </th>
                    <td>{{$data[$i]->result}}</td>
                </tr>
            @endfor
        </table>
    </div>
</div>

<p><strong>{{$data[19]->name}}:</strong> {{$data[19]->result}}</p>
<hr>
<p style="font-size: 1.3em">
    <strong>{{$data[20]->name}}</strong>: {{$data[20]->result}}
</p>

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
