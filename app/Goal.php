<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use App\Appointment;
use App\Problems;

class Goal extends Model
{
    //
   public function user(){
    	return $this->belongsTo('App\User');
  }

  public function appointment(){
        return $this->hasMany('App\Appointment', 'goal_id', 'id');
    }

 public function problems(){
        return $this->hasManyDeep(Problem::class [Appointment::class]);
  }

  public function activeAppointments(){
    return $this->appointment()->where('showable','=',false);  
  }
  
  public function goalpublishedAppointments(){
      return $this->appointment()->where('showable','=',true); 
  }
}
