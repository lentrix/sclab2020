@extends('base')

@section('content')

@include("lab_tests.results._header")

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
