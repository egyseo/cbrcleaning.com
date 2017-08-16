@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
 	<section id="blog" class="container">
        <div class="center wow fadeInDown">
			<h2>Building Maintenace</h2>
			<p class="lead">Building maintenance is an important aspect of successful Florida businesses. Whether an office building, church, hotel, industrial or manufacturing warehouse, you will derive many benefits from using a professional commercial cleaning.</p>
		</div>
        <div class="blog">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-item">
                       	<img class="img-responsive img-blog" src="/img/services/service-building-maintenance.png" width="100%" alt="Building Maintenance" />
                        <div class="row"> 
                            <div class="col-xs-12 col-sm-12 blog-content">
                            	<div class="wow fadeInDown">
									<p>Building maintenance services differ from those for residential homes and structures, as it is often a necessity and not a luxury. Businesses simply cannot function if floors and windows and dirty, offices are unkempt, and restrooms are unsanitary. By choosing CBR Cleaning Solutions you can ensure that your business remains in a manner that is sanitary and healthy.</p>

									<h3>Commercial And Building Maintenance Is Crucial To The Success Of Any Business</h3>

									<p>Florida companies must ensure that buildings are clean for employees and customers. If a building facility is overrun with mold, mildew, bacteria, and viruses, the results may be costly. Not only will employers lose productivity as customers are unable to perform duties due to illnesses, but patrons will stop utilizing the building’s services. Miami-Dade code along with the Environmental Protection Agency determines various rules and regulations for building operations. Many of these codes pertain to health and sanitation. A business that fails to comply with established guidelines will face penalties and possibly be forced to shut down. The best way to ensure the success and longevity of your business is to choose CBR Cleaning Solutions Corp.</p>

									<p>There is a growing move to use green products when cleaning rather than using harsh chemicals. The cleaning supplies used are often a joint decision by the client and cleaning company and consist of products that are EPA approved. Most offices require general cleaning and do not need the use of powerful, toxic chemicals. General office cleaning consists of tasks such as emptying trash, dusting, vacuuming, and ensuring rooms are free from debris. Floors are often vacuumed, washed, and waxed and glass fixtures are polished. Windows are cleaned according to their design, location, and style and restrooms are thoroughly cleaned, sanitized, and deodorized. Restocking items is another function often accomplished by cleaning companies. Some services may include grounds management and facility cleaning, as well as recycling programs. One of the most popular trends in building maintenance is to implement green strategies that will reduce the carbon footprint.</p>

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
