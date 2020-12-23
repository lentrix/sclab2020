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
                        <td colspan="3" style="font-size: 1.2em; font-weight: bold">
                            {{$data[$i]->header}}
                        </td>
                    </tr>
                @endif

                <tr>
                    <th>{!! Form::label("item[$i]", $data[$i]->name) !!}</th>
                    <td>
                        {!! Form::text("item[$i]", $data[$i]->result, ["class"=>'form-control']) !!}
                    </td>
                    <td>
                        {{$data[$i]->unit}}
                    </td>
                </tr>

            @endfor
        </table>
        @include('lab_tests.forms._bottom')

        {!! Form::close() !!}
    </div>
</div>

@stop
