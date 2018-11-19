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
        $this->call(UsersTableSeeder::class);
        $this->call(GoalsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(LocatorsTableSeeder::class);
        $this->call(DiagnosesTableSeeder::class);
        $this->call(ProblemsTableSeeder::class);
    	$this->call(EmotionsTableSeeder::class);
        $this->call(DetailersTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(FoodsTableSeeder::class);
        $this->call(HerbsTableSeeder::class);
        $this->call(HormonesTableSeeder::class);
        $this->call(IntolerancesTableSeeder::class);
        $this->call(VitaminsTableSeeder::class);
        $this->call(CuresTableSeeder::class);
        $this->call(CureDiagnosisTableSeeder::class);
        $this->call(AppointmentProblemTableSeeder::class);
        $this->call(HeartwallTableSeeder::class);
    }
}
