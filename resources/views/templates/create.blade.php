@extends('base')

@section('content')

<h1>New Lab Test Template</h1>

<div class="row">
    <div class="col-md-6">
        {!! Form::open(['url'=>'/templates', 'method'=>'post']) !!}

        <div class="form-group">
            {{Form::label("name")}}
            {{Form::text('name',null, ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label("price")}}
            {{Form::text('price',null, ['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                Create Template
            </button>
        </div>

        {!! Form::close() !!}
    </div>
    <div class="col-md-6">

    </div>
</div>

@stop
