<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cure extends Model
{
    //
    return $this->belongsToMany('App\Diagnosis')->withTimestamps();
}
