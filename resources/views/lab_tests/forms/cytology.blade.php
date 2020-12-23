
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
                @if(isset($data[$i]->header))
                    <tr>
                        <td colspan="2" style="font-size: 1.2em; font-weight: bold">
                            {{$data[$i]->header}}
                        </td>
                    </tr>
                @endif
                <tr>
                    <td>
                        {!! Form::label("item[$i]", $data[$i]->name) !!}
                    </td>
                    <td>
                        @if($data[$i]->result!='1' && $data[$i]->result!='0')
                            {!! Form::text("item[$i]", $data[$i]->result, ['class'=>'form-control']) !!}
                        @else
                            {!! Form::checkbox("item[$i]", 1, $data[$i]->result, ["id"=>"item[$i]"]) !!}
                        @endif
                    </td>
                </tr>
            @endfor
        </table>
        @include('lab_tests.forms._bottom')
        {!! Form::close() !!}
    </div>
</div>

@stop
