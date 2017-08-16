@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
 	<section id="blog" class="container">
        <div class="center wow fadeInDown">
			<h2>Church Cleaning </h2>
			<p class="lead">At CBR Cleaning Solutions Corp, we know how important your place of worship is to your community. This is why we offer our religious facility and church cleaning service, a specialized cleaning program for places of worship just like yours..</p>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                       	<img class="img-responsive img-blog" src="/img/services/service-church.png" width="100%" alt="Church Cleaning Services" />
                        <div class="row"> 
                            <div class="col-xs-12 col-sm-12 blog-content">
                            	<div class="wow fadeInDown">
									<p>CBR Cleaning Solution is the most trusted professional cleaning company, offering religious facility and church cleaning services not just across America, but across the globe. Below, we’ve listed what sets us apart when it comes to religious facility and church cleaning.</p>

									<h3>Our Religious Facility &amp; Church Cleaning Focus</h3>

									<p>When it comes to religious facility and church cleaning, the best cleaning providers focus on the things that make religious facilities unique. At CBR Cleaning, that not only means creating a cleaning service built for the unique spaces of churches and other religious facilities, it also means developing cleaning protocols that respect your space.</p>

									<h3>Some of the areas our religious facility and church cleaning services focus on include:</h3>

									<ul>
									   	<li><b>Large Event Cleaning.</b> As a communal space, your place of worship regularly plays host to large events. Our team is always on hand when you need help cleaning up after these occasions.</li>
									   	<li><b>Healthier Cleaning Practices.</b>  Hundreds or even thousands of people come through your doors every week. CBR Cleaning services help ensure they enter a safe and healthy space.</li>
									   	<li><b>A Respectful Approach.</b> CBR Cleaning will happily follow any special directions or requests that you have for the respectful treatment of your facility.</li>
									   	<li><b>Flexible Scheduling.</b> We know that your facility operates on a different schedule than a 9-to-5 business, and we’re happy to accommodate your cleaning services to reflect this.</li>
									</ul>
									<h3>Our Religious Facility &amp; Church Cleaning Services</h3>

									<p>When you choose religious facility or church cleaning from your local CBR Cleaning, your place of worship will benefit in a number of ways. Here are just a few of the services you’ll benefit from our religious facility and church cleaning program:</p>

									<ul>
									   	<li><b>EnviroShield Disinfection.</b>This non-irritating, non-toxic, no-residue system safely eliminates germs from anywhere they’re found in your place of worship — from bathrooms to pews to door handles.</li>
									    <li><b>Floor Cleaning Services.</b> Our cleaners have the skills and equipment to tackle any kind of floor cleaning.</li>
									    <li><b>Greener Cleaning.</b> At CBR Cleaning, we offer green cleaning certification to interested facilities.</li>
									</ul>
									<h4>For more information <a href="{{ url('about/contact') }}">Contact Us</a></h4>										
								</div>
                             </div>
                        </div>
                    </div>
                </div>
                <aside class="col-md-4">
                	<div class="widget categories">
                        <h3>Services</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                @include('frontend.partial.asidemenu')
                            </div>
                        </div>                     
                    </div>
                </aside>
            </div>
        </div>
    </section>
	@include('frontend.partial.home.bottom')
@endsection
