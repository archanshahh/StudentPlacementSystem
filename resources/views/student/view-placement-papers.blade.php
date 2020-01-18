@extends('master')
@section('content')
    <br><br><br><br><br>
    <main>
        <div class="container">
            <div class="links-container">
                <h3>Placement Papers</h3><br>
                @foreach($files as $file)
                    <a href="/public/storage/placement_papers/{{$file->file_name}}" download="{{$file->file_name}}">{{$file->file_name}}</a><br><br>
                @endforeach
            </div>
        </div>
    </main>
@endsection
