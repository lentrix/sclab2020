@extends('base')

@section('content')

<h1>New Lab Test</h1>
{!! Form::open(['url'=>'/labtests', 'method'=>'post']) !!}
<div class="row">

    {!! Form::hidden("patient_id", $patient->id) !!}
    <div class="col-md-4">
        <table class="table table-bordered">
            <tr>
                <th class="bg-primary text-white">Patient:</th>
                <td>{{$patient->name}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Sex:</th>
                <td>{{$patient->gender}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Age:</th>
                <td>{{$patient->bdate->age}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-4">

        <div class="form-group">
            {!! Form::label('formal_name', "Lab Test Desired") !!}
            {!! Form::select('formal_name', \App\LabTestBlueprint::labsList(), null, ['class'=>'form-control','placeholder'=>'Select Lab Test']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("physician") !!}
            {!! Form::text("physician", null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("pathologist") !!}
            {!! Form::text("pathologist", null, ['class'=>'form-control']) !!}
        </div>

    </div>
    <div class="col-md-3 offset-md-1">
        <button class="btn btn-primary btn-block" type="submit">
            Save Lab Test
        </button>
        <a href='{{url("/patients/$patient->id")}}' class="btn btn-success btn-block">Cancel</a>
    </div>

</div>

{!! Form::close() !!}


@stop
