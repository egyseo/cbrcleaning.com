<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = [
            [
            	'backgroundimage' => 'img/slider/slideshow-01.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 1,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Janitorial Cleaning',
            	'text_h2' => 'Whether you live, you need professional janitor services that can help to ensure your property remains clean and sanitary as often as possible.',
            	'read_more_link' => '/services/janitorial-services',
            	'text_col_size' => 6
            ],
            [
            	'backgroundimage' => 'img/slider/slideshow-02.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 2,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Office Cleaning',
            	'text_h2' => 'The employees in a clean, tidy office work more efficiently than they would in a messy environment.',
            	'read_more_link' => '/services/office-cleaning',
            	'text_col_size' => 6
            ],
            [
            	'backgroundimage' => 'img/slider/slideshow-03.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 3,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Custom Cleaning Solutions',
            	'text_h2' => 'We provide comprehensive cleaning solutions tailored to the needs of each company',
            	'read_more_link' => '/services',
            	'text_col_size' => 6
            ],
            [
            	'backgroundimage' => 'img/slider/slideshow-04.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 4,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Building Maintenance Solutions',
            	'text_h2' => 'Building maintenance is an important aspect of successful Florida businesses.',
            	'read_more_link' => '/services',
            	'text_col_size' => 6
            ],
            [
            	'backgroundimage' => 'img/slider/slideshow-05.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 5,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Carpet Cleaning Solutions',
            	'text_h2' => 'Clean carpets are not only healthier to have, they are also a pleasure to walk on barefoot, and a fantastic way to relax after a long hard day at the office. ',
            	'read_more_link' => '/services',
            	'text_col_size' => 6
            ],
            [
            	'backgroundimage' => 'img/slider/slideshow-06.jpg', 
            	'iconimage' => 'img/CBRCleaning-logo-only.png',
            	'iconimage_position' => 6,
            	'iconimage_col_size' => 6,
            	'text_h1' => 'Industrial Cleaning',
            	'text_h2' => 'Those who operate commercial or industrial businesses in Miami understand the importance of using a professional industrial cleaning service. ',
            	'read_more_link' => '/services',
            	'text_col_size' => 6
            ],           
           
        ];

        DB::table('slides')->insert($slides);


    }
}


