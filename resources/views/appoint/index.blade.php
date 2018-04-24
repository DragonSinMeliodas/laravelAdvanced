@extends('layouts.app')

@section('content')
    <h3> Your Appointments </h3>
    <a href="/apoint/create">Book</a>
    @if(count($appointments) > 0)
        @php ($i =1)
        <table style="border: 1px solid black">
            <tr>
                <th>S.No | </th>
                <th>Appointment With | </th>
                <th>Appointment Date </th>
            </tr>
            @foreach($appointments as $appoint)
                <tr>
                <td>{{$i}}</td>
                <td>{{$appoint->apointee_username}}</td>
                <td>{{$appoint->apointment_date}}</td>
                <td>{!! Form::open(['action' => ['ApointmentController@destroy',$appoint->id],'method'=>'delete']) !!}
                        {{Form::submit('Cancel',['class'=>'btn btn-danger'])}}
                    {!! Form::close() !!}
                </td>
                <td>{!! Form::open(['action' => ['ApointmentController@edit',$appoint->id],'method'=>'get']) !!}
                        {{Form::submit('Edit',['class'=>'btn btn-info'])}}
                    {!! Form::close() !!}
                </td>

                </tr>
                @php ($i++)
            @endforeach
        </table>
    @endif

@endsection