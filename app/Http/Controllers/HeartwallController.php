<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Heartwall;
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
            return ['value'=>'No Result Found'];
    }

}