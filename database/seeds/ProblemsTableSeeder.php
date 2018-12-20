<?php

use Illuminate\Database\Seeder;
use App\Problem;

class ProblemsTableSeeder extends Seeder
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
    	 	[1,'Addictive Heart Enery',false, 1],
    	 	[2, 'Despair Anchor',true, 9],
    	 	[2, 'Addictive Heart Energy',false, 1],
    	 	[3, 'Knee unhappy',false,27]
        ];

    	 $count = count($problems);

	    foreach ($problems as $key => $problemData) {
	        $problem = new problem();

	        $problem->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $problem->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $problem->steps = $problemData[0];
	        $problem->description = $problemData[1];
	        $problem->cleared = $problemData[2];
	        $problem->diagnosis_id=$problemData[3];

	        $problem->save();
	        $count--;
	    }
    }
}