<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $colors=[
        	['red'],
        	['orange'],
        	['yellow'],
        	['green'],
        	['blue'],
        	['indigo'],
        	['violent'],
        	['black'],
        	['white']
        ];

        $count = count($colors);

	    foreach ($colors as $key => $colorData) {
	        $color = new color();

	        $color->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $color->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $color->color=$colorData[0];

	        $color->save();
	        $count--;
        }
    }
}