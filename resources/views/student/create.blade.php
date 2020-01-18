@extends('master')
@section('content')
    <div class="container main-content">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h3 class="title">Student Registration</h3>
        <br>

        <br>
        <img src="{{ asset('images/user.png') }}" class="image rounded mx-auto d-block" alt="Job Posting">
        <br>
        <form method="post" action="{{action('StudentController@store')}}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="name"></label><input id="name" type="text" class="form-control" name="name" value="{{old('name')}}"
                                                     placeholder="Name">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="email"></label><input id="email" type="email" class="form-control" value="{{old('email')}}"
                                                      name="email" placeholder="Email">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="password"></label><input id="password" type="password" class="form-control" value=""
                                                      name="password" placeholder="Password">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="user_type"></label><input id="user_type" type="hidden" class="form-control" value="student"
                                                      name="user_type">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="course"></label><input id="course" type="text" class="form-control" value="{{old('course')}}"
                                                       name="course" placeholder="Course">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="expected_graduation"></label><input id="expected_graduation" type="text" value="{{old('expected_graduation')}}"
                                                                    class="form-control"
                                                                    name="expected_graduation"
                                                                    placeholder="Expected Graduation">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="mobile"></label><input id="mobile" type="text" class="form-control" value="{{old('mobile')}}"
                                                       name="mobile" placeholder="Mobile">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="institution"></label><input id="institution" type="text" class="form-control" value="{{old('institution')}}"
                                                            name="institution" placeholder="Institution">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="gpa"></label><input id="gpa" type="number" class="form-control" step="0.01" value="{{old('gpa')}}"
                                                    name="gpa" placeholder="GPA">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="m" name="gender">Male
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" value="f" name="gender">Female
                    </label>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
