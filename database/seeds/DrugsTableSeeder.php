<?php

use Illuminate\Database\Seeder;
use App\Drug;

class DrugsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        $drugs=[
    	 	['Alcohol','Downers'],
    	 	['Heroin', 'Downers'],
    	 	['Nitrous Oxide', 'Downers'],
    	 	['Ketamine', 'Hallucinogens'],
    	 	['LSD', 'Hallucinogens'],
    	 	['Marijuana', 'Hallucinogens'],
    	 	['Mescaline', 'Hallucinogens'],
    	 	['Mushrooms', 'Hallucinogens'],
    	 	['Amphetamines', 'Uppers'],
    	 	['Caffeine', 'Uppers'],
    	 	['Cocaine', 'Uppers'],
    	 	['Cocaine', 'Uppers'],
    	 	['Ectasy', 'Uppers'],
    	 	['Tobacco', 'Other'],
    	 ];

    	 $count = count($drugs);

	    foreach ($drugs as $key => $drugData) {
	        $drug = new drug();

	        $drug->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $drug->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $drug->name = $drugData[0];
	        $drug->drug_type = $drugData[1];
	        $drug->frequency= 0;

	        $drug->save();
	        $count--;
        //
	    }
    }
}
