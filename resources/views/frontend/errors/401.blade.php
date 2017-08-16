@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('title','401 Unauthorized Access')

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')
	<section id="error" class="container text-center">
        <h1>401, Unauthorized access</h1>
        <p>You are not authorized to enter this section of the website, contact the Administrator for more information</p>
        <a class="btn btn-primary" href="/">HOME</a>
    </section>
	@include('frontend.partial.home.bottom')
@endsection

