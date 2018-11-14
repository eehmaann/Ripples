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
        
        $substances= Intolerance::select('name', DB::raw('COUNT(name) as count'))
        	->where([
    				['purpose', '=', 'Substance'],
    				['name','LIKE','%'.$query.'%'],
    			])
        	->groupBy('name')
        	->orderBy('count')
        	->get(array('name'));
        
        $data=array();
        foreach ($subtances as $substance) {
                $data[]=array('value'=>$substance->name);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found'];
    }

    public function symptomAutoComplete(Request $request) {
        $query = $request->get('term','');
        
        $symptoms= Intolerance::select('name', DB::raw('COUNT(name) as count'))
        	->where([
    				['purpose', '=', 'Symptom'],
    				['name','LIKE','%'.$query.'%'],
    			])
        	->groupBy('name')
        	->orderBy('count')
        	->get(array('name'));
        
        $data=array();
        foreach ($symptoms as $symptom) {
                $data[]=array('value'=>$symptom->name);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found'];
    }

}
