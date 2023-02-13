@extends('layouts.admin')
@section('content')
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button class="btn btn-primary">
            Logout
        </button>
    </form>

@endsection
