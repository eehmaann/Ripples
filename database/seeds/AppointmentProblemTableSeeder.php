<?php

use Illuminate\Database\Seeder;
use App\Appointment;
use App\Problem;

class AppointmentProblemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            $problems=[
        	1=>[2],
			2=>[2,3],
			3=>[2,3],
			4=>[2,3]

        ];
        foreach ($problems as $id => $appointments){
        	$problem=Problem::where('id', 'like', $id)->first();
        	foreach ($appointments as $appointment_id) {
        		$appointment =Appointment::where('id', 'like', $appointment_id)->first();
        		$problem->appointments()->save($appointment);
        	}
        }
    }
}

