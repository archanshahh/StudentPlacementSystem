@extends('master')
@section('content')
    <main>
        <br><h3 class="title">Student Dashboard</h3>
    <div class="items-container">
        <div class="container">
            <div class="row">
                <div class="dashboard-items" class="col-sm">
                    <a href="{{url('/student/edit')}}"><input type="image" src="{{asset('images/update-profile.jpg')}}"></a>
                    <div>{{csrf_field()}}
                        <h5>Update Profile</h5>
                    </div>
                </div>
                <div class="dashboard-items" class="col-sm">
                    <a href="{{url('/student/view-placement-papers')}}"><input type="image" src="{{asset('images/view-papers.jpg')}}"></a>
                    <div>
                        <h5>View Placement papers</h5>
                    </div>
                </div>
                <div class="dashboard-items" class="col-sm">
                    <a href="{{url('/student/view-job-postings')}}"><input type="image" src="{{asset('images/view-jobs.jpg')}}"></a>
                    <div>
                        <h5>View Job Openings</h5>
                    </div>
                </div>
            </div>
<br><br><br><br>
            <h6>Student Placement System allows students to register themselves for this year's placement process.
                They can view recent job openings offered by various companies and apply to the same.
                Placement Officers will upload previous year's placement papers which will be helpful for students for reference purposes.</h6>
        </div>
        </div>
    </main>

@endsection
