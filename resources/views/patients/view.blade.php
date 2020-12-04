@extends('base')

@section('content')

<div class="modal fade" id="deletePatientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deletePatientModalLabel">Delete Patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {{Form::open(['url'=>"/patients/$patient->id", 'method'=>'delete'])}}
            <div class="modal-body">
                Are you sure you want to delete this patient record?
                {{Form::hidden('patient_id', $patient->id)}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete Patient</button>
            </div>
            {{Form::close()}}
        </div>
    </div>
</div>

<h1>Patient Information</h1>

<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered">
            <tr>
                <th class="bg-primary text-white">Last Name</th>
                <td>{{$patient->lname}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">First Name</th>
                <td>{{$patient->fname}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Gender</th>
                <td>{{$patient->gender}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Birth Date</th>
                <td>{{$patient->bdate->toFormattedDateString()}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Address</th>
                <td>{{$patient->address}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Phone Number</th>
                <td>{{$patient->phone}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Patient Menu
            </a>
            <a href="{{url('/patients/' . $patient->id . '/edit')}}" class="list-group-item list-group-item-action">Edit Information</a>
            <a href='{{url("/labtests/create/$patient->id")}}' class="list-group-item list-group-item-action">New Lab Test</a>
            <a href="#" class="list-group-item list-group-item-action">New Consultation</a>
            <button class="list-group-item list-group-item-action text-warning"  data-toggle="modal" data-target="#deletePatientModal">Delete Patient</button>
        </div>
    </div>
</div>

<hr>
<h2>Patient History</h2>
<p>patient history goes here...</p>

@stop
