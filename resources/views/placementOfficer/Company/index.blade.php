@extends('PlacementOfficer.Company.master')
@section('content')
    <div class="container main-content">
        <h3>List Companies</h3>
        <br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
            makes
            a type specimen book. It has survived not only five centuries, but also the leap into electronic
            typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
            containing
            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
            versions
            of Lorem Ipsum.</p>
        <br>
        <table class="table table-bordered table-responsive">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Industry</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Website</th>
                <th>Location</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($companies as $company)
                <tr>
                    <td>{{$company->name}}</td>
                    <td>{{$company->description}}</td>
                    <td>{{$company->industry}}</td>
                    <td>{{$company->email}}</td>
                    <td>{{$company->mobile}}</td>
                    <td>{{$company->website}}</td>
                    <td>{{$company->location}}</td>
                    <td><a href="{{action('PlacementOfficer\CompanyController@edit', $company->id)}}"
                           class="btn btn-primary">Update</a></td>
                    <td>
                        <form action="{{action('PlacementOfficer\CompanyController@destroy', $company->id)}}"
                              method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <input type="submit" class="btn btn-danger" name="deleteCompany" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <br>
        {{ $companies->links() }}
        <div class="row justify-content-center">
            <div class="col-">
                <button type="button" id="btn_addCompany" class="btn btn-success float-right">Add Company</button>
            </div>
        </div>
    </div>
    <script>
        let btn = document.getElementById('btn_addCompany');
        btn.addEventListener('click', function () {
            document.location.href = "{{url('/placement-officer/companies/create')}}";
        });
    </script>
@endsection
