<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    return $this->belongsToMany('App\Book')->withTimestamps();
}
