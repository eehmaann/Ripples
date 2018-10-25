<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    //
	public function emotions()
	{
	    return $this->belongsToMany('App\Problem')->withTimestamps();
	}
	     
}
