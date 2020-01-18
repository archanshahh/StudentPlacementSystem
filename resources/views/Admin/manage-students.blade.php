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
        <h3>List of Students</h3>

            <div class="search-container">
                <form action="{{url('admin/searchStudents')}}">
                    <input type="text" placeholder="Search.." name="searchName">
                    <input type="submit" value="Search">
                </form>
            </div>
{{--        <form method="get" class="example" action="{{url('student/searchStudents')}}">--}}
{{--            {{csrf_field()}}--}}
{{--            <input type="text" placeholder="Search.." name="searchName">--}}
{{--            <button type="submit">Search</button>--}}
{{--        </form>--}}
{{--        <br><br>--}}
        <table class="table table-bordered table-responsive-sm">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>GPA</th>
                <th>Mobile</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $stud)
                <tr>
                    <td>{{$stud->name}}</td>
                    <td>{{$stud->email}}</td>
                    <td>{{$stud->course}}</td>
                    <td>{{$stud->gpa}}</td>
                    <td>{{$stud->mobile}}</td>
                    <td>
                        <form method="post" action="{{url('student',$stud->id)}}" >
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <input type="submit" class="btn btn-danger" name="delete" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
    </div>
@endsection
