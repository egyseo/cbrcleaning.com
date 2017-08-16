@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')

	@include('frontend.partial.home.slider', compact($slides))

	@include('frontend.partial.home.features', compact($values))

	@include('frontend.partial.home.recent-work', compact($works))

	@include('frontend.partial.home.services', compact($services))

	@include('frontend.partial.home.middle-content', compact(['prefers' => $prefers, 'skills' => $skills]))

	@include('frontend.partial.home.content', compact($configuration))

	@include('frontend.partial.home.partner', compact($partners))

	@include('frontend.partial.home.contact')

	@include('frontend.partial.home.bottom')

@endsection

