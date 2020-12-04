@extends('base')

@section('content')

<h1>Laboratory Tests (<span class="caps">{{$status}}</span>)</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>Lab Test</th>
            <th>Patient</th>
            <th>Physician</th>
            <th>Date & Time</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        @foreach($labTests as $lb)
        <tr>
            <td>{{$lb->test_name}}</td>
            <td>{{$lb->patient->name}}</td>
            <td>{{$lb->physician}}</td>
            <td>{{$lb->created_at}}</td>
            <td>
                <a href='{{url("/labtests/view/$lb->id")}}' class="btn btn-primary btn-sm">...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
