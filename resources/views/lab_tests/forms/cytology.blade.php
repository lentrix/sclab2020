
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
