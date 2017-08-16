@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('title','500 Internal Server Error')

@section('seo')
	{!! SEO::generate(true) !!}
@endsection


@section('main-content-page')
	<section id="error" class="container text-center">
        <h1>500, Internal Server Error</h1>
        <p>The server encountered an unexpected condition which prevented it from fulfilling the request.</p>
        <a class="btn btn-primary" href="/">GO BACK TO THE HOMEPAGE</a>
    </section>
	@include('frontend.partial.home.bottom')
@endsection

