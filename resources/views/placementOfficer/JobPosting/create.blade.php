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
        <h3>Add Job Posting</h3>
        <br>
        <br>
        <img src="{{asset('images/user.png')}}" class="image rounded mx-auto d-block" alt="Job Posting">
        <br>
        <form method="post" action="{{action('PlacementOfficer\JobPostingController@store')}}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="title"></label><input id="title" type="text"
                                                      class="form-control"
                                                      name="title"
                                                      placeholder="Title"
                                                      value="{{old('title')}}">
                </div>
            </div>
            <br>
            <div class=" row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="description"></label><input id="description" type="text" class="form-control"
                                                            name="description" placeholder="Description"
                                                            value="{{old('description')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="start_date"></label><input id="start_date" type="text" class="form-control"
                                                           name="start_date" placeholder="Start Date"
                                                           value="{{old('start_date')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="application_deadline"></label><input id="application_deadline" type="text"
                                                                     class="form-control"
                                                                     name="application_deadline"
                                                                     placeholder="Application Deadline"
                                                                     value="{{old('application_deadline')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <select id="company_id" name="company_id" class="form-control">
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="recruiter_name"></label><input id="recruiter_name" type="text" class="form-control"
                                                               name="recruiter_name" placeholder="Recruiter"
                                                               value="{{old('recruiter_name')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Add Job Posting</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
