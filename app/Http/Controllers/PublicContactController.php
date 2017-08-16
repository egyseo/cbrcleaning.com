<?php

namespace cbrcleaning\Http\Controllers;

use cbrcleaning\Http\Requests;
use cbrcleaning\Http\Requests\ContactFormRequest;
use cbrcleaning\Contact;
use cbrcleaning\Configuration;
use cbrcleaning\Social;
use GeoIP;
use SMS;
use OpenGraph;
use TwitterSEO;
use SEOMeta;
use Mapper;

class PublicContactController extends Controller
{	
    public function create()
    {
    	$configuration = Configuration::find(1); 
        $metaKeywords = (array)$configuration->global_meta_keyword;

        SEOMeta::addKeyword($metaKeywords);
        SEOMeta::setTitle($configuration->global_meta_title . ' | Contact Form');
        SEOMeta::setDescription($configuration->global_meta_description);
        SEOMeta::setCanonical($configuration->global_canonical);

        OpenGraph::addProperty('locale', 'en_GB');
        OpenGraph::setDescription($configuration->global_meta_description);
        OpenGraph::setTitle($configuration->global_meta_title); 
        OpenGraph::addImage($configuration->company_logo_image);  
        OpenGraph::setUrl($configuration->global_canonical); 

        TwitterSEO::setTitle($configuration->global_meta_title);
        TwitterSEO::setSite($configuration->global_twitter_user);
        TwitterSEO::addImage($configuration->company_logo_image); 

        $socials = Social::all(); 

        Mapper::map(26.007765,-80.29625550000003, [
        	'zoom' => 10, 
        	'markers' => [
        		'title' => 'CBR Cleaning Solutions Corp', 
        		'animation' => 'DROP'], 
        		'clusters' => [
        			'size' => 10, 
        			'center' => true, 
        			'zoom' => 20
        		]
        	]
        );

     	return view('frontend.contact')->withConfiguration($configuration)->withSocials($socials);
    }
    

    public function store(ContactFormRequest $request)
    {   
    	$configuration = Configuration::find(1); 

 		$ip = $request->ip();
    	$localization = geoip()->getLocation($ip);
    	$messagecustomer = 'Hi! '. $request->get('name') . ', thank you for Contact US';
       
   
    	$contact = new Contact;

        $contact->email = $request->name;
        $contact->message = $request->message;
        $contact->phone = $request->phone;
        $contact->country = $localization['country'];
        $contact->ip = $ip;
        $contact->city = $localization['city'];
        $contact->state = $localization['state'];
        $contact->lat = $localization['lat'];
        $contact->lon = $localization['lon'];
        $contact->postal_code = $localization['postal_code'];
        
        $contact->save(); 
    	//Enviando mensaje al Administrador
    	 \Mail::send('mails.contact-form-html-notif',
	         [
	         	'name' => $request->get('name'),
	         	'phone' => $request->get('phone'), 
	         	'email' => $request->get('email'), 
	         	'user_message' => $request->get('message'), 
	         	'country' => $localization['country'],
	         	'city' => $localization['city'],
	         	'state' => $localization['state'],
	         	'lat' => $localization['lat'],
	         	'lon' => $localization['lon'],
	         	'postal_code' => $localization['postal_code'],
	         ], 
	        function($message)
	   	 	{
	         	$message->from('info@nissienterprise.com', 'CBR Cleaning Solutions');
	    		$message->to('mrodriguez@nissienterprise.com', 'Michael Rodriguez')
	    				->bcc('maritza.ramirez0924@gmail.com', 'Maritza Castillo')	    				
	    				->subject('CBR Cleaning Solutions - Website Alert');
	    	}
	    );

    	//Enviando Email al cliente
	    \Mail::send('mails.contact-form-html-thank',
	        [
	        	'name' => $request->get('name'),
	        	'phone' => $request->get('phone'), 
	        	'email' => $request->get('email'), 
	        	'user_message' => $request->get('message'), 
	        	'country' => $localization['country'],
	        	'city' => $localization['city'],
	        	'state' => $localization['state'],
	        	'lat' => $localization['lat'],
	        	'lon' => $localization['lon'],
	        	'postal_code' => $localization['postal_code'],
	        ], 
	        function($message) use ($request)
	   		{
	        	$message->from('info@nissienterprise.com', 'CBR Cleaning Solutions');
	        	$message->to($request->get('email'), $request->get('name'))->subject('CBR Cleaning Solutions - Thank you for Contact Us!');
	        	$message->replyTo('info@cbrcleaning.com');
	    	}
	    );

	    // Enviando mensaje al Administrador
    	\Mail::send('sms.contact-form-sms-notif',
	        [
	        	'name' => $request->get('name'),
	        	'projectmanager' => 'Maritza Ramirez',
	        	'phone' => $request->get('phone'), 
	        	'email' => $request->get('email'), 
	        	'user_message' => $request->get('message'), 
	        	'country' => $localization['country'],
	        	'city' => $localization['city'],
	        	'state' => $localization['state'],
	        	'lat' => $localization['lat'],
	        	'lon' => $localization['lon'],
	        	'postal_code' => $localization['postal_code'],
	        ], 
	        function($message)
	   		{
	        	$message->from('info@nissienterprise.com', 'CBR Cleaning Solutions');
	        	$message->to('7863550502@mms.att.net' , 'Michael Rodriguez')->bcc('7863509949@mms.att.net' , 'Michael Rodriguez')->subject('CBR Alert');	        	
	    	}
	    ); 

    	//Envaindo SMS al Administrador
  		//SMS::send('Hi David!, ' . $request->get('name') . ' contact you through your website and leave this msg: ' . $request->get('message') , null, function($sms) {
		//    $sms->to('+17863466914','metropcs');
		//    $sms->to('+17863550502','att');
		//});


		//SMS::send('For more information about this Message, check your email', null, function($sms) {
		//    $sms->to('+17863466914','metropcs');
		//    $sms->to('+17863550502','att');
		//});
	  	return \Redirect::route('/about/contact')->with('message', $messagecustomer);

    }

}