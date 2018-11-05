<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	public function cases(){
        return $this->belongsTo('App\Goal');
    }

    public function problems(){
    	return $this->belongsToMany('App\Problem');
    }
}
