<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Goal;

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
}
