<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Goal;
use App\Appointment;

class GoalController extends Controller
{
    //

    //This gets the text box for the goal based on selection of reason for the appointment
    public function getRelatedGoals($id)
	{
		$goals = Goal::where('id', '=', $id)->get();
		$options = array();
		foreach ($goals as $goal) {
			$options += array($goal->id => $goal->goal);
		}

		return Response::json($options);
	}

	// This reeturns a appointment that has yet to be finished
	public function getSavedAppointments($id)
	{
		$appointments = Appointment::where([
			['goal_id', '=', $id],
			['showable', '=', false],
			])->get();

		$options = array();
		foreach ($appointments as $appointment) {
			$options += array($appointment->id =>'Session started on '.$appointment->created_at);

		}

		return Response::json($options);
	}

	// This helps to view appointments that are viewable to the client
	public function getPublishedAppointments($id)
	{
		$appointments = Appointment::where([
			['goal_id', '=', $id],
			['showable', '=', true],
		])->get();

		$options = array();

		foreach ($appointments as $appointment) {
			$options += array($appointment->id =>'Session started on '.$appointment->created_at);
		}

		return Response::json($options);
	}

	public function lastPublishedAppointment($id){
		$appointments = Appointment::where([
			['goal_id', '=', $id],
			['showable', '=', true],
		])->latest()->first();

		$options = array();

		foreach ($appointments as $appointment) {
			$options += array($appointment->id => $appointment->goals->goal.' '.$appointment->created_at);
		}

		return Response::json($options);
	}
}


