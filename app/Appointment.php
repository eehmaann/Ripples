<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	public function goals(){
        return $this->belongsTo('App\Goal', 'goal_id', 'id');
    }

    public function problems(){
    	return $this->belongsToMany('App\Problem');
    }

    public function solution(){
    	return $this->belongsToMany('App\Solution');
    }


    public function openProblems(){
    return $this->problems()->where('cleared','=',false);
    }

    public function lastProblem(){
        return $this->problems()->where('cleared','=',true)->latest()->first();   
    }

    public function openDisconnections(){
        return $this->openProblems()->where('describable_type','=','App\Solution');
    }

    
}