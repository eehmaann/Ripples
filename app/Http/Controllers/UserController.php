<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
