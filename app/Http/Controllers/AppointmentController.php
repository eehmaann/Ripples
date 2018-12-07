<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Goal;
use App\Appointment;
use App\User;
use App\Diagnosis;
use App\Locator;
use App\Problem;
use App\Solution;
use Redirect;
use DB;

class AppointmentController extends Controller
{
    public function getSavedAppointments($id)
    {
        $appointments = Appointment::where([
            ['goal_id', '=', $id],
            ['showable', '=', false],
        ])->get();

        $options = array();

        foreach ($appointments as $appointment) {
            $options += array($appointment->id => $appointment->created_at);
        }

        return Response::json($options);
    }

    public function getPublishedAppointments($id)
    {
        $appointments = Appointment::where([
            ['goal_id', '=', $id],
            ['showable', '=', true],
        ])->get();

        $options = array();

        foreach ($appointments as $appointment) {
            $options += array($appointment->id => $appointment->created_at);
        }

        return Response::json($options);
    }
    //
    public function create(){

    	return View('navigation.practitionerstart')
    		->with('users',User::orderBy('name')->get());
    }

    public function start(Request $request){
         $user = $request->user();
         $user_goals= Goal::where('user_id',$user->id);
         $appointment=Appointment::where('showable',true)->latest()->first();

         return View('navigation.practitionerstart')
            ->with(['users',User::orderBy('name')->get(),
                    'user'=>$user,
                    'user_goals'=>$user_goals,
                    'appointment'=>$appointment]);
    }

    public function storeAppointment(Request $request){
    	$this->validate($request, [
    		'goal_id'=> 'required|numeric',
            'user_id'=> 'required|numeric',
    	]);

        $goal_id= $request->input('goal_id');
        $priorAppointment=Appointment::where('goal_id', $goal_id)->latest()->first();

    	$appointment =new Appointment();
    	$appointment->goal_id=$goal_id;
        $appointment->user_id=$request->input('user_id');
    	$appointment->save();

        if(!empty($priorAppointment)){
            $problemlist=$priorAppointment->problems()->where('cleared', false)->get();
            $appointment->problems()->sync($problemlist);
        }

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
        $appointment->user_id=$request->input('user_id');
    	$appointment->save();
    	return \Redirect::route('navigation.show', $appointment);


    }

    public function storeUserGoalAppointment(Request $request){
    	$this->validate($request, [
    		'client_name'=> 'required|min:5',
    		'client_email'=>'required|email',
    		'case_description'=>'required|min:5',
    		'goal_description'=>'required|min:10',
    	]);
      
    	$user= new User();
    	$user->name=$request->input('client_name');
    	$user->email=$request->input('client_email');
    	$user->password=Hash::make('password');
        auth()->login($user);
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
        $appointment->user_id=$user_id->id;
    	$appointment->save();
    	return \Redirect::route('navigation.show', $appointment);
    }

    public function publishAppointment($id){
        $appointment = Appointment::find($id);
        $appointment->showable=true;
        $appointment->save();

        return redirect('/sessionstart');
    }

    public function saveAppointment(){
        return redirect('/sessionstart');
    }


    //This will show any appointment
    public function showAppointment ($id){
        $appointment=Appointment::find($id);
        $problems = [];
        $problems[]=$appointment->problems;
        $solutions=[];
        $solutions=$appointment->solution;
    
         return view('reports')
            ->with(['problems'=>$problems,
                    'appointment'=>$appointment,
                    'solutions'=>$solutions]);
    }

    
    //This will show a clients latest appointment to the client
    public function showLastAppointment(Request $request){
        $user=$request->user();
        $appointment=$user->publishedAppointments()->latest()->first();
        $appointments=$user->publishedAppointments()->latest()->first();
        $problems = [];
        $problems[]=$appointment->problems;
        $solutions=[];
        $solutions=$appointment->solution;
    
         return view('clients.firstreport')
            ->with(['problems'=>$problems,
                    'appointment'=>$appointment,
                    'appointments'=>$appointments,
                    'solutions'=>$solutions]);
    }

    public function appointmentStart(Request $request){
        $user=$request->user();
        $users=User::all();
        $appointments = Appointment::where('showable', true);
        $appointment= $user->appointment->latest()->first();
        $problems = [];
        $problems[]=$appointment->problems;
        $solutions=[];
        $solutions=$appointment->solution;
        return view('Navigation.home')
            ->with(['user'=>$user,
                    'users'=>$users,
                    'appointment'=>$appointment,
                    'problems'=>$problems,
                    'solutions'=>$solutions,
                    'appointments'=>$appointments]);
    }


}
