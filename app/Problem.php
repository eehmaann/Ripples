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

  public function diagnosis(){
    return $this->belongsTo('App\Diagnosis');
  }

  public function appointments(){
    return $this->belongsToMany('App\Appointment');
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

	public function describable(){
		return $this->morphTo();
	}

  //self join
  public function parent_problem(){
      return $this->hasMany(self::class, 'parentproblem_id', 'id');
  }

  public function children_problem(){
    return $this->belongsTo(self::class, 'id', 'parentproblem_id' )->with('children_problem');
  }	     

}