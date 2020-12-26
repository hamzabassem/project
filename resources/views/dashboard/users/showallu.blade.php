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
                <th scope="col">Created At</th>
                <th scope="col">Edit List </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $value)
            <tr>
                <th scope="row">{{$value->id}}</th>
                <td>{{$value->name}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->created_at->diffForHumans()}}</td>
                <td>
                    <a class="btn btn-sm btn-primary" href="{{route('edituser',['id' => $value->id])}}"><i class="far fa-edit"></i> edit</a>
                    <a class="btn btn-sm btn-danger" href="{{route('deleteuser',['id' => $value->id])}}"><i class="fas fa-trash-alt"></i> delete</a>
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
