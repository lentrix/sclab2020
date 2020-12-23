@extends('base')

@section('content')

<?php $data = json_decode($labtest->data); ?>

<div class="row">
    <div class="col-md-4">
        @include('lab_tests.forms._details')
    </div>
    <div class="col-md-8">
        {!! Form::open(['url'=>"/labtests/results/$labtest->id", 'method'=>'patch']) !!}

        <div class="form-group">
            {!! Form::label("item[1]", "Remarks") !!}
            {!! Form::textarea("item[1]", $data[1]->result, ["class"=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("item[2]", "Cadiologist/Internist") !!}
            {!! Form::text("item[2]", $data[2]->result, ["class"=>'form-control']) !!}
        </div>

        <div class="form-group">
            Status:
            &nbsp;&nbsp;&nbsp;&nbsp;
            {!! Form::radio("status", "pending", $labtest->status=='pending', ["id"=>'pending']) !!}
            {!! Form::label("pending", "Pending") !!}
            &nbsp;&nbsp;&nbsp;&nbsp;
            {!! Form::radio("status", "on-going", $labtest->status=='on-going', ["id"=>'on-going']) !!}
            {!! Form::label("on-going", "On-going") !!}
            &nbsp;&nbsp;&nbsp;&nbsp;
            {!! Form::radio("status", "available", $labtest->status=='available', ["id"=>'available']) !!}
            {!! Form::label("available", "Available") !!}
        </div>

        <div class="form-group">
            <button class="btn btn-primary">
                Save Changes
            </button>
            <a href='{{url("/labtests/reset/$labtest->id")}}' class="btn btn-info">Reset</a>
        </div>

        {!! Form::close() !!}
    </div>
</div>



@stop
