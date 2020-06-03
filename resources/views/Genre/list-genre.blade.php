@extends('welcome')
@section('content')
    <h2 class="box-title">Album</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Album</th>
                <th>Artist</th>
                <th>ReleaseDate</th>
                <th>Genre</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th class="text-nowrap">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tbl_album as $album)
                <tr>
                    <td>{{$album->__get("id")}}</td>
                    <td>{{$album->__get("album_name")}}</td>
                    <td>{{$album->__get("album_artist")}}</td>
                    <td>{{$album->__get("album_release_date")}}</td>
                    <td>{{$album->__get("album_genre")}}</td>
                    <td>{{$album->__get("created_at")}}</td>
                    <td>{{$album->__get("updated_at")}}</td>
                    <td class="text-nowrap">
                        <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                        <a href="#" data-toggle="tooltip" data-original-title="Delete"> <i class="fa fa-close text-danger"></i> </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
