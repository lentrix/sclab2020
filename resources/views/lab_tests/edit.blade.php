@extends('base')

@section('content')

<h1>Edit Test Results</h1>
<div class="row">
    <div class="col-md-4">
        <h3>Details</h3>
        <table class="table table-bordered">
            <tr>
                <th class="bg-primary text-white">Laboratory Test</th>
                <td>{{$labtest->test_name}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Patient Name</th>
                <td>{{$labtest->patient->name}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Age</th>
                <td>{{$labtest->patient->bdate->age}}</td>
            </tr>
            <tr>
                <th class="bg-primary text-white">Physician</th>
                <td>{{$labtest->physician}}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-8">
        <h3>Individual Test Items</h3>
        {!! Form::open(['url'=>"labtests/$labtest->id", 'method'=>'patch']) !!}
        <table class="table table-bordered table-sm">
            <thead>
                <tr class="bg-primary text-white">
                    <th>Test Item</th>
                    <th>Normal Values</th>
                    <th>Test Result</th>
                </tr>
            </thead>
            <tbody>
                @foreach($labtest->items as $item)

                <tr>
                    <td>{{$item->item}}</td>
                    <td>{{$item->normal}}</td>
                    <td>
                        <input type="text" name="item[{{$item->id}}]" value="{{$item->result}}" class="form-control">
                    </td>
                </tr>

                @endforeach
            </tbody>
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
