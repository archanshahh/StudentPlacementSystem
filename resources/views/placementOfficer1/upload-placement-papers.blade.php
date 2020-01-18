@extends('master')
@section('content')
    <main>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <form class="form-placement" method="post" action="{{url('/po/upload')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <h4>Upload Placement Paper</h4>
               <br><br><br>
                <table class="table-paper">
                    <tr>
                        <td>
                            <label for="category">Category</label>
                        </td>
                        <td>
                            <input type="text" class="txtbox" name="Category">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="year">Year </label>
                        </td>
                        <td>
                            <input type="text" class="txtbox" name="Year">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="file">Choose File</label>
                        </td>
                        <td>
                            <input type="file" class="txtbox" name="file_name">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn-upload" value="Upload">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>

@endsection
