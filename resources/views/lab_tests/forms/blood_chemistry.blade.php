@extends('base')

@section('content')

<?php $data = json_decode($labtest->data); ?>

<h1>Hematology Results Entry</h1>

<div class="row">
    <div class="col-md-5">
        @include('lab_tests.forms._details')
    </div>
    <div class="col-md-7">
        {!! Form::open(['url'=>"/labtests/results/$labtest->id", 'method'=>'patch']) !!}

        <table class="table table-striped table-sm">
            @foreach($data as $i=>$item)
                <?php if($i==0) continue; ?>

            <tr>
                <td>
                    {!! Form::label("item[$i]", $item->name) !!}
                </td>
                <td>
                    {!! Form::text("item[$i]", $item->result, ['class'=>'form-control']) !!}
                </td>
                <td>
                    {{$item->unit}}
                </td>
            </tr>

            @endforeach
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
