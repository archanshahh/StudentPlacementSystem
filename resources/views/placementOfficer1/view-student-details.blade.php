@extends('master')
@section('content')
    <main>
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center vertical-center">
                    <img src="{{asset('images/student.png')}}" class="img-fluid" alt="Responsive image" width="30%" height="30%">
                </div>
                <div class="col-xs-12 col-md-12">
                    <h2>Student Details</h2><br>
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            {{ $message }}
                        </div>
                    @endif
                    <h5>{{$students->name}}</h5>
                        <p>Id: {{$id}}</p>
                        <p class="justify-text">Email: {{$students->email}}</p>
                        <p>Course: {{$students->course}}</p>
                        <p>Exected Graduation: {{$students->expected_graduation}}</p>
                        <p>Mobile: {{$students->mobile}}</p>
                        <p>Institution: {{$students->institution}}</p>
                        <p>GPA: {{$students->gpa}}</p>
                        <p>Gender: {{$students->gender}}</p>


                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center">
                    <form class="Form-group" method="post" action="{{url('/po/selectStudent')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="student_email" value="{{$students->email}}"/>
                        <input type="hidden" name="student_id" value="{{$id}}" />
                        <input type="hidden" name="job_id" value="J01234567" />
                        <input type="hidden" name="company_id" value="C12345678" />
                        <input type="submit" class="btn-green" value="Select Student"/>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
