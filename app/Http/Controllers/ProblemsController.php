<?php

namespace App\Http\Controllers;
use App\Problem;
use App\Diagnosis;
use App\Heartwall;
use App\Cord;
use App\Solution;
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

        public function storeCord(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'BraintoBraintext' =>'min:10',
            'BraintoHearttext',
            'BraintoGuttext',
            'BraintoPrivatestext',
            'HearttoBraintext',
            'HearttoHearttext',
            'HearttoGuttext',
            'HeartoPrivatestext',
            'GuttoBraintext',
            'GuttoHearttext',
            'GuttoGuttext',
            'GuttoPrivatestext',
            'PrivatestoBraintext',
            'PrivatestoHearttext',
            'PrivatestoGuttext',
            'PrivatestoPrivatestext',
        ]);
         
        //Store Cord entry
        $cord = new Cord();
        $cord->Cordedto=$request->input('corded');
        $cord->brain_to_brain_cord=$request->input('BraintoBraintext');
        $cord->brain_to_heart_cord=$request->input('BraintoHearttext');
        $cord->brain_to_gut_cord=$request->input('BraintoGuttext');
        $cord->brain_to_privates_cord=$request->input('BraintoPrivatestext');
        $cord->heart_to_brain_cord=$request->input('HearttoBraintext');
        $cord->heart_to_heart_cord=$request->input('HearttoHearttext');
        $cord->heart_to_gut_cord=$request->input('HearttoGuttext');
        $cord->heart_to_privates_cord=$request->input('HeartoPrivatestext');
        $cord->gut_to_brain_cord=$request->input('GuttoBraintext');
        $cord->gut_to_heart_cord=$request->input('GuttoHearttext');
        $cord->gut_to_gut_cord=$request->input('GuttoGuttext');
        $cord->gut_to_privates_cord=$request->input('GuttoPrivatestext');
        $cord->privates_to_brain_cord=$request->input('PrivatestoBraintext');
        $cord->privates_to_heart_cord=$request->input('PrivatestoHearttext');
        $cord->privates_to_gut_cord=$request->input('PrivatestoGuttext');
        $cord->privates_to_privates_cord=$request->input('PrivatestoPrivatestext');
        $cord->save();

        //Store Problem entry
        $cord_match =Cord::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Cord';
        $problem->describable_id=$cord_match->id;
        $problem->save();

        return redirect('/navigation');
    }

    public function storeEmotions(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->save();

        return redirect('/navigation');
    }
    public function storeHeartwall(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'material' => 'required|min:3',
            'lengthinput'=> 'required|numeric'
        ]);
         
      

        $heartwall = new Heartwall();
        $heartwall->material= $request->input('material');
        $heartwall->starting_distance= $request->input('lengthinput');
        $heartwall->current_distance= $request->input('lengthinput');
        $heartwall->save();

        $heartwall_match =Heartwall::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Heartwall';
        $problem->describable_id=$heartwall_match->id;
        $problem->save();

        return redirect('/diagnosis/trappedemotion/5/create');
    }
         public function storePastLife(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->save();

        return redirect('/diagnosis/trappedemotion/5/create');
    }

     public function storeSolution(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'solution' => 'required|min:3',
        ]);
         
      

        $solution = new Solution();
        $solution->material= $request->input('solution');
        $solution->save();

        $solution_match =Solution::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Solution';
        $problem->describable_id=$solution_match->id;
        $problem->save();

        return redirect('/navigation');
    }


     public function storeTrapped(Request $request){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->save();

        return redirect('/diagnosis/trappedemotion/5/create');
    }


}