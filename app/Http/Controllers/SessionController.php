<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Session;
use App\User;
use App\Diagnosis;
use App\Locator;
use Illuminate\Http\Request;
use Redirect;
use DB;

class SessionController extends Controller
{
   public function create(){
    	return View('navigation.practitionerstart')
    		->with('users',User::orderBy('name')->get());
    }

    public function storeSession(Request $request){
    	$this->validate($request, [
    		'goal_id'=> 'required|numeric',
    	]);
    	$session =new Session();
    	$session->goal_id=$request->input('goal_id');
    	$session->save();
    	
        $goal = Goal::find('goal_id');
        $problems_list = [];
        foreach($goal->appointments->problems as $problem) {
            $problems_list[] = $problem;
        }
        

    	$diagnosis= Diagnosis::all();
    	$locators=Locator::all();
    	return View('navigation.index')
    		->with(['diagnoses'=>$diagnosis,
    				'locators'=>$locators,
    				'session'=>$session]);
    }

    public function storeGoalSession(Request $request){
    	$this->validate($request, [
    		'user_id'=> 'required|numeric',
    		'case_description'=>'required|min:5',
    		'goal_description'=>'required|min:10',
    	]);
    	$goal= new Goal();
    	$goal->user_id=$request->input('user_id');
    	$goal->reason=$request->input('case_description');
    	$goal->goal=$request->input('goal_description');
    	$goal->save();
    	
    	$goal_match =Goal::latest()->first();
    	$session =new Session();
    	$session->goal_id=$goal_match->id;
    	$session->save();
    	
       $diagnosis= Diagnosis::all();
        $locators=Locator::all();
        return View('navigation.index')
            ->with(['diagnoses'=>$diagnosis,
                    'locators'=>$locators,
                    'session'=>$session]);


    }

    public function storeUserGoalSession(Request $request){
    	$this->validate($request, [
    		'client_name'=> 'required|min:5',
    		'client_email'=>'required',
    		'case_description'=>'required|min:5',
    		'goal_description'=>'required|min:10',
    	]);
    //Create user
    	$user= new User();
    	$user->name=$request->input('client_name');
    	$user->email=$request->input('client_email');
    	$user->password='password';
    	$user->save();
    
    // Create case
    	$user_id =User::latest()->first();
    	$goal= new Goal();
    	$goal->reason=$request->input('case_description');
    	$goal->goal=$request->input('goal_description');
    	$goal->user_id=$user_id->id;
    	$goal->save();

    	$goal_match =Goal::latest()->first();
    	$session =new Session();
    	$session->goal_id=$goal_match->id;
    	$session->save();

    	$diagnosis= Diagnosis::all();
        $locators=Locator::all();
        return View('navigation.index')
            ->with(['diagnoses'=>$diagnosis,
                    'locators'=>$locators,
                    'session'=>$session]);
    }
}