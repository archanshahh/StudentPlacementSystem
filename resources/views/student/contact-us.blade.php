@extends('master')
@section('content')

    <main>
        <div class="container-fluid bg-grey">
            <div class="row">
                <div class="col-xs-12 col-md-12 text-center vertical-center jumbotron">
                    <img src="images/contact_us.jpg" class="img-fluid" alt="Responsive image" width="50%" height="50%">
                </div>
                <div class="col-xs-12 col-md-12 vertical-center">
                    <h2>Contact Us</h2>

                    @if(Session::has('flash_message'))
                        <div class="alert alert-success">{{ Session::get('flash_message')}}</div>
                    @endif
                    <form class="form-horizontal" action="/ContactUs/insert" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control text-left" placeholder="Enter email" name="email">
                                <span style="color:red;">{{ $errors->first('email') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-left" placeholder="Enter name" name="name">
                                <span style="color:red;">{{ $errors->first('name') }}</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Message:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control text-left" placeholder="Leave a message..." name="message"></textarea>
                                <span style="color:red;">{{ $errors->first('message') }}</span>
                            </div>
                        </div>
                        @csrf
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 text-center">
                                <input type="submit" class="btn-green" value="Send Message" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
