@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
	{!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
    <section id="about-us">
        <div class="container">
			<div class="center wow fadeInDown">
				<h2>Frequently Asked Questions</h2>
				<p class="lead">intro..</p>
			</div>
			<div class="wow fadeInDown">	
						
			<div class="accordion">
          		<h2>Why do our customers prefer CBR Cleaning?</h2>
          		<div class="panel-group" id="accord">
            	@foreach($faqs as $faq) 
            	<div class="panel panel-default">
              		<div class="panel-heading @if($loop->first) active  @endif">
                		<h3 class="panel-title">
                  			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accord" href="#colla{{ $faq->id }}">
                     		{{ $faq->question }}
                    		<i class="fa fa-angle-right pull-right"></i>
                  			</a>
                		</h3>
              		</div>

		            <div id="colla{{ $faq->id }}" class="panel-collapse collapse @if($loop->first) in @endif">
		                <div class="panel-body">                                      
		                 {{ $faq->answer }}
		                </div>
		            </div>
            	</div>
            @endforeach  
        </div>
      </div>	
			</div>
		</div>
    </section>
	@include('frontend.partial.home.bottom')
@endsection
