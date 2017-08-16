@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
 	<section id="blog" class="container">
        <div class="center wow fadeInDown">
			<h2>Janitorial Services</h2>
			<p class="lead">Keeping your building or office clean and making sure it is a healthy place to work is absolutely important to a productive and safe workplace.</p>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                       	<img class="img-responsive img-blog" src="/img/services/service-janitorial.jpg" width="100%" alt="Janitorial Cleaning" />
                        <div class="row"> 
                            <div class="col-xs-12 col-sm-12 blog-content">
                            	<div class="wow fadeInDown">
									<p>Whether you live, you need professional janitor services that can help to ensure your property remains clean and sanitary as often as possible. This can actually save your company money in the long run because it helps to result in a lower number of sick employees. If you’re looking for a Miami cleaning service, we are the best. We offer the most professional staff available to clean your auto body shop, fitness center, school, office space, retail store, or medical facility. With CBR Cleaning Solutions you’ll get the benefits of knowing your place of business is sanitary and spotless. Using a professional janitorial service means the job gets done right the first time, and you won’t have to worry about going back later to do any touch up work.</p>

									<p>When looking for cleaning services, you want to be sure you hire the service that will best and most thoroughly clean your facilities to your individual specifications. Not all janitor services are alike, so it is important to make sure the one you select does everything you need them to do. Janitor services generally include emptying all trash cans, shampooing carpets, cleaning hard wood floors, dusting and polishing furniture, vacuuming, spot cleaning any carpeting as needed, and much more. We also dust horizontal blinds and other window coverings, clean all glass windows and doors, thoroughly clean all kitchen areas as well as any kitchen appliances, dust air vents and ceiling fans, and clean and sanitize your restrooms. Our janitorial cleaning service staff is fully trained to the highest of standards, and has thorough experience in cleaning professional buildings. Each member of the staff is checked on a regular basis for quality assurance so you can be confident the job is done properly and thoroughly each and every time.</p>

									<p>For those working in the medical sector, rest assured that we follow all current rules and regulations for maintaining cleanliness in a safe and sanitary manner. We can operate during normal business hours if you desire, or our staff will come in later after business hours to perform all cleaning services. South Florida businesses need to be able to find a company that will work around their schedules. For a positive cleaning service experience, choose us for all of your needs. We work around your schedule and can come to clean each week, bi-weekly, or even daily or every other day, depending on the size and scope of what you need cleaned. Regardless of your individual preference and frequency, each time a cleaning of your facility is done, you will be pleased with the results of our cleaning services.</p>

									<h3> Maintaining A Building Can Be A Lot Of Work</h3>

									<p>When looking for a Professional Cleaning Services, there are many different options available and sometimes it can seem overwhelming. Make sure you do your research and choose only the service company that will properly do the job right the first time. Trained staff who understand the various codes of buildings is always helpful, and you want to be sure they understand the cleaning needs of your own company. Never settle for less when it comes to making sure that you and your employees have a safe, clean, and sanitary place to work. Choose the best janitorial cleaning service within the South Florida. Contact us for a free price quote today to get started, and you will be pleasantly surprised at our affordable prices, friendly staff, thorough work, and exceptional cleaning services. In South Florida, whether your business is large or small, we will be able to handle all of your cleaning service needs and no job is too ambitious or too small for us.</p>
									
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
