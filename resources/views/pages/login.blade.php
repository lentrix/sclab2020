@extends('base')

@section('content')

<div class="login">

    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>User Login</h4>
                </div>
                <div class="card-body">
                    {!! Form::open(['url'=>'login', 'method'=>'post']) !!}
                        <div class="form-group">
                            {{Form::label('username', 'User Name')}}
                            {{Form::text('username',null,['class'=>'form-control'])}}
                        </div>

                        <div class="form-group">
                            {{Form::label('password')}}
                            {{Form::password('password',['class'=>'form-control'])}}
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary float-right" type="submit"> &nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp; </button>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

</div>

@stop
