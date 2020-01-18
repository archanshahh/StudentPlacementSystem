@extends('placementOfficer/master')
@section('content')
    <div class="container main-content">
        <h3>Add / Update Job Posting</h3>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled
            it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus
            PageMaker
            including versions of Lorem Ipsum.</p>
        <br>
        <img src="../../Images/user.png" class="image rounded mx-auto d-block" alt="Job Posting">
        <br>
        <form action="" method="post">
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="title"></label><input id="title" type="text" class="form-control" name="title"
                                                      placeholder="Title">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="description"></label><input id="description" type="text" class="form-control"
                                                            name="description" placeholder="Description">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="start_date"></label><input id="start_date" type="text" class="form-control"
                                                           name="start_date" placeholder="Start Date">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="deadline"></label><input id="deadline" type="text" class="form-control"
                                                         name="deadline" placeholder="Application Deadline">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="input-group input-group-lg col-md-6">
                    <label for="recruiter"></label><input id="recruiter" type="text" class="form-control"
                                                          name="recruiter" placeholder="Recruiter">
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-">
                    <button type="submit" class="btn btn-success">Add / Update Job Posting</button>
                </div>
            </div>
            <br>
        </form>
    </div>
@endsection
