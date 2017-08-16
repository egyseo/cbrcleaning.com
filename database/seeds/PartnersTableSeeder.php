<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners = [
            [
            	'name' => '22core',
            	'image' => 'img/icon-customer-22core.png',
            	'url' => '22core',
            	'description' => '22core'
            ], 
            [
            	'name' => 'amicon',
            	'image' => 'img/icon-customer-amicon.png',
            	'url' => '',
            	'description' => ''
            ], 
            [
            	'name' => 'city',
            	'image' => 'img/icon-customer-city.png',
            	'url' => 'cirty',
            	'description' => 'city'
            ], 
            [
            	'name' => 'mc velar',
            	'image' => 'img/icon-customer-mc-velar.png',
            	'url' => 'mc velar',
            	'description' => 'mc velar'
            ], 
            [
            	'name' => 'rc construction',
            	'image' => 'img/icon-customer-rc.png',
            	'url' => 'rc construction',
            	'description' => 'rc construction'
            ], 
            [
            	'name' => 'rg construction',
            	'image' => 'img/icon-customer-rg.png',
            	'url' => 'rg construction',
            	'description' => 'rg construction'
            ], 
            [
            	'name' => 'terracon',
            	'image' => 'img/icon-customer-terracon.png',
            	'url' => 'terracon',
            	'description' => 'terracon'
            ], 
            [
            	'name' => 'Wholesale',
            	'image' => 'img/icon-customer-wholesale.png',
            	'url' => 'Wholesale',
            	'description' => 'Wholesale'
            ]
        ];

        DB::table('partners')->insert($partners);


    }
}
