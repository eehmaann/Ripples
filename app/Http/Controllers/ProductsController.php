<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emotion;
use DB;

class EmotionController extends Controller
{
    public function index(){
        
        $emotions=Emotion::get();
        return view('emotion.index')->with(['emotions'=>$emotions]);
    }
}