<?php

use Illuminate\Database\Seeder;
use App\Herb;

class HerbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $herbs=[
       		['Alfalfa Herb', 1, 1],
       		['Angelica Root', 1, 1],
       		['Arnica Flower', 1, 1],
       		['Aspen Bark', 1, 1],
       		['Astragaius Root', 1, 1],
       		['Baptisia Root', 1, 1],
       		['Barberry Root', 1, 2],
       		['Bayberry Root Bark', 1, 2],
       		['Benzoin Gum', 1, 2],
       		['Betony Flower', 1, 2],
       		['Black Cohosh Root', 1, 2],
       		['Black Vervain Herb', 1, 2],
       		['Black Walnut Hull', 1, 3],
       		['Blesssed Thistle Herb', 1, 3],
       		['Bloodroot', 1, 3],
       		['Blue Flag RHZ', 1, 3],
       		['Blue Cohosh Root', 1, 3],
       		['Blue Vervain Herb', 1, 3],
       		['Blueberry Leaf', 1, 4],
       		['Bonesset', 1,4],
       		['Brickellia Herb', 1, 4],
       		['Buchu Leaf', 1, 4],
       		['Bugleweed Herb', 1, 4],
       		['Burdock Root', 1, 4],
       		['Burdock Seed', 1, 5],
       		['Calendula Flower', 1, 5],
       		['Cascara Sagrada Root', 1, 5],
       		['Catnip Herb', 1, 5],
       		['Cayenne Fruit', 1, 5],
       		['Celandine Greater Herb', 1, 5],
       		['Chamomile Flower', 1, 6],
       		['Chaparral Leaf', 1, 6],
       		['Chastetree Berry', 1, 6],
       		['Cinnamon Bark', 1, 6],
       		['Clematis Herb', 1, 6],
       		['Cleavers Herb', 1, 6],

       		['Comfrey Leaf', 2, 1],
       		['Corn Silk', 2, 1],
       		['Cotton Root Bark', 2, 1],
       		['Cow Parsnip Root', 2, 1],
       		['Cramp Bark', 2, 1],
       		['Damiana Herb', 2, 1],
       		['Dandelion Root', 2, 2],
       		['Desert Willow Bark', 2, 2],
       		['Devil\'s Claw Root', 2, 2],
       		['Dogbane Root', 2, 2],
       		['Dong Quai Root', 2, 2],
       		['Echinacea Root', 2, 2],
       		['Elecampane Root', 2, 3],
       		['Elder Flower', 2, 3],
       		['Eucalpytus Leaf', 2, 3],
       		['Eyebright Herb', 2, 3],
       		['False Unicorn Root', 2, 3],
       		['Fennel Seed', 2, 3],
       		['Feverfew Flower', 2, 4],
       		['Fireweed Herb', 2, 4],
       		['Fringetree Bark', 2,4],
       		['Garlic Bulb', 2, 4],
       		['Gentian Root, green', 2, 4],
       		['Gingko Leaf', 2, 4],
       		['Ginseng Root, Wild Am.', 2, 5],
       		['Golden Seal Root', 2, 5],
       		['Gotu Kola Herb', 2, 5],
       		['Gravel Root', 2, 5],
       		['Grindelia Flower', 2, 5],
       		['Guarana Seed', 2, 5],
       		['Hawthorne Flower & Berry', 2, 6],
       		['Hops Strobules', 2, 6],
       		['Horehound Herb', 2, 6],
       		['Horse Chestnut Herb', 2, 6],
       		['Horseradish Root', 2, 6],

       		['Horesetail Herb', 3, 1],
       		['Immortal Root', 3, 1],
       		['Juniper Berry', 3, 1],
       		['Kava-Kava Root', 3, 1],
       		['Kelp Frond', 3, 1],
       		['Kola Nut', 3, 1],
       		['Lavender Leaf', 3, 2],
       		['Licorice Root', 1, 2],
       		['Lily of the Valley Root', 3, 2],
       		['Lobella Herb', 3, 2],
       		['Ha Huang Stem', 3, 2],
       		['Maravilla Root', 3, 2],
       		['Marshmellow Root', 3, 3],
       		['Matarique Root', 3, 3],
       		['Milk Thistle Seed', 3, 3],
       		['Menta Poleo Herb', 3, 3],
       		['Mormon Tea', 3, 3],
       		['Motherwort Herb', 3, 3],
       		['Mullein Leaf', 3, 4],
       		['Myrrh Gum', 3,4],
       		['Nettles Herb', 3, 4],
       		['Oat Seed', 3, 4],
       		['Ocotoillo Stem Bark', 3, 4],
       		['Oregano Grape Root', 3, 4],
       		['Osha Root', 3, 5],
       		['Pansy Herb', 3, 5],
       		['Partridge Berry', 3, 5],
       		['Squaw Vine', 3, 5],
       		['Passion Flower', 3, 5],
       		['Pau D\'Arco Bark', 3, 5],
       		['Pennyroyal Herb', 3, 6],
       		['Pipsissewa Herb', 3, 6],
       		['Pleurisy Root', 3, 6],
       		['Poke Root', 3, 6],
       		['Prickly Ash Bark', 3, 6],
       		['Prickly Poppy', 3, 6],

       		['Propolis Resin', 4, 1],
       		['Pulsatilla Flower', 4, 1],
       		['Quassia Wood', 4, 1],
       		['Raspberry Leaf', 4, 1],
       		['Red Clover Flower', 4, 1],
       		['Red Root', 4, 1],
       		['Rosemary Leaf', 4, 2],
       		['Sarsaparilla Root', 4, 2],
       		['Saw Palmetto Fruit', 4, 2],
       		['Sheperd\'s Purse Herb', 4, 2],
       		['Skullcap Herb', 4, 2],
       		['Spikenard Root', 4, 2],
       		['Stillingia Root', 4, 3],
       		['Storksbill Herb', 4, 3],
       		['St. John\s Wort Flower', 4, 3],
       		['Thuja Leaf', 4, 3],
       		['Toadflax Herb', 4, 3],
       		['Usnea Lichen', 4, 3],
       		['Uva Ursi Leaf', 4, 4],
       		['Valerian Root', 4,4],
       		['Virginia Snake Root', 4, 4],
       		['White Oak Bark', 4, 4],
       		['White Sage Leaf', 4, 4],
       		['White Willow Bark', 4, 4],
       		['Wild Cherry Bark', 4, 5],
       		['Wild Ginger Root', 4, 5],
       		['Wild Yam Root', 4, 5],
       		['Witch Hazel Leaf', 4, 5],
       		['Yarrow Flower', 4, 5],
       		['Yellow Dock Root', 4, 5],
       		['Yerba Mansa Root', 4, 6],
       		['Yerba Santa Leaf', 4, 6],
       		['Yohimbe Bark', 4, 6],
       		['Yucca Root Bark', 4, 6],
       		

       ];
       $count = count($herbs);

	    foreach ($herbs as $key => $herbData) {
	        $herb = new herb();

	        $herb->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $herb->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $herb->name = $herbData[0];
	        $herb->columnNumber =$herbData[1];
            $herb->rowNumber=$herbData[2];
	        $herb->frequency= 0;

	        $herb->save();
	        $count--;
	    }
    }
}
