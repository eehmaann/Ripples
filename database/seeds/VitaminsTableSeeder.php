<?php

use Illuminate\Database\Seeder;
use App\Vitamin;

class VitaminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $vitamins=[
        	['Vitamin A', 1,1],
        	['Carotenoids', 1,1],
        	['Vitamin D', 1, 1],
        	['Vitamin E', 1,1],
        	['Vitamin K', 1,1],
        	['Thiamin B1',1,2],
        	['Riboflavin B2', 1,2],
        	['Niacin B3', 1,2],
        	['Pantothenic Acid B5', 1,2],
        	['Pyridoxine B6',1,2],
        	['Biotin B7', 1,3 ],
        	['Folate B9',1,3],
        	['Cobalamin B12',1,3],
        	['Choline',1,3],
        	['Vitamin C',1,3],
        	['Omega 3',1,4],
        	['Omega 6',1,4],
        	['Co-Enzyme Q10',1,4],
        	['Probiotics/Prebiotics', 1,4],
        	['Carnitine',1,4],
        	['Antioxidants',1,5],
        	['Protein',1,5],
        	['Saturated Fatty Acids',1,5],
        	['Carbohydrate',1,5],
        	['Fiber',1,5],
        	['Histidine',1,6],
        	['Lysine',1,6],
        	['Leucine',1,6],
        	['Isoleucine',1,6],
        	['Valine',1,6],

        	['Calcium', 2,1],
        	['Chromium', 2,1],
        	['Copper', 2, 1],
        	['Iodine', 2,1],
        	['Iron',2,1],
        	['Magnesium',2,2],
        	['Manganese', 2,2],
        	['Molybdenum', 2,2],
        	['Phosphorus', 2,2],
        	['Selenium',2,2],
        	['Zinc', 2,3 ],
        	['Potassium',2,3],
        	['Sodium',2,3],
        	['Chloride',2,3],
        	['Sulfur',2,3],
        	['Flavonoids',2,4],
        	['Boron',2,4],
        	['Cobalt',2,4],
        	['Lecithin', 2,4],
        	['Oxygen',2,4],
        	['Cholesterol',2,5],
        	['Lutein/Zeaxnthin',2,5],
        	['Monounsaturated FA',2,5],
        	['Polyunsaturated FA',2,5],
        	['Lycopene',2,5],
        	['Enzymes',2,6],
        	['Methionine',2,6],
        	['Phenylalanine',2,6],
        	['Threonine',2,6],
        	['Tryptophan',2,6],
        ];

        $count = count($vitamins);

	    foreach ($vitamins as $key => $vitaminData) {
	        $vitamin = new vitamin();

	        $vitamin->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $vitamin->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $vitamin->vitamin=$vitaminData[0];
	        $vitamin->columnNumber=$vitaminData[1];
            $vitamin->rowNumber=$vitaminData[2];
	        $vitamin->frequency= 0;

	        $vitamin->save();
	        $count--;
	    }
    }
}
