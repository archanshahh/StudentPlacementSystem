@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Add Placement Officer</h3>
        <br>
        <br>
        <img src="{{asset('images/user.png')}}" class="image rounded mx-auto d-block" alt="Placement Officer">
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <form method="post" action="{{action('Admin\PlacementOfficerController@store')}}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="name"></label><input id="name" type="text" class="form-control" value="{{old('name')}}" name="name"
                                                     placeholder="Name">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="phone"></label><input id="phone" type="text" value="{{old('phone')}}" class="form-control" name="phone"
                                                      placeholder="Phone">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="email"></label><input id="email" type="email" value="{{old('email')}}" class="form-control" name="email"
                                                      placeholder="Email">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="password"></label><input id="password" type="password" class="form-control"
                                                         name="password"
                                                         placeholder="Password">
                </div>
            </div>
            <br>
            <br>
            <input type="hidden" name="usertype" value="po">
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Add PTO</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
