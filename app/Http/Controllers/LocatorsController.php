<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use App\Appointment;
use DB;

class LocatorsController extends Controller
{
      public function index($appointment){
      	$appointment= Appointment::find($appointment);
        $problems=$appointment->openProblems()->get();
      	$diagnosis= Diagnosis::all();
    	$locators=Locator::all();   	
    	return View('navigation.index')
    		->with(['appointment'=>$appointment,
                'problems'=>$problems,
    			       'diagnoses'=>$diagnosis,
            	   'locators'=>$locators]);
    }

   public function guest(){
   	return View('home.guest');
   }
}
