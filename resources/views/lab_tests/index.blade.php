@extends('base')

@section('content')

<h1>Current Laboratory Tests</h1>

<table class="table table-bordered">
    <thead>
        <tr class="bg-info text-white">
            <th>Lab Test</th>
            <th>Patient</th>
            <th>Physician</th>
            <th>Date & Time</th>
            <th>Status</th>
            <th class="text-center">...</th>
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
            <td class="text-center">
                <a href='{{url("/labtests/$lb->id")}}' title="View Results" class="btn btn-info btn-sm">
                    <i class="fas fa-door-open"></i>
                </a>
                @if(auth()->user()->role=="medtech")
                <a href="{{url('/labtests/edit-results/' . $lb->id)}}"
                        title="Edit Results" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i>
                </a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop
