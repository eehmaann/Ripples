<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cure extends Model
{
    //
    public function diagnoses(){
    return $this->belongsToMany('App\Diagnosis')->withTimestamps();
	}
}
