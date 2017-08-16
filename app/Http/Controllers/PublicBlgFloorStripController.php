<?php

namespace cbrcleaning\Http\Controllers;
use cbrcleaning\Http\Requests;
use cbrcleaning\Configuration;
use cbrcleaning\Social;
use Illuminate\Http\Request;
use OpenGraph;
use TwitterSEO;
use SEOMeta;

class PublicBlgFloorStripController extends Controller
{

    public function index()
    {
        $configuration = Configuration::find(1);         
        $metaKeywords = explode(',', (string)$configuration->global_meta_keyword);
       
        OpenGraph::addProperty('locale', 'en_GB');
		TwitterSEO::addImage($configuration->company_logo_image); 
        SEOMeta::addKeyword($metaKeywords);

        SEOMeta::setTitle($configuration->global_meta_title);
        SEOMeta::setDescription($configuration->global_meta_description);
        SEOMeta::setCanonical($configuration->global_canonical);

        OpenGraph::setDescription($configuration->global_meta_description);
        OpenGraph::setTitle($configuration->global_meta_title); 
        OpenGraph::addImage($configuration->company_logo_image);  
        OpenGraph::setUrl($configuration->global_canonical); 

        TwitterSEO::setTitle($configuration->global_meta_title);
        TwitterSEO::setSite($configuration->global_twitter_user);    

        $socials = Social::all();        

        return view('frontend.blog-floor-stripping')->withSocials($socials)->withConfiguration($configuration);
    }
}