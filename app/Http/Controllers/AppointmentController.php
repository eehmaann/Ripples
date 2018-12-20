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

    //Start a session for a practitioner.  Takes them to select a user to work for
    public function create(){

    	return View('navigation.practitionerstart')
    		->with('users',User::orderBy('name')->get());
    }

    //A better versio of create.   
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

    //This will create a new session where the only new thing is appointment
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
    // Starts a new appointement with a new goal as well
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

    // Starts a new appointment for a new user
    public function storeUserGoalAppointment(Request $request){
    	$this->validate($request, [
    		'client_name'=> 'required|min:1',
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

    // Publishes the appointment that is currently be worked on, making it visible to client
    public function publishAppointment($id){  
        $appointment = Appointment::find($id);
        $appointment->showable=true;
        $appointment->save();

        return redirect('/homesession');
    }

    public function destroyAppointment($id){
        $appointment=Appointment::find($id);
        $problems=$appointment->problems()->get(); 
        if(!empty($problems)){
            foreach($problems as $problem){
                if($problem->appointments()->count()>0){
                    $problem->cleared=false;
                }
                else{
                    if($problem->emotions()) {
                        $problem->emotions()->detach();
                    }
                    $problem->describable()->delete();
                     $problem->delete();
                }
            } 
        } 
        $appointment->solution()->delete();
        $appointment->problems()->detach();
        $appointment->delete(); 
        return redirect('/homesession');
    }

    //This will show the report with that id
    public function showAppointment (Request $request, $id){
        $user=$request->user();
        $appointment=Appointment::find($id);
        if($user->role=="practitioner"){
            $appointments = Appointment::where('showable', true);
            $clients=User::has('publishedAppointments')->get();
        }
        else{
             $appoinments=$user->publishedAppointments()->get();
              $clients=[];
        }
       
        $problems = [];
        $problems[]=$appointment->problems;
        $solutions=[];
        $solutions=$appointment->solution;

    
         return view('reports')
            ->with(['problems'=>$problems,
                    'appointment'=>$appointment,
                    'appointments'=>$appointments,
                    'solutions'=>$solutions,
                    'user'=>$user,
                    'clients'=>$clients]);
    }

    
    //This will show a clients latest appointment to the client
    public function showLastAppointment(Request $request){
        $user=$request->user();
        $appointment=$user->publishedAppointments()->latest()->first();
        $appointments=$user->publishedAppointments()->get();
        $problems = [];
        $problems[]=$appointment->problems;
        $solutions=[];
        $solutions=$appointment->solution;
    
         return view('clients.firstreport')
            ->with(['problems'=>$problems,
                    'appointment'=>$appointment,
                    'appointments'=>$appointments,
                    'solutions'=>$solutions,
                    'user'=>$user]);
    }

    // This is the opening page for the pracitioner, it will give the option to start session or view reports
    public function appointmentStart(){
        $users=User::orderBy('name')->get();
        $clients=User::has('publishedAppointments')->get();
        $goals=Goal::whereHas('goalpublishedAppointments')->get();
        $appointments = Appointment::where('showable', true);
        if(!empty($appointments)){
            $appointment=$appointments->latest()->first();
        }
        else{
            $appointment=null;
        }
        return view('Navigation.home')
            ->with(['users'=>$users,
                    'appointments'=>$appointments,
                    'clients'=>$clients,
                    'appointment'=>$appointment,
                    'goals'=>$goals
                ]);
    }


}
