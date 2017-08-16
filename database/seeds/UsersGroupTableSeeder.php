<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersGroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersGroup = [
            ['parent_id' => 0,'title' => 'Administrator','description' => 'Administrator Group User'],
            ['parent_id' => 0,'title' => 'Guest','description' => 'Guest Group User']
        ];

        DB::table('usergroups')->insert($usersGroup);


    }
}
