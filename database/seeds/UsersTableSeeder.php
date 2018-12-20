<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
public function run()
    {
 
       User::truncate();
  
        User::create( [
            'email' => 'Bob@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'Bob Tester' ,
        ] );

         User::create( [
            'email' => 'Gail@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'Gail Tester' ,
        ] );

        User::create( [
            'email' => 'Vera@test.com' ,
            'password' => Hash::make( 'password' ) ,
            'name' => 'Vera Owner' ,
            'role' =>'practitioner'
        ] );


    }
}
