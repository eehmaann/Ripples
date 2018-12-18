<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Appoinment;
use App\Request;
use App\Auth;
use App\Problem;

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

  public function start_parent_problem(Appointment $appointment_id)	{
    $problem = null;
    if(Problem::where('cleared', false)
            ->whereHas('appointments', function($query) use($appointment_id){
                $query->where('appointment_id', '=', $appointment_id);
            })
            ->count()>0){

                $problem =Problem::where('cleared', false)
                  ->whereHas('appointments', function($query) use($appointment_id){
                    $query->where('appointment_id', '=', $appointment_id);
                  })->latest()->first();
    }
    return $problem;
  }


  public function unresolved($appointment_id){
    $problemList =Problem::where(['cleared' => false])
            ->whereHas('appointments', function($query) use($appointment_id){
                    $query->where('appointment_id', '=', $appointment_id);
                    })
            ->get();
            return $problemList;
    }


}