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
    	 	['Lactose','Substance'],
    	 	['Gluten', 'Substance'],
    	 	['Nuts', 'Substance'],
    	 	['Meat', 'Substance'],
    	 	['Mushrooms', 'Substance'],
    	 	['Nightshae plants (tomato, potato, eggplant, pepper', 'Substance'],
    	 	['Chemicals and toxins', 'Substance'],
    	 	['Fatigue', 'Symptom'],
    	 	['Headache', 'Symptom'],
    	 	['Gas', 'Symptom'],
    	 	['Diarrhea', 'Symptom'],
    	 	['Stomach pain', 'Symptom'],
    	 	['Burping or acid reflux', 'Symptom'],    	 	
    	 ];

    	 $count = count($intolerances);

	    foreach ($intolerances as $key => $intoleranceData) {
	        $intolerance = new Intolerance();

	        $intolerance->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $intolerance->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $intolerance->name = $intoleranceData[0];
	        $intolerance->purpose = $intoleranceData[1];

	        $intolerance->save();
	        $count--;
        //
        }
    }
}
