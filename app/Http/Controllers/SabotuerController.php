<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Sabotuer;
use DB;

class SabotuerController extends Controller
{
    //
    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $sabotuers= Sabotuer::select('weapon', DB::raw('COUNT(weapon) as count'))
        	->where('weapon','LIKE','%'.$query.'%')
        	->groupBy('weapon')
        	->orderBy('count')
        	->get(array('weapon'));
        
        $data=array();
        foreach ($sabotuers as $sabotuer) {
                $data[]=array('value'=>$sabotuer->weapon);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new type'];
    }
}
