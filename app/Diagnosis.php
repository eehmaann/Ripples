<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
	 public function locator(){
        return $this->belongsTo('App\Locator');
    }
     public function detailer(){
        return $this->hasMany('App\Detailer');
    }
    public function cures(){
    return $this->belongsToMany('App\Cure')->withTimestamps();
	}
  
  	 public function problem(){
        return $this->belongsTo('App\Problem');
    }
}
