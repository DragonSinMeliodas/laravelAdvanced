@extends('layouts.app')

@section('content')
    <h1>Availability</h1>

    @if(count($avail) > 0)
        @foreach($avail as $a)
            <div class="well">
            <h3><a href="/available/{{$a->id}}">{{$a->username}}</a></h3>
            </div>
        @endforeach
        {{$avail->links()}}
    @else
        <p> No Availability </p>
    @endif
@endsection  