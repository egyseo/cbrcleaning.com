<?php

namespace cbrcleaning;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
	protected $table = 'configurations';
    protected $fillable = [  
        'global_meta_title',
        'global_meta_keyword',
        'global_meta_description',
        'global_paypal_id',
        'global_paypal_api',
        'global_paypal_password',
        'submission_manager_email',
        'submission_manager_phone',
        'submission_email_cc',
        'submission_email_bc',
        'newsletter_sender_from_name',
        'newsletter_sender_from_address',
        'newsletter_sender_reply_to_name',
        'newsletter_sender_reply_to_address',
        'newsletter_sender_bounce_adress',
        'newsletter_mail_queue_email_quantity',
        'newsletter_mail_queue_email_time',
        'newsletter_mail_queue_email_max_try_send',
        'newsletter_mail_queue_email_max_try_fail_action',
        'company_fullname',
        'company_shortname',
        'company_address',
        'company_EIN',
        'company_sunbizzurl',
        'company_logo_image',
        'company_logo_square',
        'company_logo_icon',
        'company_mission_content',
        'company_mission_icon',
        'company_mission_intro',
        'company_vision_content',
        'company_vision_icon',
        'company_vision_intro',
        'company_overview_content',
        'company_overview_icon',
        'company_overview_intro',
        'company_about',
        'company_biographies_content',
        'company_biographies_icon',
        'company_biographies_intro',  
        'powered_company_name',
        'powered_website_url',
        'powered_project_url',
        'powered_admin_name',
        'powered_admin_phone',
        'powered_admin_mail',       
        'blog_columns',
        'blog_leading_articles',
        'blog_links_articles'
    ];
}
