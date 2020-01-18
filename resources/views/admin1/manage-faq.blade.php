@extends('master')
@section('content')
    <div class="container main-content">
        <h3>List FAQ</h3>
        <p>Placement officers obtain employment and experiential opportunities in business and industry for students and
            alumni in all curricula. They help students in creating their resumes and cover letters, find internships or
            jobs. They also arrange mock interviews for students to help them practice answering common questions. They
            also
            collect and provide information about companies and company’s hiring requirements to students.</p>
        <table class="table table-bordered table-responsive-sm">
            <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            <tr>
                <td>Question</td>
                <td>Answer</td>
                <td><input type="submit" id="btn_updateFAQ" name="updateFAQ" class="btn btn-primary btn_updateFAQ"
                           value="Update"/></td>
                <td><input type="submit" class="btn btn-danger" name="deleteFAQ" value="Delete"/></td>
            </tr>
            </tbody>
        </table>
        <br>
        <div class="row justify-content-center">
            <div class="col-">
                <button type="button" id="btn_addFAQ" class="btn btn-success float-right">Add FAQ</button>
            </div>
        </div>
    </div>

    <script>
        // Checking if add Add PTO is clicked.
        let btn = document.getElementById('btn_addFAQ');
        btn.addEventListener('click', function () {
            document.location.href = "{{url('admin1/add-faq')}}";
        });

        $('.btn_updateFAQ').click(function () {
            document.location.href = "{{url('admin1/add-faq')}}";
        })
    </script>
@endsection
