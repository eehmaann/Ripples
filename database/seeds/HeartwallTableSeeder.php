<?php

use Illuminate\Database\Seeder;
use App\Heartwall;

class HeartwallTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $heartwalls=[
         	['Titanium', 500, 200],
         	['Stuffed Animals', 300, 150],
         	['Running Shoes', 1000, 500],
         	['Steel', 650, 75],
         	['Wood', 200, 0]
         ];

         $count = count($heartwalls);

	    foreach ($heartwalls as $key => $heartwallData) {
	        $heartwall = new heartwall();

	        $heartwall->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $heartwall->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $heartwall->material = $heartwallData[0];
	        $heartwall->starting_distance =$heartwallData[1];
            $heartwall->current_distance=$heartwallData[2];

	        $heartwall->save();
	        $count--;
	    };
    }
}

