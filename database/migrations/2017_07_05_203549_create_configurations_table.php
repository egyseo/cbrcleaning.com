<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('global_site_offline')->default(false); 
            $table->boolean('global_menu_show_icons')->default(false); 
            $table->string('global_meta_title'); 
            $table->string('global_canonical'); 
            $table->string('global_meta_keyword'); 
            $table->longtext('global_meta_description'); 
            $table->string('global_paypal_id'); 
            $table->string('global_paypal_api'); 
            $table->string('global_paypal_password'); 
            $table->string('global_twitter_user');

            //Submission Module
            $table->string('submission_manager_email'); 
            $table->string('submission_manager_phone'); 
            $table->string('submission_email_cc'); 
            $table->string('submission_email_bc'); 
            //Newsletter Module
            $table->string('newsletter_sender_from_name'); 
            $table->string('newsletter_sender_from_address'); 
            $table->string('newsletter_sender_reply_to_name'); 
            $table->string('newsletter_sender_reply_to_address'); 
            $table->string('newsletter_sender_bounce_adress'); 
            $table->string('newsletter_mail_queue_email_quantity'); 
            $table->string('newsletter_mail_queue_email_time'); 
            $table->string('newsletter_mail_queue_email_max_try_send'); 
            $table->string('newsletter_mail_queue_email_max_try_fail_action'); 
            
            //Company
            $table->string('company_fullname'); 
            $table->string('company_shortname'); 
            $table->string('company_address');
            $table->string('company_phone'); 
            $table->string('company_EIN')->unique(); 
            $table->string('company_Manager');
            $table->string('company_phone_gtw');
            $table->string('company_sunbizzurl'); 
            $table->string('company_logo_image'); 
            $table->string('company_logo_square'); 
            $table->string('company_logo_icon'); 
            $table->longtext('company_mission_content'); 
            $table->string('company_mission_icon'); 
            $table->longtext('company_mission_intro'); 
            $table->longtext('company_vision_content');
            $table->string('company_vision_icon');
            $table->longtext('company_vision_intro');
            $table->longtext('company_overview_content');
            $table->string('company_overview_icon');
            $table->longtext('company_overview_intro');
            $table->longtext('company_about');
            $table->longtext('company_biographies_content');
            $table->string('company_biographies_icon');
            $table->longtext('company_biographies_intro');    

            //Author
            $table->string('powered_company_name');
            $table->string('powered_website_url');
            $table->string('powered_project_url');
            $table->string('powered_admin_name');
            $table->string('powered_admin_phone');
            $table->string('powered_admin_mail');
            $table->string('powered_admin_phone_gtw');


            //Blog Configuration            
            $table->integer('blog_columns'); 
            $table->integer('blog_leading_articles'); 
            $table->integer('blog_links_articles'); 
            
            $table->boolean('state')->default(true); 

            $table->timestamps(); 
             
        });     
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('configurations');
    }
}
