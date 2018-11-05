<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Goal;

class GoalController extends Controller
{
    //
   	public function getRestatedGoal($id)
	{
		$goal = Goal::where('goal_id', '=', $id)->value('goal');

		return Response::json($goal);
	}
}
