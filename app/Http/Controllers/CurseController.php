<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curse;
use DB;

class CurseController extends Controller
{
    //
    public function autoComplete(Request $request) {
        $query = $request->get('term','');
        
        $curses= Curse::select('curse', DB::raw('COUNT(curse) as count'))
        	->where('curse','LIKE','%'.$query.'%')
        	->groupBy('curse')
        	->orderBy('count')
        	->get(array('curse'));
        
        $data=array();
        foreach ($curses as $curse) {
                $data[]=array('value'=>$curse->curse);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'This is a new type'];
    }
}


