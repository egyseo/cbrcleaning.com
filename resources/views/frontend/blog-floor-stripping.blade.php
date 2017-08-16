@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
    {!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
	<section id="blog" class="container">
		<div class="center">
			<h2>Summertime House Cleaning Tips</h2>
			<p class="lead">Students will soon be anxiously exiting schools for summer vacation, and the floors will certainly exhibit the wear and tear of a busy academic year. </p>			
		</div>
		<div class="blog">
			<div class="row">
				<div class="col-md-12">
					<div class="blog-item">
						<img class="img-responsive img-blog" src="/img/blog/blog-intro-floor-strip.png" width="100%" alt="Summertime House Cleaning Tips" />
						<div class="row">  
							<div class="col-xs-12 col-sm-2 text-center">
								<div class="entry-meta">
									<span id="publish_date">07  NOV</span>
									<span><i class="fa fa-user"></i> <a href="#"> Maritza Castillo</a></span>									
									<span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-10 blog-content">
								
								<p>Once the kiddos are on break, it is a great time to strip, wax and buff the flooring to retrieve its shining luster!</p>

								<p>Floor stippingOver time, wax builds-up on vinyl tile and linoleum resulting in a dull, lifeless appearance, with yellowing and other discolorations marring its original beauty. Combine that with heavy traffic of children, faculty and staff shuffling between classes and lockers, and campus floors can take a real beating. To resolve this ugly problem, administrators at schools across Florida hire the commercial  floor-stripping experts at Millennium Commercial Cleaning Services.</p>

								<p>Millennium uses green cleaning products to protect students, faculty, staff members, and the environment, to safely remove wax build-up that has occurred over months, or even years.</p>

								<p>The process includes a number of labor-intensive steps to achieve the desired result. A commercial-strength, green stripping agent is applied in sections of the floor liberally to begin wax removal. Once the floor is covered, scrubbed and rinsed clean, it is dried completely before a new coat of wax is applied. A final buffing will enhance the shine, and voila! School floors are once again beautiful and ready for the hustle and bustle of a new school year, and students and teachers are met with a glowing first impression to inspire them to put their best foot forward!</p>

								<p>Maintain the beauty, life, and integrity of school flooring by hiring us.</p>						
							</div>
						</div>
					</div>  
				</div>		
			</div>
		</div>
	</section>
	@include('frontend.partial.home.bottom')
@endsection