@extends('layouts.app')
@section('content')
    <h1>Login</h1>

    {!! Form::open(['action' => 'UsersController@login','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('username','Username')}}
            {{Form::text('username','',['class'=>'form-control','placeholder'=>'Username'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::text('password','',['class'=>'form-control','placeholder'=>'Password'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection  