<?php

namespace App\Http\Controllers;
use App\Problem;
use App\Diagnosis;
use DB;

use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function storeBasic(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);
         
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->save();
        return redirect('/navigation');
//
    }
}
