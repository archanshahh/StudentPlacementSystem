@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Add / Update FAQ</h3>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
            including versions of Lorem Ipsum.</p>
        <br>
        <img src="../../Images/user.png" class="image rounded mx-auto d-block" alt="Company">
        <br>
        <form action="" method="post">
            <div class="row no-gutters justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="question"></label><input id="question" type="text" class="form-control" name="question"
                                                         placeholder="Question">
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="answer"></label><input id="answer" type="text" class="form-control" name="answer"
                                                       placeholder="Answer">
                </div>
            </div>
            <br>
            <div class="row no-gutters justify-content-center">
                <div class="col-">
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success float-right">Add / Update FAQ</button>
                </div>
            </div>

            <br>
        </form>
    </div>
    @endsection
