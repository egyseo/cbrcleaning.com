@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
    {!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
    <section id="blog" class="container">
        <div class="center">
            <h2>Blog</h2>
            <p class="lead">In our blog you can find topics of great importance for the development of efficient cleaning and shrewd in your company</p>
        </div>
        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-2 text-center">
                                <div class="entry-meta">
                                    <span id="publish_date">July 21, 2017</span>
                                    <span><i class="fa fa-user"></i> <a href="#">Maritza Castillo</a></span>                                   
                                </div>
                            </div>                                
                            <div class="col-xs-12 col-sm-10 blog-content">
                                <a href="{{ url('/blog/cleaning-tips') }}">
                                    <img class="img-responsive img-blog" src="img/blog/blog-intro-summertime-house-cleaning-tips.png" width="100%" alt="Summertime House Cleaning Tips" />
                                </a>
                                <h2>
                                    <a href="{{ url('/blog/cleaning-tips') }}">Summertime House Cleaning Tips</a>
                                </h2>
                                <h3>If you live in a warm weather climate like I do, house cleaning is probably near the bottom of your to-do list. Simply getting out of your car can cause you to break a sweat, and summertime house cleaning after a long day at the office or running errands is something we tend to put off once we are able to relax for the day.</h3>
                                <a class="btn btn-primary readmore" href="{{ url('/blog/cleaning-tips') }}">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div>                        
                    
                    <div class="blog-item">
                        <div class="row">
                             <div class="col-sm-2 text-center">
                                <div class="entry-meta"> 
                                    <span id="publish_date">July 21, 2017</span>
                                    <span><i class="fa fa-user"></i> <a href="#">Maritza Castillo</a></span>                                    
                                </div>
                            </div>
                            <div class="col-sm-10 blog-content">
                                <a href="{{ url('/blog/floor-stripping') }}">
                                    <img class="img-responsive img-blog" src="img/blog/blog-intro-floor-strip.png" width="100%" alt="Floor Stripping Inspires Students and Teachers to put Their Best Foot Forward" /></a>
                                <h2>
                                    <a href="{{ url('/blog/floor-stripping') }}">Floor Stripping Inspires Students and Teachers to put Their Best Foot Forward</a>
                                </h2>
                                <h3>Students will soon be anxiously exiting schools for summer vacation, and the floors will certainly exhibit the wear and tear of a busy academic year. Once the kiddos are on break, it is a great time to strip, wax and buff the flooring to retrieve its shining luster!.</h3>
                                <a class="btn btn-primary readmore" href="{{ url('/blog/floor-stripping') }}">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>    
                    </div> 
                </div>
                {{--<aside class="col-md-4">
                    <div class="widget search">
                        <form role="form">
                                <input type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
                        </form>
                    </div>                    
                    <div class="widget categories">
                        <h3>Recent Comments</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_comments">
                                    <img src="img/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="img/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                    </div>
                                </div>
                                <div class="single_comments">
                                    <img src="img/blog/avatar3.png" alt=""  />
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
                                    <div class="entry-meta small muted">
                                        <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
                                    </div>
                                </div>                                
                            </div>
                        </div>                     
                    </div> 
                    <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computers <span class="badge">04</span></a></li>
                                    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                    <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                    <li><a href="#">Technology <span class="badge">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div>                    
                     <div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div>                    
                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                        </ul>
                    </div>   
                    <div class="widget blog_gallery">
                        <h3>Our Gallery</h3>
                        <ul class="sidebar-gallery">
                            <li><a href="#"><img src="img/blog/gallery1.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/blog/gallery2.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/blog/gallery3.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/blog/gallery4.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/blog/gallery5.png" alt="" /></a></li>
                            <li><a href="#"><img src="img/blog/gallery6.png" alt="" /></a></li>
                        </ul>
                    </div> 
                </aside>  --}}
            </div>
        </div>
    </section>
	@include('frontend.partial.home.bottom')
@endsection



