@extends('base')

@section('content')

<h1>Create Patient</h1>

<div class="row">
    <div class="col-md-4">
        <img src="{{asset('images/nurse_recording.jpg')}}" alt="Nurse" style="height: 100%">
    </div>
    <div class="col-md-6">
        {!! Form::open(['url'=>'/patients', 'method'=>'post']) !!}

            <div class="form-group">
                {{Form::label('lname', 'Last Name')}}
                {{Form::text('lname',null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('fname', 'First Name')}}
                {{Form::text('fname',null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                <label>Gender</label><br>
                {{Form::radio('gender','female', null,['id'=>'female'])}} {{Form::label('female')}}
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {{Form::radio('gender','male',null, ['id'=>'male'])}} {{Form::label('male', 'Male')}}
            </div>

            <div class="form-group">
                {{Form::label('bdate', 'Birth Date')}}
                {{Form::date('bdate',null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::text('address',null, ['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('phone', 'Phone')}}
                {{Form::text('phone',null, ['class'=>'form-control'])}}
            </div>

            <form-group>
                <button class="btn btn-primary float-right" type="submit">Save New Patient</button>
            </form-group>

        {!! Form::close() !!}
    </div>

</div>

@stop
