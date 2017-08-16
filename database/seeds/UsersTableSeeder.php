<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$datNow = Carbon::now();
    	$datebirth = Carbon::create(1987, 12, 02, 12);       

        $users = [
	        [
	            'first_name' => 'Michael',
	            'last_name' => 'Rodriguez',           
	            'phone' => '7863550502',
	            'address' => '721 Curtiss Parkway Apt 6',
	            'city' => 'Miami Spring',
	            'zipcode' => '33126',
	            'birthday' => $datebirth->toDateTimeString(),
	            'user_group_id' => 1,
	            'password' => bcrypt('Pa$$w0rd'),
	            'email' => 'mrodriguez@nissienterprise.com',
	            'registration_ip' => '192.168.1.190',
	            'picture_profile' => '/img/picture_profile.png',
	            'question1' => 'Test',
	            'answer1' => 'Test',
	            'question2' => 'Test',
	            'answer2' => 'Test',
	            'question3' => 'Test',
	            'answer3' => 'Test',
	            'last_visited' => $datNow->toDateTimeString(),
	            'registration_date' => $datNow->toDateTimeString()
	        ],
	        [
	            'first_name' => 'Vinney',
	            'last_name' => 'Rodriguez',           
	            'phone' => '7863509949',
	            'address' => '721 Curtiss Parkway Apt 6',
	            'city' => 'Miami Spring',
	            'zipcode' => '33126',
	            'birthday' => $datebirth->toDateTimeString(),
	            'user_group_id' => 1,
	            'password' => bcrypt('Pa$$w0rd'),
	            'email' => 'vrodriguez@nissienterprise.com',
	            'registration_ip' => '192.168.1.190',
	            'picture_profile' => '/img/picture_profile.png',
	            'question1' => 'Test',
	            'answer1' => 'Test',
	            'question2' => 'Test',
	            'answer2' => 'Test',
	            'question3' => 'Test',
	            'answer3' => 'Test',
	            'last_visited' => $datNow->toDateTimeString(),
	            'registration_date' => $datNow->toDateTimeString()
	        ]   
        ];

        DB::table('users')->insert($users);
    }
}
