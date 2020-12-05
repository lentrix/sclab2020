@extends('base')

@section('content')

<h1>Current Laboratory Tests</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-primary text-white">
            <th>Lab Test</th>
            <th>Patient</th>
            <th>Physician</th>
            <th>Date & Time</th>
            <th>Status</th>
            <th>...</th>
        </tr>
    </thead>
    <tbody>
        @foreach($today as $lb)
        <tr>
            <td>{{$lb->test_name}}</td>
            <td>{{$lb->patient->name}}</td>
            <td>{{$lb->physician}}</td>
            <td>{{$lb->created_at->toDayDateTimeString()}}</td>
            <td>{{$lb->status}}</td>
            <td>
                <a href='{{url("/labtests/$lb->id")}}' class="btn btn-primary btn-sm">...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
