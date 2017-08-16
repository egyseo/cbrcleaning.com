<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companyConfig = [
            [
	            'global_meta_title' => 'CBR Cleaning Solutions Corp',
		        'global_meta_keyword' => 'cleaning services, janitoria services, commercial cleaning, office cleaning, Miami maids, house cleaning, maid service Miami, Miami commercial cleaners, apartment cleaning Miami',
		        'global_meta_description' => 'We pride ourselves in our detailed cleaning skills, professionalism and strive to exceed our customrs expectations. We have established our business on core values such as integrit, loyalty and doihg What is right.',
		        'global_paypal_id' => 'XXX',
		        'global_paypal_api' => 'XXX',
		        'global_paypal_password' => 'XXX',
		        'global_canonical' => 'http://www.cbrcleaning.com',
		        'global_twitter_user' => '@cbrcleaning',
		        //Submission Module
		        'submission_manager_email' => 'info@cbrcleaning.com',
		        'submission_manager_phone' => '7863486660',
		        'submission_email_cc' => 'maritza.ramirez0924@gmail.com',
		        'submission_email_bc' => 'hugo.ramirez0001@gmail.com',
		        //Newsletter Module
		        'newsletter_sender_from_name' => 'CBR Cleaning Solutions Inc',
		        'newsletter_sender_from_address' => 'info@cbrcleaning.com',
		        'newsletter_sender_reply_to_name' => 'CBR Cleaning',
		        'newsletter_sender_reply_to_address'  => 'info@cbrcleaning.com',
		        'newsletter_sender_bounce_adress' => 'XXXXXXX',
		        'newsletter_mail_queue_email_quantity' => 'XXXXXXX',
		        'newsletter_mail_queue_email_time' => 'XXXXXXX',
		        'newsletter_mail_queue_email_max_try_send' => 'XXXXXXX',
		        'newsletter_mail_queue_email_max_try_fail_action' => 'XXXXXXX',
		        //Company
		        'company_fullname' => 'CBR Cleaning Solutions Inc.',
		        'company_shortname' => 'CBR Cleaning',
		        'company_address' => '420 Northwest 101 St Terrace, Pembroke Pines, FL 33026',
		        'company_phone' => '17862638401',
		        'company_phone_gtw' => '17862638401',
		        'company_EIN' => 'P16000098840',
		        'company_Manager' => 'Martiza Castillo',
		        'company_sunbizzurl' => 'http://florida-sunbiz.com/CBR-CLEANING-SOLUTIONS-CORP',
		        'company_logo_image' => 'img/logo-cbr.png',
		        'company_logo_square' => 'img/logo-cbr.png',
		        'company_logo_icon' => 'img/CBRCleaning.ico',
		        'company_mission_content' => '<p>We are a company dedicated to Cleaning Solution&#39;s implementation in Fort Lauderdale, Miami, Dade, Broward and the surrounding Palm Beach Counties of Florida; Our  purpose is to provide a high quality personalized service, aimed at all  industrial and residential sectors, making use of our seal of quality  with a highly qualified staff.</p>',
		        'company_mission_icon' => 'img/incons-mission.png',
		        'company_mission_intro' => 'CBR Cleaning Solutions is a company dedicated to Hight Quality Cleaning Solutions implementation in Fort Lauderdale, Miami, Dade, Broward and the surrounding Palm Beach Counties.',
		        'company_vision_content' => '<p>We  will be a company with better infrastructure, better staff organization  and better capacity to serve more customer in other Florida&#39;s Counties.</p>',
		        'company_vision_icon' => 'img/incons-vision.png',
		        'company_vision_intro' => 'We  will be a company with better infrastructure, better staff organization  and better capacity to serve more customer in other Florida&#39;s Counties.',
		        'company_overview_content' => '<p>Serving business facilities of all sizes, shapes and types around Fort Lauderdale, Miami, Dade, Broward and the surrounding Palm Beach Counties, first-rate commercial cleaning services are known by a single name: CBR Cleaning Solutions.</p>',
		        'company_overview_icon' => 'img/incons-overview.png',
		        'company_overview_intro' => 'We are a leader in water damage clean up, professional carpet cleaning, air duct cleaning, as well as tile & grout cleaning.',
		        'company_about' => '<p>We pride ourselves in our detailed cleaning skills, professionalism and strive to exceed our customrs&#39; expectations. We have established our business on core values such as integrit, loyalty and doihg What is right.  We offer flexible schedules and customized cleaning plans always having our customer&#39;s interest as our top priority. CBR cleaning follows manufacturer&#39;s guidelines to ensure that our customers office investments have a long lasting life. Time is money, that is why we are a team committed to a philosophy Just-in-time, try to seize every moment of service time to provide quality service.</p>',
		        'company_biographies_content' => '<p>CBR  Cleaning was born as a family business in 2001 under the direction of  the Castillo Family, since then CBR Cleaning Solutions has created a  good reputation with their customers, leaving the Quality Seal in each  service. All CBR Cleaning Staff has the CBR  Quality Certification, this certification allows our staff to provide a  quality service that overcome with the quality standards of the market.</p>',
		        'company_biographies_icon' => 'img/incons-bio.png',
		        'company_biographies_intro' => 'CBR  Cleaning was born as a family business in 2001 under the direction of Castillo Family',

		        //Author
		        'powered_company_name' => 'Nissi Technology Enterprises Inc.',
		        'powered_website_url' => 'http://www.nissienterprise.com/',
		        'powered_project_url' => 'http://www.nissienterprise.com/projects/websites/cbrcleaning/',
		        'powered_admin_name'  => 'Michael Rodriguez', 
		        'powered_admin_phone' => '7863550502',
		        'powered_admin_phone_gtw' => '7863550502@mms.att.net',
		        'powered_admin_mail' => 'mrodriguez@nissienterprise.com', 

		        
		        //Blog Configuration            
		        'blog_columns' => 2,
		        'blog_leading_articles' => 2,
		        'blog_links_articles' => 2,
            ],
            
        ];

        DB::table('configurations')->insert($companyConfig);


    }
}





            
          