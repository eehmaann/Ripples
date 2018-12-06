<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saboteur;
use DB;

class SaboteurController extends Controller
{
    //
        public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $saboteurs= Saboteur::select('weapon', DB::raw('COUNT(weapon) as count'))
        	->where('weapon','LIKE','%'.$query.'%')
        	->groupBy('weapon')
        	->orderBy('count')
        	->get(array('weapon'));
        
        $data=array();
        foreach ($saboteurs as $saboteur) {
                $data[]=array('value'=>$saboteur->weapon);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new type'];
    }
}
