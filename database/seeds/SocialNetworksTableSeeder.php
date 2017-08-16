<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SocialNetworksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socialnetworks = [
            [
            	'name' => 'Facebook',
            	'url' => 'http://www.facebook.com/cbrcleaning/',
            	'icon' => 'fa fa-facebook'
            ],
            [
            	'name' => 'Whatsapp',
            	'url' => 'intent://send/17863486660#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end',
            	'icon' => 'fa fa-whatsapp'
            ],
            [
            	'name' => 'Twitter',
            	'url' => 'https://twitter.com/cbrcleaning',
            	'icon' => 'fa fa-twitter'
            ],
            [
            	'name' => 'Skype',
            	'url' => 'http://skype:cbrcleaningsolutions?call',
            	'icon' => 'fa fa-skype'
            ],
            [
            	'name' => 'Google+',
            	'url' => 'https://plus.google.com/u/0/b/115481352992546367698/115481352992546367698',
            	'icon' => 'fa fa-google-plus'
            ],
            [
            	'name' => 'YouTube',
            	'url' => 'https://www.youtube.com/channel/UCTgb2d3-vBNq_nU1EtTloVA',
            	'icon' => 'fa fa-youtube'
            ],
            [
            	'name' => 'Pinterest',
            	'url' => 'https://www.pinterest.com/cbrcleaningnsolutions/',
            	'icon' => 'fa fa-pinterest'
            ],
            [
            	'name' => 'Instagram',
            	'url' => 'https://www.instagram.com/cbrcleaningsolutions/',
            	'icon' => 'fa fa-instagram'
            ],
            [
            	'name' => 'Linkedin',
            	'url' => 'https://www.linkedin.com/feed/',
            	'icon' => 'fa fa-linkedin'
            ]           
        ];

        DB::table('socialnetworks')->insert($socialnetworks);


    }
}


