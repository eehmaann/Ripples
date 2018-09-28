<?php

use Illuminate\Database\Seeder;

class ToxinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toxins= [
        	['Heavy Metals', '', 'no', 'toxins', 'definer'],
        	['Excesses', '', 'no', 'toxins', 'locator']
        	['EM Spectrum', '', 'no', 'toxins', 'definer'],
        	['Chemicals', '', 'no', 'toxins', 'locator'],
        	['Prions', '', 'no', 'toxins', 'locator'],
        	['Microbial', '', 'no', 'toxins', 'locator'],
        	['Dental', '', 'toxins', 'locator'],
        	['Mercury','','no', 'heavy metals', 'detailer'],
        	['Lead','','no', 'heavy metals', 'detailer'],
        	['Cadmium','','no', 'heavy metals', 'detailer'],
        	['Aluminum','','no', 'heavy metals', 'detailer'],
        	['Stress Hormones', 'Adrenalin and Cortisol are considered the “stress hormones” of the body. They can be 
        		produced in excess during difficult times, becoming toxic to the body.', 'no', 'excesses', 'definer'],
        	['Adrenalin', '', 'no', 'stress hormone', 'detailer'],
        	['Cortisol', '', 'no', 'stress hormone', 'detailer'],
        	['Metabolic Waste', 'The by-products of all metabolic processes. If the organs of elimination are 
        		compromised in any way, or are working less efficiently than they should, metabolic waste can 
        		build up in the body.', 'no', 'excesses', 'definer'],
        	['Free Radicals', '', 'no', 'excesses', 'definer'],
        	['Six Pernicious Influences', '', 'no', 'excesses', 'definer'],
        	['Cold', '', 'no', 'six pernicious influences', 'detailer'],
        	['"Summer Heat', '', 'no', 'six pernicious influences', 'detailer'],
        	['Wind', '', 'no', 'six pernicious influences', 'detailer'],
        	['Dryness', '', 'no', 'six pernicious influences', 'detailer'],
        	['Heat', '', 'no', 'six pernicious influences', 'detailer'],
        	['Dampness', '', 'no', 'six pernicious influences', 'detailer'],
        	['Sound', '', 'no', 'em spectrum', 'detailer'],
        	['Solar Energy', '', 'no', 'em spectrum', 'detailer'],
        	['Radiation', '', 'no', 'em spectrum', 'detailer'],
        	['Microwave', '', 'no', 'em spectrum', 'detailer'],
        	['Fluorescent', '', 'no', 'em spectrum', 'detailer'],
        	['Color', '', 'no', 'em spectrum', 'detailer'],
        	['EMF/Cellular', '', 'no', 'em spectrum', 'detailer'],
        	['Environmental', '', 'no', 'chemical', 'definer'],
        	['Food Additives', '', 'no', 'chemicals', 'definer'],
        	['Recreational Drugs', '', 'no', 'chemical', 'definer'],




        ]
        $count = count($toxins);
	    foreach ($toxins as $key => $toxinData) {
	        $toxin = new toxin();

	        $toxin->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $toxin->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $toxin->name = $toxinData[0];
	        $toxin->definition = $toxinData[1];
	        $toxin->emotion_trapped = $toxinData[2];
	        $toxin->toxin_type= $toxinData[3];
	        $toxin->purpose= $toxinData[4];

	        $toxin->save();
	        $count--;
    	}//
    }
}
