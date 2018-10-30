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

	//   public function heartwall()
    //{
    //    return $this->hasOne('App\Heartwall');
    //}

  //     public function cording()
    //{
     //   return $this->hasOne('App\Cord', $foreignKey = null, $localKey = null);
    //}

      // public function diagnosis()
   // {
     //   return $this->hasOne('App\Diagnosis', $foreignKey = null, $localKey = null);
    //}

	public function describable()
	{
		return $this->morphTo();
	}

	     
}