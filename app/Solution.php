<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    //
    public function problem(){
        return $this->morphMany('App\Problem', 'describable');
    }

    public function appointments(){
    return $this->belongsToMany('App\Appointment');
  }
}
