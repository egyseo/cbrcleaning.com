@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('title','404 Page not found')

@section('seo')
	{!! SEO::generate(true) !!}
@endsection


@section('main-content-page')
	<section id="error" class="container text-center">
        <h1>404, Page not found</h1>
        <p>The Page you are looking for doesn't exist or an other error occurred.</p>
        <a class="btn btn-primary" href="/">GO BACK TO THE HOMEPAGE</a>
    </section>
	@include('frontend.partial.home.bottom')
@endsection

