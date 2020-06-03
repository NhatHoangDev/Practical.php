<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practical extends Model
{
    protected $table = "practical";
    public $fillable = [
        "bookid",
        "authorid",
        "title",
        "ISBN",
        "pub_year",
        "available"
    ];
}
