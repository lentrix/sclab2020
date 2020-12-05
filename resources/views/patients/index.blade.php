@extends('base')

@section('content')

@include('patients._search-modal')

<h1>
    Patients
    <span style="font-size: 0.5em; color: #99c; font-style: italic">{{$details}}</span>
</h1>
<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Address</th>
                    <th class="text-center">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $p)
                    <tr>
                        <td>{{$p->lname}}</td>
                        <td>{{$p->fname}}</td>
                        <td>{{$p->address}}</td>
                        <td class="text-center">
                            <a href="{{url('/patients/' . $p->id)}}" class="btn btn-primary btn-sm" title="View patient">
                                <i class="fas fa-door-open"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Patient Menu
            </a>
            <a href="{{url('/patients/create')}}" class="list-group-item list-group-item-action">Create New</a>
            <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#searchModal">Search</button>
            <a href="{{url('/patients')}}" class="list-group-item list-group-item-action">Recent</a>
        </div>
    </div>
</div>

@stop
