@extends('dashboard.layout.master')
@section('content')
    <center>
        <div class="card">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">The Subject</th>
                    <th scope="col">Time</th>
                    <th scope="col">Edit List </th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $value)
                    <tr>
                        <th scope="row">{{$value->id}}</th>
                        <td>{{$value->first_name}} {{$value->sec_name}}</td>
                        <td>{{$value->email}}</td>
                        <td>{{$value->subject}}</td>
                        <td>{{$value->created_at->diffForHumans()}}</td>
                        <td>
                                <a class="btn btn-sm btn-danger" href="{{route('deletemessage',['id' => $value->id])}}"><i class="fas fa-trash-alt"></i> delete</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </center>
    <style>
        .card{
            margin-top: 140px;
            text-align: center;
            margin-left: 300px;
            margin-right: 50px;

        }
    </style>
@endsection
