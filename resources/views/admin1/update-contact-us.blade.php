@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Update Contact Us</h3>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.</p>
        <br>
        <img src="{{asset('images/user.png')}}" class="image rounded mx-auto d-block" alt="Company">
        <br>
        <form action="" method="post">
            <div class="row no-gutters justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="email"></label><input id="email" type="email" class="form-control" name="email"
                                                      placeholder="Email">
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="mobile"></label><input id="mobile" type="text" class="form-control" name="mobile"
                                                       placeholder="Mobile">
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="location"></label><input id="location" type="text" class="form-control"
                                                         name="location" placeholder="Location">
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="col-">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success float-right">Update Contact US</button>
                </div>
            </div>

            <br>
        </form>
    </div>
    @endsection
