<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //protected $guarded=[];

    protected $casts = [
        "rented" => "boolean",
    ];

    protected $fillable = [
        'title', 'year', 'director', 'poster', 'synopsis', 'rented'
    ];
}
