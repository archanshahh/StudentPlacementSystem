@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Update FAQ</h3>
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
        <form action="{{action('FAQController@update', $faq->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="question"></label><input id="question" type="text" class="form-control" name="question"
                                                     placeholder="Question"
                                                     value="{{old('question', $faq->question)}}">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="answer"></label><input id="answer" type="text" class="form-control" name="answer"
                                                       placeholder="Answer"
                                                       value="{{old('answer', $faq->answer)}}">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Update FAQ</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
