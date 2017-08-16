@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
 	<section id="blog" class="container">
        <div class="center wow fadeInDown">
			<h2>Pressure Cleaning</h2>
			<p class="lead">Pressure Washing services are the best way to maintain your largest investments.</p>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                       	<img class="img-responsive img-blog" src="/img/services/service-pressure-cleaning.png" width="100%" alt="Pressure Cleaning Services" />
                        <div class="row"> 
                            <div class="col-xs-12 col-sm-12 blog-content">
                            	<div class="wow fadeInDown">
									<p>Dirt, grime, mildew, and algae build up over time and leave your home, driveway, sidewalks, patios and decks unsightly. Maintaining your  business with regular pressure washing can greatly increase the longevity of your property. Our fully insured / skilled technicians come prepared with the very best in professional equipment and products to tackle any of your power and pressure washing needs.</p>
									
									<h3>House Washing</h3>

									<p>Dirty Siding? A low pressure, high intensity “soft” house washing service will maintain and restore your home’s look. House washing services are recommended every (2) years to keep built up dirt and grime from burrowing into your property. We use the highest quality home-safe chemicals and a clean house washing that will last. All Work is Guaranteed and you can feel safe knowing a trusted and fully insured technician is at your home making your house sparkle again!</p>

									<p>Aside from improving curb appeal, regular house washing keeps your siding in healthy condition. The build-up of dirt, mold and grime can cause irreversible staining or worse. Using low pressure and home-safe cleaning products, our proven house wash process will effectively and affordably remove the build-up from the exterior of your home.</p>									 

									<p>Why hire a professional? Many DIY enthusiasts will strip and dent their homes and decks this year with rental equipment in an attempt to go it alone and save money. CBR technicians are fully trained and equipped with the appropriate machines required for every job and every stain. Too much pressure causes damage, and too little pressure just makes everything wet, doing little to remove stains and dirt. Hiring a professional for your pressure washing service ensures a safe, thorough clean surface every time.</p>

									<h3>Concrete Cleaning</h3>

									<p>Concrete cleaning is as much protection and maintenance as aesthetic. Pressure washing concrete removes built up dirt and salt deposits from weathering and general use over time. Once cleaned, your concrete will hold its look for months, turning heads around the neighborhood. Our flat surface pressure washing professionals specialize in driveway cleaning, pressure washing concrete in patios, pool-sides, sidewalks, and stamped concrete.</p>

									<p>Concrete cleaning by CBR Cleaning Solutions uses equipment specifically designed to quickly and evenly clean concrete and brick surfaces. Make dramatic improvements to the appearance of your driveway and sidewalk.  Although fairly maintenance free, concrete driveways and concrete sidewalks still can become very dirty and discolored. They are also severely affected by salt and snow, acid rain, moisture and high temperatures.</p>

									<p>With equipment specifically designed to quickly and evenly clean concrete and brick surfaces, CBR Cleaning Solutions concrete cleaning service can make dramatic improvements to the appearance of your concrete driveway and concrete sidewalk. With our unique, lifetime concrete sealers which penetrate your existing concrete, you can protect it from the damaging elements and form a barrier that keeps even oil from penetrating. CBR Cleaning Solution’s concrete cleaning service and concrete sealing is the answer to your dirty concrete needs.</p>

									<h3>Concrete Sealing</h3>

									<p>Concrete Sealing by CBR Cleaning Solutions uses equipment specifically designed to quickly and evenly seal various concrete surfaces. Even though they are fairly maintenance free, concrete driveways and concrete sidewalks still can become very dirty and discolored. They are also severely affected by salt and snow, acid rain, moisture and high temperatures. Professional concrete sealing service can make dramatic improvements to the appearance of your concrete driveway and concrete sidewalk. With our unique, lifetime concrete sealers which penetrate your existing concrete, you can protect it from the damaging elements and form a barrier that keeps even oil from penetrating. CBR Cleaning Solution’s concrete cleaning service and concrete sealing is the answer to your dirty concrete needs.</p>							
							
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
