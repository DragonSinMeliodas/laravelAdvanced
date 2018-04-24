@extends('layouts.app')
@section('content')
    <h3>Result</h3>
    @if(count($results) >0)
        @foreach($results as $result)
            <div class="well">
            </div>
    @else   

    @endif
@endsection