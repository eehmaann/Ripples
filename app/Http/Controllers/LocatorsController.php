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
      	$diagnosis= Diagnosis::all();
    	$locators=Locator::all();   	
    	return View('navigation.index')
    		->with(['appointment'=>$appointment,
    			'diagnoses'=>$diagnosis,
            	'locators'=>$locators]);
    }
}
