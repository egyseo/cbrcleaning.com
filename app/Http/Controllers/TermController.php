<?php

namespace cbrcleaning\Http\Controllers;

use Illuminate\Http\Request;
use cbrcleaning\Configuration;
use cbrcleaning\Social;
use OpenGraph;
use TwitterSEO;
use SEOMeta;

class TermController extends Controller
{
	public function index()
	{
		$configuration = Configuration::find(1); 
        $metaKeywords = (array)$configuration->global_meta_keyword;
       
        OpenGraph::addProperty('locale', 'en_GB');
		TwitterSEO::addImage($configuration->company_logo_image); 
        SEOMeta::addKeyword([$metaKeywords);

        SEOMeta::setTitle($configuration->global_meta_title);
        SEOMeta::setDescription($configuration->global_meta_description);
        SEOMeta::setCanonical($configuration->global_canonical);
        SEOMeta::addMeta('noindex,nofollow', 'robots');

        OpenGraph::setDescription($configuration->global_meta_description);
        OpenGraph::setTitle($configuration->global_meta_title); 
        OpenGraph::addImage($configuration->company_logo_image);  
        OpenGraph::setUrl($configuration->global_canonical); 

        Twitter::setTitle($configuration->global_meta_title);
        Twitter::setSite($configuration->global_twitter_user);

        $socials = Social::all();  
       
    	return view('frontend.terms')->withSocials($socials)->withConfiguration($configuration);
    }
}