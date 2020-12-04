@extends('base')

@section('content')

<h1>Lab Test Templates</h1>

<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary">
                    <th>Labpratory Test</th>
                    <th>Price</th>
                    <th class="text-center">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($templates as $tpl)
                <tr>
                    <td>{{$tpl->name}}</td>
                    <td>{{$tpl->price}}</td>
                    <td class="text-center">
                        <a href='{{url("/templates/$tpl->id")}}' class="btn btn-primary btn-sm">...</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <div class="list-group">
            <div class="list-group-item bg-primary text-white text-center">Template Menu</div>
            <a href="{{url('/templates/create')}}" class="list-group-item list-group-item-action text-center">
                Create New Template
            </a>
        </div>
    </div>
</div>

@stop
