<?php

use Illuminate\Database\Seeder;
use App\Case;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $cases=[
    	 	['My knee hurts','I want a stronger knee', '1'],
    	 	["I am out of work and can/'t get a job", 'I seek abundance', '1'],
    	 	['I am having problems with my wife', 'I want a healthy relationship with my wife', '2'],
        ];

    	 $count = count($cases);

	    foreach ($cases as $key => $caseData) {
	        $case = new  Case();

	        $case->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $case->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $case->reason = $caseData[0];
	        $case->goal = $caseData[1];
	        $case->user_id =$caseData[2];

	        $case->save();
	        $count--;
        //
        }
    }
}
