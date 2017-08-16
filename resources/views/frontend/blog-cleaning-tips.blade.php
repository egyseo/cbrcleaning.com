@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
    {!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
	<section id="blog" class="container">
		<div class="center">
			<div class="center">
				<h2>Summertime House Cleaning Tips</h2>
				<p class="lead">If you live in a warm weather climate like I do, house cleaning is probably near the bottom of your to-do list. Simply getting out of your car can cause you to break a sweat, and summertime house cleaning after a long day at the office or running errands is something we tend to put off once we are able to relax for the day. </p>
			</div>			
		</div>
		<div class="blog">
			<div class="row">
				<div class="col-md-12">
					<div class="blog-item">
						<img class="img-responsive img-blog" src="/img/blog/blog-intro-summertime-house-cleaning-tips.png" alt="Summertime House Cleaning Tips" width="100%"  />
						<div class="row">  
							<div class="col-xs-12 col-sm-2 text-center">
								<div class="entry-meta">
									<span id="publish_date">07  NOV</span>
									<span><i class="fa fa-user"></i> <a href="#"> Maritza Castillo</a></span>									
									<span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
								</div>
							</div>
							<div class="col-xs-12 col-sm-10 blog-content">								
								<p>That being said. summertime house cleaning still is a necessity just as it is any other time of the year. Today I will provide you with some tips to make summertime house cleaning a little easier and less time-consuming.</p>
								<ol>
									<li><b>Quickly clean your outside grill.</b> These is nothing quite like an outside summer barbecue with friends and family. It’s practically a tradition to start summer with one; but oftentimes our grill will need cleaned after months of inactivity. To simply clean your grill, first fire up the grill to warm the grates. After warm, use an old fashioned wire brush to scrub the grates clean of debris then after cooled wash the grates with a mild detergent and warm water. Warm grates are much easier to clean than cold ones. Obviously we want the grates Luke-warm, not hot, so allow the grates to cool before cleaning. In the meantime, dump out any old ashes and clean the inside and exterior of your grill with warm water and a mild detergent. Allow time to air dry, insert the now clean grates and you will be enjoying a delicious meal in no time!l</li>

									<li><b>Divide and conquer.</b> I live in Orlando, Fl; house cleaning is often something that is too much to be completed in one session in the Summer due to the heat (especially for larger homes). For that reason I like to break down my cleaning sessions over a week.On one day I may clean the bathrooms, on another the outside patio, and on another the kitchen. Having a cleaning schedule and sticking to it is key here, and the daily progress you are making will give you the momentum towards the next day and cleaning task. Also, enlist the help of family or roommates to help to get the job done in an even quicker amount of time.</li>

								<li><b>Clean outside and patio furniture.</b> Outside furniture can accumulate mold and grime if not cleaned regularly, and we often neglect to clean outside furniture if we are not using it. To prepare outside furniture for use during Summer.simply clean tables and hard surfaces with warm water and a mild detergent with a soft bristle brush; avoid abrasive cleansers and bleach as these may damage the furniture. Simply let air dry after cleaned. To clean cloth cushions. spot clean needed areas with a soft sponge and a mixture of warm water and dish washing detergent. After spots are removed rinse the areas with cold water and again let air dry. Your patio furniture is now ready for the season!</li>

								<li><b>Keep showers doors and curtains open, and keep a squeegee handy in each bathroom.</b> Mold can accumulate quickly in warmer, damp climates such as your shower over the summer. For this reason you will want to remove all excess water after taking a shower from tile walls and glass shower enclosures. Use a squeegee to rid the surfaces of any excess water. Also, keep shower curtains open, as this will allow the surfaces dry quicker and prevent less time for mold to accumulate. I also recommend using a shower spray on the walls after each shower to help further prevent mold from popping up. These sprays have become quite popular and can be found at any retail store.</li>

								<li><b>Place floor mats at all entryways.</b> It is almost a given there will be increased foot traffic into your home during summer, especially if you have kids out of school. For this very reason you will want to place floor mats inside and outside of each entryway into your home. You may also want to place a shoe basket by the front door, and encourage the kids to remove their shoes before entering the home. This will reduce wear on your flooring (regardless of type) and help stop dirt and dust from spreading into your home. An easy but very effective cleaning tip.</li>
								</ol>
								<p><b>Summer is meant to be enjoyed, not for house cleaning.</b> Hopefully using my cleaning tips, summertime house cleaning will be a breeze and you can spend more time outside and not inside cleaning your home! See you next week with more house cleaning tips.</p>						
							</div>
						</div>
					</div>  
				</div>		
			</div>
		</div>
	</section>
	@include('frontend.partial.home.bottom')
@endsection