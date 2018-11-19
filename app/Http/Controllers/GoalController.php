<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Goal;
use App\Appointment;

class GoalController extends Controller
{
    //
    public function getRelatedGoals($id)
	{
		$goals = Goal::where('id', '=', $id)->get();
		$options = array();

		foreach ($goals as $goal) {
			$options += array($goal->id => $goal->goal);
		}

		return Response::json($options);
	}

	public function getSavedAppointments($id)
	{
		$appointments = Appointment::where([
			['goal_id', '=', $id],
			['showable', '=', 0],
		])->get();

		$options = array();

		foreach ($goals as $goal) {
			$options += array($appointment->id => $appointment->created_at);
		}

		return Response::json($options);
	}
}
