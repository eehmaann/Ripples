<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use DB;

class LocatorsController extends Controller
{
      public function index(){
    	
    	return View('navigation.index')
    		->with('diagnoses',Diagnosis::orderBy('name')->get())
    		->with('locators',Locator::orderBy('name')->get());
    }
}
