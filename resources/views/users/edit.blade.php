@extends('base')

@section('content')

<h1>Edit Profile</h1>

<div class="row">
    <div class="col-md-4">
        {!! Form::model($user, ['url'=>"/profile/$user->id", 'method'=>'patch']) !!}

        <div class="form-group">
            {!! Form::label("username", "User Name") !!}
            {!! Form::text("username", null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("fullname", "Full Name") !!}
            {!! Form::text("fullname", null, ['class'=>'form-control']) !!}
        </div>

        @if(auth()->user()->role=="admin")

        <div class="form-group">
            {!! Form::label("role", "Role") !!}
            {!! Form::select("role", [
                'receptionist' => 'Receptionist',
                'medtech' => 'Medical Technologist',
                'admin' => 'Administrator'
            ], $user->role, ['class'=>'form-control']) !!}
        </div>

        @endif

        <div class="form-group">
            <button class="btn btn-primary">Update Profile</button>
        </div>

        {!! Form::close() !!}
    </div>

    @if(auth()->user()->role=="admin")
    <div class="col-md-4 offset-md-2">
        <div class="list-group">
            <div class="list-group-item bg-primary text-white">
                Other Users
            </div>
            @foreach($otherusers as $ou)
            <a href='{{url("/profile/edit/$ou->id")}}' class="list-group-item list-group-item-action">
                {{$ou->fullname}}
            </a>
            @endforeach
        </div>
    </div>
    @endif
</div>

@stop
