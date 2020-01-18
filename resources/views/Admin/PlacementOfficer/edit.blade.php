@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Update Placement Officer</h3>
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
        <form action="{{action('Admin\PlacementOfficerController@update', $placementOfficer->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="name"></label><input id="name" type="text" class="form-control" name="name"
                                                     placeholder="Name"
                                                     value="{{old('name', $placementOfficer->name)}}">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="phone"></label><input id="phone" type="text" class="form-control" name="phone"
                                                       placeholder="Phone"
                                                       value="{{old('name', $placementOfficer->phone)}}">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="email"></label><input id="email" type="text" class="form-control"
                                                               name="email" placeholder="Email"
                                                               value="{{old('email', $placementOfficer->email)}}">
                </div>
            </div>
            <br>
            <input type="hidden" name="usertype" value="po">
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Update Placement Officer</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
