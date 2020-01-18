@extends('master')
@section('content')
    <main class="main-content container">
        <div class="jumbotron text-center">
            <h1>Welcome to Student Placement System</h1>
            <p><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a> or @if (Route::has('register')) <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> @endif if you are new user! </p>
        </div>
        <ul>
            <li>Student Placement System is a website which manages placement process in college makes an interactive
                GUI where the institute can manage details of candidates.
            </li>
            <li>Candidates can register themselves.
                They can look through job postings, download placement papers, view job details and apply for a job.
                Job applications are sent to Placement Officer via email and selected students get an email as well.
            </li>
            <li>Placement Officers can go through student profiles, add job openings, upload placement papers for
                students and update or delete fulfilled job positions.
            </li>
            <li>Admin can add, update and delete placement officers.
                They are allowed to delete students too. Updation of contact details and FAQ page is made easier using
                simple
                forms to enter or update data.
            </li>
            <li>Visualisation of data is done using Google Charts API.
                Placement Officers can view how many percentage of students are there in each course along with
                graphical depiction of GPA of individual students.
            </li>
        </ul>

    </main>
@endsection
