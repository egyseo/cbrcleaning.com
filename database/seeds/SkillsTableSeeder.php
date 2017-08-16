<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ['name' => 'Carpet Cleaning', 'value' => 83],
            ['name' => 'Janitorial Services', 'value' => 77],
            ['name' => 'Presure Cleaning', 'value' => 95],
            ['name' => 'Post-Construction', 'value' => 92],
            ['name' => 'Floor Care', 'value' => 81],
            ['name' => 'Spot Removal', 'value' => 80],
            ['name' => 'Building Maintenance', 'value' => 96],
        ];

        DB::table('skills')->insert($skills);


    }
}


