<?php

use Illuminate\Database\Seeder;
use App\Goal;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$goals=[
    	 	['My knee hurts','I want a stronger knee', '1'],
    	 	['I am out of work and can\'t get a job', 'I seek abundance', '1'],
    	 	['I am having problems with my wife', 'I want a healthy relationship with my wife', '2'],
        ];

    	 $count = count($goals);

	    foreach ($goals as $key => $goalData) {
	        $goal = new  Goal();

	        $goal->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $goal->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $goal->reason = $goalData[0];
	        $goal->goal = $goalData[1];
	        $goal->user_id =$goalData[2];

	        $goal->save();
	        $count--;
        //
        }
    }
}
