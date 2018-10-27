<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    //
	public function emotions()
	{
	    return $this->belongsToMany('App\Emotion')->withTimestamps();
	}

	public function describable()
	{
		return $this->morphTo();
	}

	     
}