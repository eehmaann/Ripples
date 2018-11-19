<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 $users=[
    	 	['Gail','gail@tester.com', 'Harvard', 'client'],
    	 	['Bob', 'bob@tester.com', 'Harvard', 'client'],
    	 	['Vera', 'vera@tester.com', 'Harvard', 'practitioner'],
        ];

    	 $count = count($users);

	    foreach ($users as $key => $userData) {
	        $user = new User();

	        $user->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $user->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
	        $user->name = $userData[0];
	        $user->email = $userData[1];
	        $user->password = $userData[2];
            $user->role=$userData[3];

	        $user->save();
	        $count--;
        //
        }
    }
}
