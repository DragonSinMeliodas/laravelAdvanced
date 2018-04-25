@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
    <h1>Book Appointment</h1>

    {!! Form::open(['action' => ['ApointmentController@update',$appointment->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username',$appointment->patient_username,['class'=>'form-control','placeholder'=>'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('apointee_username','Apointment With :')}}
            {{Form::text('apointee_username',$appointment->apointee_username,['class'=>'form-control','placeholder'=>'Appointment With'])}}
        </div>
        <div class="form-group">
            {{Form::label('date','Date')}}
            {{Form::date('date',$appointment->date,['class'=>'form-control','placeholder'=>'Designation'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection  