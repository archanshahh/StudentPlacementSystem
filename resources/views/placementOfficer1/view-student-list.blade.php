@extends('master')
@section('content')
    <div class="container-fluid" border="1">
        <h1 class="text-black text-center mt-5 display-4 font-weight-bold">
            Student List
        </h1>
        <br><br>

        @foreach($studentlist as $s)
            {{csrf_field()}}
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-left">
                    <img src="{{asset('images/logo/company_logo1.png')}}" class="img-thumbnail thumbnail"
                         alt="Responsive image">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-8 text-center">
                    <div class="row">
                        <div class="col-sm-2.5 text-left font-weight-bold">
                            Student Name :
                        </div>
                        <div class="col-sm-4 text-left">
                            {{$s -> name}}
                        </div>
                        <div class="col-sm-1.5 text-left font-weight-bold">
                            Student Id :
                        </div>
                        <div class="col-sm-4 text-left">
                            {{ $s -> id }}
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-2 text-left font-weight-bold">
                            Email Id :
                        </div>
                        <div class="col-sm-9 text-left">
                            {{ $s -> email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 font-weight-bold text-left">
                            Course :
                        </div>
                        <div class="col-sm-6 text-left">
                            {{ $s -> course }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 font-weight-bold text-left">
                            GPA :
                        </div>
                        <div class="col-sm-4 text-left">
                            {{ $s -> gpa }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 font-weight-bold text-left">
                            Institution :
                        </div>
                        <div class="col-sm-4 text-left">
                            {{ $s -> institution }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 font-weight-bold text-left">
                            Mobile :
                        </div>
                        <div class="col-sm-6 text-left">
                            {{ $s -> mobile }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2 font-weight-bold text-left">
                            Gender :
                        </div>
                        <div class="col-sm-6 text-left">
                            {{ $s -> gender }}
                        </div>
                        <div class="col-sm-6 h6 text-left">
                            <td><a href="{{url('/student_details',[$s->id])}}"><input type="submit" id="btn_viewStudent" name="studentDetails"
                                       class="btn btn-primary btn_viewStudent"
                                                                       value="View Student"/></a></td>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
    <script>
        $('.btn_viewStudent').click(function () {
            document.location.href = "{{url('/po/view-student-details')}}";
        })
    </script>
@endsection
