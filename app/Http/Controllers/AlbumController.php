<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\Redirect;
use Session;
class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $album = Album::paginate(20);
        return view("Album.list-album", ["table_album" => $album]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newAlbum()
    {
        return view('Album.add-album');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveAlbum(Request $request){
        $data = array();
        $data['album_name'] = $request->album_name;
        $data['album_artist'] = $request->album_artist;
        $data['album_release_date'] = $request->album_release_date;
        $data['album_genre'] = $request->album_genre;
        DB::table('table_album')->insert($data);
        Session::put('message','Thêm album thành công');
        return Redirect::to('new-album');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editAlbum($id)
    {
        $album = Album::findOrFail($id);
        return view("Album.edit-album",["album_name" => $album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAlbum($id, Request $request)
    {
        $album = Album::find($id);
        $album->album_name = $request->album_name;
        $album->album_artist = $request->input("album_artist");
        $album->album_release_date = $request->input("album_release_date");
        $album->album_genres = $request->input("album_genres");
        $album->save();
        return response($album,201);
        return redirect()->action('AlbumController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAlbum($id)
    {
        $album = Album::findOrFail($id);
        try {
            $album->delete();
        } catch (\Exception $exception) {
            return redirect()->back();
        }
        return redirect()->to("list-album");
    }

}
