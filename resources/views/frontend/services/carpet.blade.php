@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
 	<section id="blog" class="container">
        <div class="center wow fadeInDown">
			<h2>Carpet Cleanig Services</h2>
			<p class="lead">Clean carpets are not only healthier to have, they are also a pleasure to walk on barefoot, and a fantastic way to relax after a long hard day at the office. So don’t you agree that you need the best professional teams taking care of your luxurious carpet?</p>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                       	<img class="img-responsive img-blog" src="/img/services/service-carpet.png" width="100%" alt="Carpet Cleaning" />
                        <div class="row"> 
                            <div class="col-xs-12 col-sm-12 blog-content">
                            	<div class="wow fadeInDown">
									<p>CBR Cleaning Solutions Corp provides the best Carpet Sleaning services in Miami, Broward &amp; Palm Beach Counties</p>
									<ul>
									    <li>Specific treatment for each type of carpet and fabric</li>
									    <li>All types of carpet cleaned – hearth rugs, oriental rugs, living room carpets, etc</li>
									    <li>Both domestic and commercial residential carpet cleaning performed</li>
									    <li>Your satisfaction – and clean, healthy carpets – are guaranteed</li>
									    <li>Safe and Non-Toxic materials used to clean your carpets</li>
									</ul>									
									<h3>Why do I need a professional team to clean my carpet?</h3>

									<p>Carpet cleaning in Miami, Florida, no matter what type, needs to be done by professionals. An experienced team knows exactly what sort of cleaning solutions to use, what is the most effective treatment for each stain and blotch, and how to make sure that the carpet stays in the best possible condition in the Miami and Fort Lauderdale climate. If cleaned with the wrong solutions, or cleaned improperly, the carpet may not only stay dirty, but also become permanently damaged, which is why professional assistance is required.</p>									
									<h3>What makes CBR Cleaning Solutions the Best Choice when it comes to carpet cleaners?</h3>

									<p>At CBR Cleaning Solutions, we make sure to train our team of experts to be able to deal with each and every situation they might come across, no matter what type of dirt, or what type of carpet. Our teams in Miami use the best carpet cleaning solutions and are familiar with all the techniques necessary to not only get your carpet clean and healthy, restoring it to it’s former state, but also how to maintain the carpet and make sure that it remains undamaged by the carpet cleaning process.</p>
									
									<h3>CBR Cleaning provide you with the best possible customer service</h3>

									<p>We pride ourselves on the excellent customer service we provide all our clients in the Miami and Fort Lauderdale area, and we always strive to not only meet, but even exceed, our customers’ expectations. With CBR, our clients in Miami, can be sure that if a spot or a stain should return to their carpet, so will we. Not only do we put our expert carpet cleaning team at your disposal, but if your carpet is damaged by the restoration process, we will fix or replace it free of charge.</p>

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
