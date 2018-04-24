@extends('layouts.app')
@section('content')
    <div>
        <h3>User Details</h3>
        <p>Name : {{$user->name}}</p>
        <p>Email : {{$user->email}}</p>
        <p>Username : {{$user->username}}</p>
        <p>User Type : {{$user->designation}}</p> 
    </div>
    <div>
        <a href="/result/{{$user->id}}">Report</a> | <a href="/appoint/{{$user->id}}">Appointment</a> | <a href="/prescription/{{$user->id}}">Prescription</a>
    </div>
@endsection  