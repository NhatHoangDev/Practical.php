@extends('welcome')
@section('content')
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Album
            </div>
            <div>
                <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Album</th>
                        <th>Artist</th>
                        <th>ReleaseDate</th>
                        <th>Genre</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($table_album as $album)
                        <tr>
                            <td>{{$album->__get("id")}}</td>
                            <td>{{$album->__get("album_name")}}</td>
                            <td>{{$album->__get("album_artist")}}</td>
                            <td>{{$album->__get("album_release_date")}}</td>
                            <td>{{$album->__get("album_genre")}}</td>
                            <td>
{{--                                <a href="{{url("edit-album/{$album->__get("id")}")}}" class="btn btn-1b">Edit</a>--}}
                                <form action="{{url("edit-album/{$album->__get("id")}")}}" >
                                    <button type="submit" name="id" class="btn btn-danger">Edit</button>
                                </form>
                            </td>
                            <td> <form action="{{url("delete-album/{$album->__get("id")}")}}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure')"; class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

