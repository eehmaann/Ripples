<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    //
   public function user(){
    	return $this->belongsTo('App\User');
  }

  public function appointment(){
        return $this->hasMany('App\Appointment');
    }

 public function problems()
    {
        return $this->hasManyThrough('App\Problem', 'App\Appointment');
    }
}
