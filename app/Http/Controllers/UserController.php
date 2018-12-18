<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;
use App\Goal;
use App\User;
use Response;

class UserController extends Controller
{
    //

   	public function getGoals($id)
	{
		$goals = Goal::where('user_id', '=', $id)->get();
		$options = array();

		foreach ($goals as $goal) {
			$options += array($goal->id => $goal->reason);
		}

		return Response::json($options);
	}

	public function getPublishedGoals($id){
		$goals = Goal::where('user_id', '=', $id)
				->whereHas('goalpublishedAppointments')->get();;
		$options = array();

		foreach ($goals as $goal) {
			$options += array($goal->id => $goal->reason);
		}

		return Response::json($options);
	}




	public function getPublishedAppointments($id)
	{
		$appointments = Appointment::where([
			['user_id', '=', $id],
			['showable', '=', true],
		])->get();
		$options = array();

		foreach ($appointments as $appointment) {
			$options += array($appointment->id => $appointment->created_at);
		}

		return Response::json($options);
	}

	public function lastPublishedAppointment($id){
		$appointment = Appointment::where([
			['user_id', '=', $id],
			['showable', '=', true],
		])->latest()->first();

		$options = array();
		$options += array($appointment->id => $appointment->goals->goal.' '.$appointment->created_at);

		return Response::json($options);
	}
}

