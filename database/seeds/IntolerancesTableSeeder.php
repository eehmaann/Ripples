<?php

use Illuminate\Database\Seeder;
use App\Intolerance;

class IntolerancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $intolerances=[
    	 	['Lactose','Fatigue'],
    	 	['Gluten', 'Headache'],
    	 	['Nuts', 'Gas'],
    	 	['Meat', 'Diarrhea'],
    	 	['Mushrooms', 'Stomach pain'],
    	 	['Nightshae plants (tomato, potato, eggplant, pepper', 'Burping or acid reflux'],
    	 	['Chemicals and toxins', 'Diarrhea'],  	 	
    	 ];

    	 $count = count($intolerances);

	    foreach ($intolerances as $key => $intoleranceData) {
	        $intolerance = new Intolerance();

	        $intolerance->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $intolerance->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $intolerance->substance = $intoleranceData[0];
	        $intolerance->symptom = $intoleranceData[1];

	        $intolerance->save();
	        $count--;
        //
        }
    }
}
