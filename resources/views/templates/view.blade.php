@extends('base')

@section('content')

<div class="modal fade" id="addItemModal" tabindex="-1" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addItemModalLabel">Add Test Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::open(['url'=>"/templates/add-item", 'method'=>'post']) !!}
            <div class="modal-body">
                {{Form::hidden('lbt_template_id', $template->id)}}
                <div class="form-group">
                    {{Form::label('test', 'Test Name')}}
                    {{Form::text('test',null,['class'=>'form-control','required'])}}
                </div>
                <div class="form-group">
                    {{Form::label('normal', 'Normal Values')}}
                    {{Form::textarea('normal',null,['class'=>'form-control'])}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add Item</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<div class="modal fade" id="updateTemplateModal" tabindex="-1" aria-labelledby="updateTemplateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTemplateModalLabel">Update Lab Test Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            {!! Form::model($template, ['url'=>"/templates/$template->id", 'method'=>'put']) !!}
            <div class="modal-body">
                <div class="form-group">
                    {{Form::label("name")}}
                    {{Form::text('name',null, ['class'=>'form-control'])}}
                </div>

                <div class="form-group">
                    {{Form::label("price")}}
                    {{Form::text('price',null, ['class'=>'form-control'])}}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Template</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


<h1>{{$template->name}}</h1>

<div class="row">
    <div class="col-md-9">
        <table class="table table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Test Item</th>
                    <th>Normal Values</th>
                    <th class="text-center">...</th>
                </tr>
            </thead>
            <tbody>
                @foreach($template->items as $item)
                <tr>
                    <td>{{$item->test}}</td>
                    <td>{!! $item->normal !!}</td>
                    <td class="text-center">
                        @include('templates._edit', ['id'=>$item->id, 'test'=>$item->test,'normal'=>$item->normal])
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <button class="btn btn-secondary btn-block" type="button" data-toggle="modal" data-target="#addItemModal">
            Add Test Item
        </button>
        <button class="btn btn-secondary btn-block" type="button" data-toggle="modal" data-target="#updateTemplateModal">
            Update {{$template->name}}
        </button>
    </div>
</div>

@stop
