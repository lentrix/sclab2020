@extends('base')

@section('content')

<h1>Change Password</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::open(['url'=>"/profile/change-password/$user->id", 'method'=>'patch']) !!}

        <div class="form-group">
            {!! Form::label("password", "Current Password") !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label("new_password", "New Password") !!}
            {!! Form::password('new_password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label("new_password_confirmation", "Confirm Password") !!}
            {!! Form::password('new_password_confirmation', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            <button class="btn btn-primary">
                <i class="fas fa-check"></i>
                Change Password
            </button>
        </div>

        {!! Form::close() !!}
    </div>
</div>

@stop
