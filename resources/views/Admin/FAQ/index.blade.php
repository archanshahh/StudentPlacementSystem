@extends('master')
@section('content')
    <div class="container main-content">
        <h3>FAQ List</h3>
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
            @foreach($faqs as $faq)
                <tr>
                    <td>{{$faq->question}}</td>
                    <td>{{$faq->answer}}</td>

                    <td><a href="{{action('FAQController@edit', $faq->id)}}"
                           class="btn btn-primary">Update</a></td>
                    <td>
                        <form action="{{action('FAQController@destroy', $faq->id)}}"
                              method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="submit" class="btn btn-danger" name="deletePTO" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        {{ $faqs->links() }}
        <br>
        <div class="row justify-content-center">
            <div class="col-">
                <a href="{{action('FAQController@create')}}" class="btn btn-success float-right">Add
                    FAQ</a>
            </div>
        </div>
    </div>
@endsection
