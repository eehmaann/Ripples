<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	public function goals(){
        return $this->belongsTo('App\Goal', 'goal_id', 'id');
    }

    public function users(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function problems(){
    	return $this->belongsToMany('App\Problem');
    }

    public function solution(){
    	return $this->hasMany('App\Solution');
    }

    // Gets latest problem which has a heartwall and are part of this appointment
    public function heartwalls(){
      return $this->problems()
            ->where('describable_type', 'App\Heartwall')
            ->where('cleared', false)
            ->latest()->first();
    }
    
    //Gets problems that have a disconnection and are part of this appointment
     public function disconnections(){
        return $this->problems()
            ->where('describable_type', 'App\Disconnection')
            ->where('cleared', false)
            ->get();
  }

  // Problems of this appointment which have not been cleared
    public function openProblems(){
    return $this->problems()->where('cleared','=',false);
    }

    public function lastProblem(){
        return $this->problems()->where('cleared','=',true)->latest()->first();   
    }

    // open problems with disconnections, an alternate approach to disconnections
    public function openDisconnections(){
        return $this->openProblems()->where('describable_type','=','App\Solution');
    }

    // Appointment which have been published ordered by user.  Will be seen by practitioner
    public static function getForDropdown() {
        $appointments = Appointment::where('showable', true)->orderBy('user_id', 'ASC')->get();
        $appointments_for_dropdown = [];
        foreach($appointments as $appointment) {
            $appointments_for_dropdown[$appointment->id] = $appointment->user()->name.' '.$appointment->goals()->goal.' '.$appointment->created_at;
        }
        return $appointments_for_dropdown;
    }    
}