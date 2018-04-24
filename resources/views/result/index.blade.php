@extends('layouts.app')
@section('content')
    <h3>Result</h3>
    <div class="well">
            <table>
                <tr>
                    <th>S.No</th>
                    <th>Result Name</th>
                    <th>Result</th>
                </tr>
    @if(count($results) >0)
        @php
            $i = 1
        @endphp
        @foreach($results as $result)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$result->result_name}}</td>
                    <td>{{$result->report}}</td>
                </tr>
                
                @php ($i++)
        @endforeach
    </table>
    </div>        
    @else   

    @endif
@endsection