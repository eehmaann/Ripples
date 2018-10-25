<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cure extends Model
{
    //
    public function diagnoses(){
    return $this->belongsToMany('App\Diagnosis')->withTimestamps();
	}
	 public static function getForCheckboxes()
    {
        $cures = Cure::orderBy('name')->get();
        $cures_for_checkboxes = [];
        foreach($cures as $cure) {
            $cures_for_dropdown[$cure->id] = $cure->name;
        }
        return $cures_for_dropdown;
    }
}
