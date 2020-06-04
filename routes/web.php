<?php

use App\Practical;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Album
Route::get('list-album','AlbumController@index');
Route::get('new-album','AlbumController@newAlbum');
Route::post('save-album', 'AlbumController@saveAlbum');
Route::delete("delete-album/{id}", "AlbumController@deleteAlbum");
Route::get("edit-album/{id}", "AlbumController@editAlbum");
Route::put("update-album/{id}", "AlbumController@updateAlbum");
//practical
Route::get('practical','PracticalController@index');
Route::post('/search', 'PracticalController@search');


