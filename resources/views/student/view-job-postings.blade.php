@extends('master')
@section('content')
    <div class="container-fluid" border="1">
        <h1 class="text-black text-center mt-5 display-4 font-weight-bold">
            Job List
        </h1>
        <br><br>
        @foreach($jobposting as $j)
            {{csrf_field()}}
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 text-left">
                        <img src="{{asset('images/logo/company_logo1.png')}}" class="img-thumbnail thumbnail" alt="Responsive image">
                    </div>
                    <div class="col-sm-9 text-center">
                        <div class="row">
                            <div class="col-sm-6 h6 text-left">
                                Job Title : {{$j->title}}
                            </div>
                            <div class="col-sm-6 h6 text-left">
                                Start-Date : {{ $j->start_date }}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12 text-left font-weight-bold h5">
                                Company Description
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p class="text-left">
                                    {{ $j->description }}

                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 h6 text-left">
                                Company Id : {{$j->company_id}}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6 h6 text-left">
                                Application Deadline : {{$j->application_deadline}}
                            </div>
                            <div class="col-sm-6 h6 text-left">
                                Recruiter : {{$j->recruiter_name}}
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6 h6 text-left">
                                <td><a href="{{url('/job_detail',[$j->id])}}"><input type="submit" id="btn_viewJOB" name="jobDetails"
                                                                                     class="btn btn-primary btn_viewJOB"
                                                                                     value="View Details"/></a></td>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach

    </div>

@endsection
