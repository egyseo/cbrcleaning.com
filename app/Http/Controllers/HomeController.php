<?php

namespace cbrcleaning\Http\Controllers;

use cbrcleaning\Http\Requests;
use cbrcleaning\Slide;
use cbrcleaning\Configuration;
use cbrcleaning\Service;
use cbrcleaning\Social;
use cbrcleaning\Prefer;
use cbrcleaning\Skill;
use cbrcleaning\Work;
use cbrcleaning\Value;
use cbrcleaning\Partner;
use Illuminate\Http\Request;
use OpenGraph;
use TwitterSEO;
use SEOMeta;

class HomeController extends Controller
{

    public function index()
    {      
        $configuration = Configuration::find(1);         
        $metaKeywords = explode(',', (string)$configuration->global_meta_keyword);             
		
        SEOMeta::addKeyword($metaKeywords);
        SEOMeta::setTitle($configuration->global_meta_title . ' | Cleanig Company in Miami');
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
        
        $slides = Slide::all();   
        $services = Service::all();
        $works = Work::all();
        $partners = Partner::all();
        $socials = Social::all();
        $prefers = Prefer::all();
        $values = Value::all();  
        $skills = Skill::all();    

        return view('frontend.index')->withSlides($slides)->withServices($services)->withWorks($works)->withPartners($partners)->withSocials($socials)
                                    ->withPrefers($prefers)->withConfiguration($configuration)->withSkills($skills)->withValues($values);
    }
}