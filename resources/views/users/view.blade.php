@extends('base')

@section('content')

<h1>User Profile</h1>

<div class="row">
    <div class="col-md-4">
        <table class="table table-bordered">
            <tr>
                <th class='bg-primary text-white'>User Name</th>
                <td>{{$user->username}}</td>
            </tr>
            <tr>
                <th class='bg-primary text-white'>Full Name</th>
                <td>{{$user->fullname}}</td>
            </tr>
            <tr>
                <th class='bg-primary text-white'>User Role</th>
                <td>{{$user->role}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-3 offset-md-5">
        <a href="{{url('/profile/edit/'.$user->id)}}" class="btn btn-info btn-block">
            Edit Profile
        </a>
        <a href="{{url('/profile/change-password/' . $user->id)}}" class="btn btn-warning btn-block">
            Change User Password
        </a>
    </div>
</div>

@stop
