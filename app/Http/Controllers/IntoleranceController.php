<?php

namespace App\Http\Controllers;
use App\Intolerance;
use DB;
use Illuminate\Http\Request;

class IntoleranceController extends Controller
{
    //
    public function substanceAutoComplete(Request $request) {
        $query = $request->get('term','');
        
        $substances= Intolerance::select('substance', DB::raw('COUNT(substance) as count'))
        	->where([
    				['substance','LIKE','%'.$query.'%'],
    			])
        	->groupBy('substance')
        	->orderBy('count')
        	->get(array('substance'));
        
        $data=array();
        foreach ($substances as $substance) {
                $data[]=array('value'=>$substance->substance);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new type'];
    }

    public function symptomAutoComplete(Request $request) {
        $query = $request->get('term','');
        
        $symptoms= Intolerance::select('symptom', DB::raw('COUNT(symptom) as count'))
        	->where([
    				['symptom','LIKE','%'.$query.'%'],
    			])
        	->groupBy('symptom')
        	->orderBy('count')
        	->get(array('symptom'));
        
        $data=array();
        foreach ($symptoms as $symptom) {
                $data[]=array('value'=>$symptom->symptom);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new type'];
    }

}
