<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definer;
use DB;
use Carbon\Carbon;
use Session;

class DefinersController extends Controller
{
    public function index(){
        return Definer::all();
    }

    public function show($id){
    	$definer = Definer::find($id);
        if(is_null($definer)) {
            Session::flash('message','Error prognosis is not found');
            return redirect('/locators');
        }
        return view('definer.show')->with([
            'definer' => $definer,
        ]);// //
    }
}
