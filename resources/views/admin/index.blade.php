@extends('layouts.admin')
@section('content')
    <div class="container">
        <h3 class="text text-primary">users list</h3>
        @if(session()->has('success'))
            <p class="alert alert-success">
                {{session()->get('success')}}
            </p>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach( $users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <img src="{{asset('/storage/'.$user->image)}}" height="100" alt="image not found" class="bg-info">
                </td>
                <td>
                    <a class="btn btn-success" href="{{route('users.create')}}">create other user</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
