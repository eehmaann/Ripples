<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeartwallController extends Controller
{
    //
    public function autocomplete(){
		$material = Input::get('material');
	
		$results = array();
	
		$queries = DB::table('heartwalls')
			->where('material', 'LIKE', '%'.$material.'%')
			->take(2)->get();
	
		foreach ($queries as $query){
	    	$results[] = [ 'id' => $query->id, 'value' => $query->material];
		}
		return Response::json($results);
	}
}
