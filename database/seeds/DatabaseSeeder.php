<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(EmotionsTableSeeder::class);
    	$this->call(LocatorsTableSeeder::class);
        $this->call(DiagnosesTableSeeder::class);
        $this->call(DetailersTableSeeder::class);
        $this->call(DefinersTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(HerbsTableSeeder::class);
        $this->call(HormonesTableSeeder::class);
        $this->call(IntolerancesTableSeeder::class);
        $this->call(VitaminsTableSeeder::class);
       

        // $this->call(UsersTableSeeder::class);
    }
}
