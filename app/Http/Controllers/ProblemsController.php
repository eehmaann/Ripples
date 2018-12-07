<?php

namespace App\Http\Controllers;
use App\Problem;
use App\Appointment;
use App\Cord;
use App\Color;
use App\Curse;
use App\Diagnosis;
use App\Disconnection;
use App\Heartwall;
use App\Intolerance;
use App\Saboteur;
use App\Solution;
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
       
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
                $problem->steps=$parent_problem->steps+1;
                $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        return \Redirect::route('navigation.show', $appointment_id);
    }

      public function storeBasicClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);
        
        $appointments=Appointment::find($appointment_id);
         $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        return \Redirect::route('problems.show', $appointment_id);
    }

     public function storeAllergy(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'allergy' => 'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
         $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);
        $allergy = new Intolerance();
        $allergy->substance = $request->input('allergy');
        $allergy->save();

        return \Redirect::route('navigation.show', $appointment_id);
    }

      public function storeAllergyClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'allergy' =>'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        $allergy = new Intolerance();
        $allergy->substance = $request->input('allergy');
        $allergy->save();

        return \Redirect::route('problems.show', $appointment_id);
    }

       public function storeColor(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'colortext' => 'required|min:3',
            'solution' => 'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);
        $solution= new Solution();
        $solution->solution = $request->input('solution');
        $solution->save();
        $solution->appointments()->sync($appointments);
        $color= new Color();
        $color->color = $request->input('colortext');
        $color->save();

        return \Redirect::route('navigation.show', $appointment_id);
    }

    public function storeColorClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'colortext' => 'required|min:3',
            'solution'=> 'required|min:3'
        ]);
        
        $appointments=Appointment::find($appointment_id);
         $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);
        $solution= new Solution();
        $solution->solution = $request->input('solution');
        $solution->save();
        $solution->appointments()->sync($appointments);
        $color= new Color();
        $color->color = $request->input('colortext');
        $color->save();

        return \Redirect::route('problems.show', $appointment_id);
    }

    public function storeCurseCord(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'curseinput' => 'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->cleared=true;
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $problem->appointments()->sync($appointments);
        $curse = new Curse();
        $curse->curse = $request->input('curseinput');
        $curse->save();

        return \Redirect::route('cording.create', [15,  $appointment_id]);
    }
 
      public function storeCurseClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'curseinput' =>'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $problem->appointments()->sync($appointments);

        $curse = new Curse();
        $curse->curse = $request->input('curseinput');
        $curse->save();

        return \Redirect::route('problems.show', $appointment_id);
    }
 

     public function storePastLife(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
        ]);

        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem = new Problem();

        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
       $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
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
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
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
          $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
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
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem->notes=$diagnosis->name.' has been '.$diagnosis->clear_statement;
        
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
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
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();

        $emotions = ($request->emotions)?: [];
        $problem->emotions()->sync($emotions);
        $problem->cleared=true;
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
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
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);

       return \Redirect::route('trappedemotion.create', $appointment_id);
    }

    public function storeIntolerance(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'allergy' => 'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);
        $allergy = new Intolerance();
        $allergy->substance = $request->input('allergy');
        $allergy->symptom = $request->input('effect');
        $allergy->save();

        return \Redirect::route('navigation.show', $appointment_id);
    }

      public function storeIntoleranceClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'allergy' =>'required|min:3',
        ]);
        
        $appointments=Appointment::find($appointment_id);
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem->notes=$diagnosis->name.' has been '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $problem->appointments()->sync($appointments);

        $allergy = new Intolerance();
        $allergy->substance = $request->input('allergy');
        $allergy->symptom = $request->input('effect');
        $allergy->save();

        return \Redirect::route('problems.show', $appointment_id);
    }
      
    public function storeDisconnection(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'disconnectionPercentage'=> 'required|numeric'
        ]);
         
      

        $disconnection = new Disconnection();
        $disconnection->starting_connection= $request->input('disconnectionPercentage');
        $disconnection->current_connection= $request->input('disconnectionPercentage');
        $disconnection->save();

        $disconnection_match =Disconnection::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Disconnection';
        $problem->describable_id=$disconnection_match->id;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);

       return \Redirect::route('problems.show', $appointment_id);
    }    

        public function storeSpirittoSpirit(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'tearInput'=> 'required|numeric'
        ]);
         
      

        $disconnection = new Disconnection();
        $disconnection->starting_connection= $request->input('tearInput');
        $disconnection->current_connection= $request->input('tearInput');
        $disconnection->units="tears";
        $disconnection->save();

        $disconnection_match =Disconnection::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Disconnection';
        $problem->describable_id=$disconnection_match->id;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);

       return \Redirect::route('problems.show', $appointment_id);
    }  



     public function storeSabotuerCord(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'weaponinput' => 'required|min:3',

        ]);  
      
        $appointments=Appointment::find($appointment_id);

        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        }  
        $problem->save();
        $problem->appointments()->sync($appointments);
        $weapon = new Saboteur();
        $weapon->weapon = $request->input('weaponinput');
        $weapon->save();

         return \Redirect::route('cording.create', [15,  $appointment_id]);
    }




      public function storeSabotuerClear(Request $request, $appointment_id){
        $this->validate($request, [
            'description' => 'required|min:3',
            'diagnosis_id'=> 'required|numeric',
            'weaponinput' =>'required|min:3',

        ]);  
      
        $appointments=Appointment::find($appointment_id);


        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->cleared=true;
        $diagnosis=Diagnosis::find($request->input('diagnosis_id'));
        $problem->notes=$diagnosis->name.' '.$diagnosis->clear_statement;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $problem->appointments()->sync($appointments);

        $weapon = new Saboteur();
        $weapon->weapon = $request->input('weaponinput');
        $weapon->save();

        return \Redirect::route('problems.show', $appointment_id);
    }

     public function storeJustSolution (Request $request, $appointment_id){
        $this->validate($request, [
            'diagnosis_id'=> 'required|numeric',
            'solution' => 'required|min:3',
        ]);

        $solution = new Solution();
        $solution->solution= $request->input('solution');
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
        $solution->solution= $request->input('solution');
        $solution->save();

        $solution_match =Solution::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->describable_type='App\Solution';
        $problem->describable_id=$solution_match->id;
        $problem->cleared=true;
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
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
        $solution->solution= $request->input('solution');
        $solution->save();

        $solution_match =Solution::latest()->first();
        $problem = new Problem();
        $problem->description = $request->input('description');
        $problem->diagnosis_id = $request->input('diagnosis_id');
        $problem->clear=false;
        $problem->describable_type='App\Solution';
        $parent_problem=$appointments->openProblems()->latest()->first();
        if(!empty($parent_problem)){
            $problem->steps=$parent_problem->steps+1;
            $problem->parentproblem_id=$parent_problem->id;
        } 
        $problem->save();
        $appointments=Appointment::find($appointment_id);
        $problem->appointments()->sync($appointments);
        return \Redirect::route('navigation.show', $appointment_id);
    }


     

    public function showProblems($appointment_id){
        $appointment=Appointment::find($appointment_id);
        $problems=$appointment->openProblems()->get();
        $lastProblem=$problems->last();
        return view('Navigation.clearproblems')
        ->with(['problems'=>$problems,
                'appointment'=>$appointment,
                'lastProblem' =>$lastProblem]);

    }

    public function updateClear($id, $appointment_id){
         $problem = Problem::find($id);
         $problem->cleared=true;
         $problem->save();
         $clearer=Appointment::find($appointment_id)->lastProblem();
         $clearer->notes=$clearer->notes.' '.$problem->diagnosis->name.' '.$problem->diagnosis->clear_statement;
        $clearer->save();
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




