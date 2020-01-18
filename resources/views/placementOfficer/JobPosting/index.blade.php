@extends('master')
@section('content')
    <div class="container main-content">
        <h3>List Job Postings</h3>
        <br>
        <br>
        <table class="table table-bordered table-responsive-sm">
            <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Start Date</th>
                <th>Application Deadline</th>
                <th>Company</th>
                <th>Recruiter</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>

            <tbody>
            @foreach($jobPostings as $jobPosting)
                <tr>
                    <td>{{$jobPosting->title}}</td>
                    <td>{{$jobPosting->description}}</td>
                    <td>{{$jobPosting->start_date}}</td>
                    <td>{{$jobPosting->application_deadline}}</td>
                    <td>{{$jobPosting->company_id}}</td>
                    <td>{{$jobPosting->recruiter_name}}</td>
                    <td><a href="{{action('PlacementOfficer\JobPostingController@edit', $jobPosting->id)}}"
                           class="btn btn-primary">Update</a></td>
                    <td>
                        <form action="{{action('PlacementOfficer\JobPostingController@destroy', $jobPosting->id)}}"
                              method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="submit" class="btn btn-danger" name="deleteJP" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        {{ $jobPostings->links() }}
        <div class="row justify-content-center">
            <div class="col-">
                <button type="button" id="btn_addJOB" class="btn btn-success float-right">Add Job Posting</button>
            </div>
        </div>
    </div>
    <script>
        let btn = document.getElementById('btn_addJOB');
        btn.addEventListener('click', function () {
            document.location.href = "{{url('/placement-officer/job-postings/create')}}";
        });
    </script>

@endsection
