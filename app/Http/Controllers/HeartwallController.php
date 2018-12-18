<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Appointment;
use App\Heartwall;
use App\Problem;
use DB;

class HeartwallController extends Controller
{
    //

	 public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $materials= Heartwall::select('material', DB::raw('COUNT(material) as count'))
        	->where('material','LIKE','%'.$query.'%')
        	->groupBy('material')
        	->orderBy('count')
        	->get(array('material'));
        
        $data=array();
        foreach ($materials as $material) {
                $data[]=array('value'=>$material->material);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new material'];
    }

    // This updates a problem that has a heartwall
     public function updateHeartwall(Request $request, $heartwall, $appointment){
        $this->validate($request, [
            'updatedistance'=> 'required|numeric',
        ]);
         $heartwall = Heartwall::find($heartwall);
         $heartwall->current_distance=$request->input('updatedistance');
         $heartwall->save();
         $clearer=Appointment::find($appointment)->lastProblem();
         if(!empty($clearer)){
            $clearer->notes=$clearer->notes.' '.'Heartwall was reduced to '.$heartwall->current_distance;
            $clearer->save();
        }
        return \Redirect::route('trappedemotion.create', $appointment);
    }

    // This will clear the heartwall
    public function clearHeartwall($heartwall, $appointment){
        $heartwall = Heartwall::find($heartwall);
         $heartwall->current_distance=0;
        $heartwall->save();
        $problem=$heartwall->problem()->latest()->first();
        $problem->cleared=true;
        $problem->save();
        
        $clearer=Appointment::find($appointment)->lastProblem();
         if(!empty($clearer)){
            $clearer->notes=$clearer->notes.' '.'Heartwall has been cleared';
            $clearer->save();
        }
         return \Redirect::route('problems.show', $appointment);

    }
}