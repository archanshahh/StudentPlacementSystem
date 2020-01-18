@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-3">
            <form class="box1">
                <div class="form-group">
                    <label for="exampleInputEmail1">Admin Id</label>
                    <i class="fa fa-user icon"></i><input type="text" class="form-control" id="adminid" aria-describedby="adminid" placeholder="Admin Id">
                </div>
                <div class="form-group">
                    <label for="inputPassword1">Password</label>

                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="Check">Remember me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <div class="container">
                    <a href="#" data-target="#pwdModal" data-toggle="modal">Forgot my password</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
