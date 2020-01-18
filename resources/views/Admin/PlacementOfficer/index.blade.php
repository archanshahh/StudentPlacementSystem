@extends('master')
@section('content')
    <div class="container main-content">
        <h3>Placement Officers List</h3>
        <table class="table table-bordered table-responsive-sm">
            <thead>
            <tr>
                <th>Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($placementOfficers as $placementOfficer)
                <tr>
                    <td>{{$placementOfficer->name}}</td>
                    <td>{{$placementOfficer->phone}}</td>
                    <td>{{$placementOfficer->email}}</td>
                    <td><a href="{{action('Admin\PlacementOfficerController@edit', $placementOfficer->id)}}"
                           class="btn btn-primary">Update</a></td>
                    <td>
                        <form action="{{action('Admin\PlacementOfficerController@destroy', $placementOfficer->id)}}"
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
        {{ $placementOfficers->links() }}
        <br>
        <div class="row justify-content-center">
            <div class="col-">
                <a href="{{action('Admin\PlacementOfficerController@create')}}" class="btn btn-success float-right">Add
                    Placement Officer</a>
            </div>
        </div>
    </div>
    <script>
        // Checking if add Add PTO is clicked.
        let btn = document.getElementById('btn_addPTO');
        btn.addEventListener('click', function () {
            document.location.href = "{{url('admin1')}}";
        });

        $('.btn_updatePO').click(function () {
            document.location.href = "{{url('/admin/add-po')}}";
        })
    </script>
@endsection
