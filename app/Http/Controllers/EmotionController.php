<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emotion;
use App\Locator;
use DB;

class EmotionController extends Controller
{
    public function index(){
    	
    	return View('emotion.index')
    		->with('emotions',Emotion::all())
    		->with('locators',Locator::all());
    }
}