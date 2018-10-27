<?php

use Illuminate\Database\Seeder;
use App\Cure;


class CuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cures=[
    	 	['VRM1','1-3 capsules at bedtime for 4-6 cycles of 15 days each (10 days on, 5 days off) or as directed'],
    	 	['VRM2', '1-3 capsules at bedtime for 4-6 cycles of 15 days each (10 days on, 5 days off) or as directed'],
    	 	['VRM3', '1-3 capsules at bedtime for 30-75 days, or as directed'],
    	 	['VRM4', '1-3 capsules at bedtime for 30-75 days, or as directed'],
    	 	['Activated Sodium Chlorite', 'This product is normally sold as two bottles: one bottle of 50% citric acid solution and one bottle of 28% sodium chlorite solution.  To make two drops of activated sodium cholrite, Put one drop of 50% citric acid soution into a glass.  Put one drop sodium chlorite solution into the glass.  Stir them together periodicall for three minutes.  The solution will turn brown.  Add 6 to 8 ounces or more of purified water and drink the water'],
    	 	['Neem Leaf capsule', ''],
    	 	['Coconut Oil', ''],
    	 	['Tai-Ra-Chi & T4 from Systemic Labs',''],
    	 	['Wild Oregano Oil or Leaf',''],
    	 	['Olive Leaf Extract',''],
    	 	['Colloidal Silver',''],

    	 ];

    	 $count = count($cures);

	    foreach ($cures as $key => $cureData) {
	        $cure = new Cure();

	        $cure->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $cure->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $cure->name = $cureData[0];
	        $cure->instructions=$cureData[1];

	        $cure->save();
	        $count--;
        //
        }
    }
}
