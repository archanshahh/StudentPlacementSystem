@extends('master')
@section('content')
    <main>
        <br><br><br><h3 class="title">Placement Officer Dashboard</h3>
        <div class="items-container">
            <div class="container">
                <div class="row">
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/po/view-student-list')}}"><input type="image" src="{{asset('images/update-profile.jpg')}}"></a>
                        <div>
                            <h5>Students List</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/po/upload-placement-papers')}}"><input type="image"
                                                                             src="{{asset('images/upload-papers.jpg')}}"></a>
                        <div>
                            <h5>Upload Placement papers</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/placement-officer/job-postings')}}"><input type="image"
                                                                        src="{{asset('images/view-applicants.jpg')}}"></a>
                        <div>
                            <h5>Manage Job Postings</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/po/view-chart')}}"><input type="image"
                                                                           src="{{asset('images/pie-chart-icon.jpg')}}"></a>
                        <div>
                            <h5>View Number of Students chart</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/po/view-gpa-chart')}}"><input type="image"
                                                                           src="{{asset('images/chart-icon.png')}}"></a>
                        <div>
                            <h5>View GPA Chart</h5>
                        </div>
                    </div>
                </div>
                <br>

            </div>
        </div>
    </main>
@endsection
