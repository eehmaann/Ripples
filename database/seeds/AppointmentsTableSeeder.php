<?php

use Illuminate\Database\Seeder;
use App\Appointment;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $appointments=[
    	 	[1, 1],
    	 	[2, 1],
    	 	[2, 1],
    	 ];

    	 $count = count($appointments);

	    foreach ($appointments as $key => $appointmentData) {
	        $appointment = new  Appointment();

	        $appointment->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $appointment->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $appointment->goal_id = $appointmentData[0];
            $appointment->user_id = $appointmentData[0];

	        $appointment->save();
	        $count--;
        //
        }
    }
}
