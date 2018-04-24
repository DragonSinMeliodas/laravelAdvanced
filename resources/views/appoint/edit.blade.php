{{-- TODO: EDIT APPOINTMENT --}}
@extends('layouts.app')
{{-- Laravel Collectives to use form --}}
@section('content')
    <h1>Book Appointment</h1>

    {!! Form::open(['action' => ['apoint.update',$appoint->id],'method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('apointee_name','Apointment With :')}}
            {{Form::text('apointee_name',$appointment->apointee_name,['class'=>'form-control','placeholder'=>'Appointment With'])}}
        </div>
        <div class="form-group">
            {{Form::label('date','Date')}}
            {{Form::date('date',$appointment->apointment_date,['class'=>'form-control','placeholder'=>'Designation'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection  