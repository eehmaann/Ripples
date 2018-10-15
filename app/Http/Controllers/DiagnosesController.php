<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locator;
use App\Diagnosis;
use DB;

class DiagnosesController extends Controller
{
    //

    /**
     * Collection of forms for creating diagnosis.
     *
     * @return \Illuminate\Http\Response
     */
    public function createAHE($id)
    {
        $diagnosis= Diagnosis::find($id)
        return View('diagnosis.ahe')
    		->with(['diagnoses'=>$diagnosis]);
    }


    public function createAllergy($id)
    {
        $diagnosis= Diagnosis::find($id)
        return View('diagnosis.allergy')
    		->with(['diagnoses'=>$diagnosis]);
    }

    public function createIntolerance($id)
    {
        $diagnosis= Diagnosis::find($id)
        return View('diagnosis.intolerance')
    		->with(['diagnoses'=>$diagnosis]);
    }

}
