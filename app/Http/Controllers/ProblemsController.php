<?php

namespace App\Http\Controllers;
use App\Problem;
use App\Diagnosis;
use App\Heartwall;
use App\Cord;
use App\Solution;
use App\Appointment;
use DB;
use Redirect;

use Illuminate\Http\Request;

class ProblemsController extends Controller
{
    public function storeBasic(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        if(Problem::where('cleared', false)
            ->whereHas('appointments', function($query) use($appointment_id){
                $query->where('appointment_id', '=', $appointment_id);
            })
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointments', function($query) use($appointment_id){
                $query->where('appointment_id', '=', $appointment_id);
            })
            ->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        return \Redirect::route('navigation.show', $appointment_id);
//
    }

      public function storeBasicClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
         if(Problem::where('cleared', false)
            ->whereHas('appointments', function($query) use($appointment_id){
                $query->where('appointment_id', '=', $appointment_id);
            })
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointments', function($query) use($appointment_id){
                $query->where('appointment_id', '=', $appointment_id);
            })->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        return \Redirect::route('problems.show', $appointment_id);
//
    }

        public function storeCord(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'BraintoBraintext' =>'required|min:10',
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
        $appointments=Appointment::find($appointment_id);
        $cord_match =Cord::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description'); 
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->clear=true;
        $problem->describable_type='App\Cord';
        $problem->describable_id=$cord_match->id;
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
  
        $problem->save();
        $problem->appointments()->sync($appointments);

        return \Redirect::route('navigation.show', $appointment_id);
    } 

     public function storePastLife(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->cleared=true;
        $problem->save();

        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
       return \Redirect::route('trappedemotion.create', $appointment_id);
    }

     public function storePastLifeCauses(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->save();

        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('problems.show', $appointment_id);
    }

    public function storeEmotions(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];

        $problem->emotions()->sync($emotions);
        $problem->save();

        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('problems.show', $appointment_id);

    }

    public function storeTrapped(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->save();

        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('trappedemotion.create', $appointment_id);
    }

    public function storeEmotionalResonance(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->cleared=true;
        $problem->save();

        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('emotionalResonance.create', $appointment_id);
    }

    public function storeHeartwall(Request $request, $appointment_id){
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
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);

       return \Redirect::route('trappedemotion.create', $appointment_id);
    }
        

     public function storeJustSolution (Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'solution' => 'required|min:3',
        ]);

        $solution = new Solution();
        $solution->material= $request->input('solution');
        $solution->save();

        $appointments=Appointment::find($appointment_id);
        $solution->appointments()->sync($appointments);
        return \Redirect::route('problems.show', $appointment_id);
     }
       
    public function storeSolution(Request $request, $appointment_id){
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
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('problems.show', $appointment_id);
    }

     public function storeSolutionUnclear(Request $request, $appointment_id){
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
         if(Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)
            ->count()>0){
            $parent_problem =Problem::where('cleared', false)
            ->whereHas('appointment_id', $appointment_id)->latest()->first();
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('navigation.show', $appointment_id);
    }


     

    public function showProblems($appointment_id){
        $appointments=Appointment::find($appointment_id);
        $problem=Problem::where(['cleared' => 0])->get();
        return view('Navigation.clearproblems')
        ->with(['problems'=>$problem,
                'appointments'=>$appointments]);

    }

    public function updateClear($id, $appointment_id){
         $problem = Problem::find($id);
         $problem->cleared=true;
         $problem->save();
        return \Redirect::route('problems.show', $appointment_id);
    }
        
    public function destroyProblem($id, $appointment_id){
        $problem = Problem::find($id);
        $problem->appointments(); {
            $problem->appointments()->detach();
        }
        if($problem->emotions()) {
            $problem->emotions()->detach();
        }
        $problem->delete();
        return \Redirect::route('problems.show', $appointment_id);
    }

}




