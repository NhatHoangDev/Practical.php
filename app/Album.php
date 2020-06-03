<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "table_album";
    public $fillable = [
        "album_name",
        "album_artist",
        "album_release_date",
        "album_genre"
    ];
}
