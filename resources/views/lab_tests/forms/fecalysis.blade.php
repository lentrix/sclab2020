@extends('base')

@section('content')

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
                    <th>{!! Form::label("item$i", $data[$i]->name) !!}</th>
                    <td>
                        {!! Form::text("item[$i]", $data[$i]->result, ["class"=>'form-control', 'id'=>"item$i"]) !!}
                    </td>
                </tr>

            @endfor

            <tr>
                <td>
                    Status:
                </td>
                <td>
                    {!! Form::radio("status", "pending", $labtest->status=="pending", ['id'=>'pending']) !!}
                    {!! Form::label("pending", "Pending") !!}&nbsp;&nbsp;&nbsp;&nbsp;

                    {!! Form::radio("status", "on-going",  $labtest->status=="on-going", ['id'=>'on-going']) !!}
                    {!! Form::label("on-going", "On-Going") !!}&nbsp;&nbsp;&nbsp;&nbsp;

                    {!! Form::radio("status", "available",  $labtest->status=="available", ['id'=>'available']) !!}
                    {!! Form::label("available", "Available") !!}
                </td>
            </tr>
        </table>

        <div class="form-group">
            <button class="btn btn-primary">
                Save Results
            </button>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@stop
