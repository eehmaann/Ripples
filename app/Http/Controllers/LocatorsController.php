<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use App\Appointment;
use DB;

class LocatorsController extends Controller
{
    // This creates the navigation screen for selecting underlying cause
      public function index($appointment){
      	$appointment= Appointment::find($appointment);
        if(!empty($appointment->heartwalls())){
           return \Redirect::route('trappedemotion.create', $appointment);
        }
        $problems=$appointment->openProblems()->get();
      	$diagnosis= Diagnosis::all();
    	 $locators=Locator::all();
        $deletableProblem=$appointment->problems()->latest()->first();

    	return View('navigation.index')
    		->with(['appointment'=>$appointment,
                'problems'=>$problems,
    			       'diagnoses'=>$diagnosis,
            	   'locators'=>$locators,
                  'deletableProblem'=>$deletableProblem]);
    }

   public function guest(){
   	return View('home.guest');
   }
}
