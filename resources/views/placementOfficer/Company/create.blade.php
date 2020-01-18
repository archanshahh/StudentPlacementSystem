@extends('PlacementOfficer.JobPosting.master')
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
        <h3>Add Company</h3>
        <br>
        <p>Placement officers obtain employment and experiential opportunities in business and industry for students and
            alumni in all curricula. They help students in creating their resumes and cover letters, find internships or
            jobs. They also arrange mock interviews for students to help them practice answering common questions. They
            also collect and provide information about companies and company’s hiring requirements to students.</p>
        <br>
        <img src="{{asset('images/user.png')}}" class="image rounded mx-auto d-block" alt="Company">
        <br>
        <form method="post" action="{{action('PlacementOfficer\CompanyController@store')}}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="name"></label><input id="name" type="text"
                                                      class="form-control"
                                                      name="name"
                                                      placeholder="Name"
                                                      value="{{old('name')}}">
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
                    <label for="industry"></label><input id="industry" type="text" class="form-control"
                                                           name="industry" placeholder="Industry"
                                                           value="{{old('industry')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="email"></label><input id="email" type="text"
                                                                     class="form-control"
                                                                     name="email"
                                                                     placeholder="Email"
                                                                     value="{{old('email')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="mobile"></label><input id="mobile" type="text" class="form-control"
                                                               name="mobile" placeholder="Mobile"
                                                               value="{{old('mobile')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="website"></label><input id="website" type="text" class="form-control"
                                                       name="website" placeholder="Website"
                                                       value="{{old('website')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="location"></label><input id="location" type="text" class="form-control"
                                                        name="location" placeholder="Location"
                                                        value="{{old('location')}}">
                </div>
                <br>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Add Company</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
