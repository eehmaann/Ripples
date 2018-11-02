<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $sessions=[
    	 	[1],
    	 	[2],
    	 	[2],
    	 ];

    	 $count = count($sessions);

	    foreach ($sessions as $key => $sessionData) {
	        $session = new  Session();

	        $session->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $session->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $session->goal_id = $sessionData[0];

	        $session->save();
	        $count--;
        //
        }
    }
}
