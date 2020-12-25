@extends('base')

@section('content')

<?php $data = json_decode($labtest->data); ?>
<br>
<div class="row">
    <div class="col-md-4">
        @include('lab_tests.forms._details')
    </div>
    <div class="col-md-8">
        {!! Form::open(['url'=>"/labtests/results/$labtest->id", 'method'=>'patch']) !!}

        <div class="form-group">
            {!! Form::label("item[1]", $data[1]->name) !!}
            {!! Form::text("item[1]", $data[1]->result, ["class"=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label("item[2]", $data[2]->name) !!}
            {!! Form::textarea("item[2]", $data[2]->result, ["class"=>'form-control tinymce-editor']) !!}
        </div>

        @include('lab_tests.forms._bottom')

        {!! Form::close() !!}
    </div>
</div>

@stop
