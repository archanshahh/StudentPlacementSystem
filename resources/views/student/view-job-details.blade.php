@extends('master')
@section('content')
    <main>
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center vertical-center">
                    <img src="../images/briefcase.png" class="img-fluid" alt="Responsive image" width="30%" height="30%">
                </div>
                <div class="col-xs-12 col-md-12">
                    <h2>Job Description</h2><br>
                        <h5>{{$jobs->title}}</h5>
                        <p>Id: {{$id}}</p>
                        <p class="justify-text">Description: {{$jobs->description}}</p>
                        <p>Application Start Date: {{$jobs->start_date}}</p>
                        <p>Application Deadline: {{$jobs->application_deadline}}</p>
                        <p>Recuriter Name: {{$jobs->recruiter_name}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    <form class="Form-group" method="post" action="{{url('/student/uploadResume')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="student_id" value="S01289822" />
                        <input type="hidden" name="job_id" value="{{$id}}" />
                        <input type="hidden" name="company_id" value="{{$jobs->company_id}}" />
                        <input id="file_name" type="file" class="file" name="file_name">
                        <input type="submit" class="btn-green" value="Apply Now"/>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
