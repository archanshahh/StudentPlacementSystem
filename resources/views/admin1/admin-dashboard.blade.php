@extends('master')
@section('content')
    <main>
        <br>
        <br>
        <br>
        <br>
        <h3 class="title">Admin Dashboard</h3>
        <div class="items-container">
            <div class="container">
                <div class="row">
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{action('Admin\PlacementOfficerController@index')}}"><input type="image"
                                                                                              src="{{asset('images/add-po.jpg')}}"></a>
                        <div>
                            <h5>Manage Placement Officer</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('/admin/manage-students')}}"><input type="image"
                                                                           src="{{asset('images/add-po.jpg')}}"></a>
                        <div>
                            <h5>Manage Students</h5>
                        </div>
                    </div>
                    <div class="dashboard-items" class="col-sm">
                        <a href="{{url('admin1/faqs')}}"><input type="image"
                                                                      src="{{asset('images/faq-icon.jpg')}}"></a>
                        <div>
                            <h5>Faq Portal</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
