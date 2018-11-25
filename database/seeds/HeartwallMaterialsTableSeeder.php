<?php

use Illuminate\Database\Seeder;
use App\Heartwallmaterial;

class HeartwallMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $heartwallmaterials=[
         	['Titanium'],
         	['Stuffed Animals'],
         	['Running Shoes'],
         	['Steel'],
         	['Wood']
         ];

         $count = count($heartwallmaterials);

	    foreach ($heartwallmaterials as $key => $heartwallmaterialData) {
	        $heartwallmaterial = new heartwallmaterial();

	        $heartwallmaterial->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $heartwallmaterial->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $heartwallmaterial->material = $heartwallmaterialData[0];

	        $heartwallmaterial->save();
	        $count--;
	    };
    }
}
