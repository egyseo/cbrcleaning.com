<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $values = [
            [
            	'name' => 'Integrity',
            	'icon' => 'fa fa-gavel',
            	'content' => 'The employees of our company are people who represent our ethical values'
            ],
            [
            	'name' => 'Teamwork',
            	'icon' => 'fa fa-users',
            	'content' => 'Our collective work makes it much easier to finish our work in a timely manner'
            ],
            [
            	'name' => 'Excellence',
            	'icon' => 'fa fa-cube',
            	'content' => 'We are a company that seeks perfection in the midst of all its work'
            ],
            [
            	'name' => 'Honesty',
            	'icon' => 'fa fa-flag',
            	'content' => 'All our team works based on the trust of their honesty'
            ],
            [
            	'name' => 'Professional Growth',
            	'icon' => 'fa fa-codepen',
            	'content' => 'Our employees are the key to our success...'
            ],
            [
            	'name' => 'Customer Service',
            	'icon' => 'fa fa-phone',
            	'content' => 'Our customers come first and their satisfaction...'
            ],

        ];

        DB::table('values')->insert($values);


    }
}
