@extends('layouts.admin');
@section('content')
    <div class="container">
        <h3 class="text text-primary">
            user create
        </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="name" value="{{old('name')}}" name="name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="Email" value="{{old('email')}}" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="Password" name="password">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword" name="password_confirmation">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="image" class="col-sm-2 col-form-label">Profile image</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">
                Create
            </button>

        </form>
    </div>

@endsection
