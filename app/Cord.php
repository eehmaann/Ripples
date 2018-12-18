<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cord extends Model
{
    
	// This methods will be used onlh if there is need for expansion to see items separately.
    //
    //   public function problem()
   // {
   //     return $this->belongsTo('App\Problem');
   // }
    // public function problem(){
      // return $this->morphMany('App\Problem', 'describable');
   // }
}
