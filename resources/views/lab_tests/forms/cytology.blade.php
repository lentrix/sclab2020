
@extends('base')

@section('content')

<h1>Cytology Results Entry</h1>

<?php $data = json_decode($labtest->data); ?>

<div class="row">
    <div class="col-md-4">
        @include('lab_tests.forms._details')
    </div>
    <div class="col-md-8">
        {!! Form::open(['url'=>"/labtests/results/$labtest->id", 'method'=>'patch']) !!}
        <table class="table table-striped">
            @for($i=1; $i<count($data); $i++)
            <tr>
                <td>
                    {!! Form::label("item[$i]", $data[$i]->name) !!}
                </td>
                <td>
                    @if($data[$i]->value==' ')
                        {!! Form::text("item[$i]", $data[$i]->value, ['class'=>'form-control']) !!}
                    @else
                        {!! Form::checkbox("item[$i]", 1, $data[$i]->value, ["id"=>"item[$i]"]) !!}
                    @endif
                </td>
            </tr>
            @endfor
        </table>
        <div class="form-group">
            <button class="btn btn-primary">
                Save Changes
            </button>
        </div>
        {!! Form::close() !!}
    </div>
</div>

@stop
