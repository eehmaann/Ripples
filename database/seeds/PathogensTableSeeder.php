<?php

use Illuminate\Database\Seeder;

class PathogensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$pathogens = [
    		['Parasites', 'Organisms grow, shelter, and feed in the body. There
				are many different strains, ranging from microscopic to large organisms. They steal nutrients, invade
				bodily tissues and create poisonous toxic waste. 85-90% of people in the U.S. have parasites not found
				in medical testing. Herbal Corrective Suggestion:', 'no', 'pathogen', 'definer'],
			['Fungal', 'The invasion and multiplication of opportunistic mold microorganisms that are not normally 
				present within the body. Mold causes a wide variety of symptoms including joint and muscles pain, 
				fatigue and brain fog.', 'no', 'pathogen', 'definer'],
			['Bacterial', '', 'no', 'pathogen', 'definer'],
			['Viral', '', 'no', 'pathogen', 'definer'],
			['Mold', 'The invasion and multiplication of opportunistic mold microorganisms that are not normally 
				present within the body. Mold causes a wide variety of symptoms including joint and muscles pain, 
				fatigue and brain fog.', 'no', 'pathogen', 'definer' ]
    	];
     	$count = count($pathogens);
	    foreach ($pathogens as $key => $pathogenData) {
	        $pathogen = new pathogen();

	        $pathogen->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $pathogen->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $pathogen->name = $pathogenData[0];
	        $pathogen->definition = $pathogenData[1];
	        $pathogen->emotion_trapped = $pathogenData[2];
	        $pathogen->pathogen_type= $pathogenData[3];
	        $pathogen->purpose= $pathogenData[4];

	        $pathogen->save();
	        $count--;
    	}
    }   //
}
