@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>About US</h2>
				<p class="lead">We pride ourselves in our detailed cleaning skills, professionalism and strive to exceed our customrs' expectations. We have established our business on core values such as integrit, loyalty and doihg What is right. We offer flexible schedules and customized cleaning plans always having our customer's interest as our top priority. CBR cleaning follows manufacturer's guidelines to ensure that our customers office investments have a long lasting life. Time is money, that is why we are a team committed to a philosophy Just-in-time, try to seize every moment of service time to provide quality service</p>
			</div>
			<div class="wow fadeInDown">
				
				<h2>Mission</h2>
				<p>We are a company dedicated to Cleaning Solution's implementation in Miami-Dade and Broward counties of Florida; Our purpose is to provide a high quality personalized service, aimed at all industrial and residential sectors, making use of our seal of quality with a highly qualified staff.</p>
				<p>CBR Cleaning Solutions is a company dedicated to Hight Quality Cleaning Solutions implementation in Dade and Browared County.</p>
				<h2>Biographies</h2>
				<p>CBR Cleaning was born as a family business in 2001 under the direction of the Castillo Family, since then CBR Cleaning Solutions has created a good reputation with their customers, leaving the Quality Seal in each service. All CBR Cleaning Staff has the CBR Quality Certification, this certification allows our staff to provide a quality service that overcome with the quality standards of the market.</p>
				<h2>Vision</h2>
				<p>We will be a company with better infrastructure, better staff organization and better capacity to serve more customer in other Florida's Counties.</p>
				<h2>Ethic</h2>
				<p>All members of our staff are committed to the moral and ethical values of our company so we offer results with excellence</p>
				<h2>Quality Control</h2>
				<p>The quality of our services is of vital importance to our customers is why we have a team that is constantly surveying the work done</p>
				<h2>Satisfaction</h2>
				<p>The satisfaction of our customers is paramount, so our team puts their efforts into every detail of our services</p>
			</div>
		</div>
    </section>
	@include('frontend.partial.home.bottom')
@endsection



