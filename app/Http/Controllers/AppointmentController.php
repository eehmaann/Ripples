<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;
use App\Appointment;
use App\User;
use App\Diagnosis;
use App\Locator;
use Redirect;
use DB;

class AppointmentController extends Controller
{
    //
    public function create(){
    	return View('navigation.practitionerstart')
    		->with('users',User::orderBy('name')->get());
    }

    public function storeAppointment(Request $request){
    	$this->validate($request, [
    		'goal_id'=> 'required|numeric',
    	]);
        $goal='goal_id';
        $appointments=Appointment::where('goal_id', '=', $goal)->get()?:[];
        $attachedproblems=$appointments->problems()->where('cleared', '=', 0)->get()?:[];
    	$appointment =new Appointment();
    	$appointment->goal_id=$request->input('goal_id');
    	$appointment->save();

        $appointment->problems()->sync($attachedproblems);

    	return \Redirect::route('navigation.show', $appointment);
    }

    public function storeGoalAppointment(Request $request){
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
    	$appointment =new Appointment();
    	$appointment->goal_id=$goal_match->id;
    	$appointment->save();
    	return \Redirect::route('navigation.show', $appointment);


    }

    public function storeUserGoalAppointment(Request $request){
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
    	$appointment =new Appointment();
    	$appointment->goal_id=$goal_match->id;
    	$appointment->save();
    	return \Redirect::route('navigation.show', $appointment);
    }
}
