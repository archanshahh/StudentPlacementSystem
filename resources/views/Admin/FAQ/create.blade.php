@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Add FAQ</h3>
        <br>
        <br>
        <img src="{{asset('images/user.png')}}" class="image rounded mx-auto d-block" alt="Placement Officer">
        <br>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <br>
        <form method="post" action="{{action('FAQController@store')}}">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="question"></label><input id="question" type="text" class="form-control"
                                                         value="{{old('question')}}" name="question"
                                                         placeholder="Question">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="answer"></label><input id="answer" type="text" value="{{old('answer')}}"
                                                       class="form-control" name="answer"
                                                       placeholder="Answer">
                </div>
            </div>
            <br>
            <input type="hidden" name="usertype" value="po">
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Add FAQ</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
