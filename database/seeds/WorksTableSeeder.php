<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $works = [
            [
            	'name' => 'Janitorial Services',
            	'urlimagemini' => 'img/work-icon-janitorial.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'We have comprehensive cleaning solutions, which are fully customizable ...',
            	'content' => '',
            ],
            [
            	'name' => 'Post-Construction',
            	'urlimagemini' => 'img/work-icon-postconstruction.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => '',
            	'content' => '',
            ],
            [
            	'name' => 'Office Cleaning',
            	'urlimagemini' => 'img/work-icon-office.png',
            	'urlimagefull' => '',
            	'urlcontent' => 'We specialize in cleaning offices with many technological equipment present...',
            	'introcontent' => '',
            	'content' => '',
            ],
            [
            	'name' => 'Industrial Cleaning',
            	'urlimagemini' => 'img/work-icon-industrial.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'We are able to carry out cleanings in industrial areas, we have all the ...',
            	'content' => '',
            ],
            [
            	'name' => 'Building Maintenance',
            	'urlimagemini' => 'img/work-icon-building-maintenance.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'We have integral solutions especially suitable for the maintenance of buildings...',
            	'content' => '',
            ],           
            [
            	'name' => 'Church Cleaning',
            	'urlimagemini' => 'img/work-icon-church.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'We have extensive experience in cleaning religious temples...',
            	'content' => '',
            ],
            [
            	'name' => 'Pressure Cleaning',
            	'urlimagemini' => 'img/work-icon-pressure.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'Our team is quick and very professional taking up very little of your time...',
            	'content' => '',
            ],
            [
            	'name' => 'Carpet Cleaning',
            	'urlimagemini' => 'img/work-icon-carpet.png',
            	'urlimagefull' => '',
            	'urlcontent' => '',
            	'introcontent' => 'The dirt, dust, sand, and other debris that settles on your carpets, along with...',
            	'content' => '',
            ],
            
        ];

        DB::table('works')->insert($works);


    }
}
