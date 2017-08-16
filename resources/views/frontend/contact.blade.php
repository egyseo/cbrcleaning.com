@extends('frontend.master', compact(['configuration' => $configuration, 'socials' => $socials])) 

@section('seo')
    {!! SEO::generate(true) !!}
@endsection

@section('main-content-page')	
    {{-- <section id="contact-info">
        <div class="center">                
            <h2>How to Reach Us?</h2>
            <p class="lead">You can contact us immediately through this contact form</p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                             {!! Mapper::render() !!}
                        </div>
                    </div>
                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h2>Head Office</h2>
                                    <p>Pembroke Pines, FL</p>                                 
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Contact Us</h2>               
            </div> 
            <div>
                <img class="img-responsive img-blog" src="/img/banner_contactus.png" alt="Contact Us" width="100%"/> 
            </div>
            <div class="row contact-wrap">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
                @if(Session::has('message'))
                <div class="status alert alert-success" style="display: none">
                {{Session::get('message')}}
                </div>
                @endif  
                
                {!! Form::open(['route' => '/about/contact_store', 'class' => 'form', 'id' => 'main-contact-form', 'name' => 'contact-form']) !!}
                    <div class="form-group">
                        {!! Form::label('Name') !!}                         
                        {!! Form::text('name', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your name', 'type'=>'text']) !!}                        
                    </div>
                    <div class="form-group">
                        {!! Form::label('Phone') !!}                          
                        {!! Form::text('phone', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your phone', 'type'=>'text']) !!}                      
                    </div>
                    <div class="form-group">
                        {!! Form::label('E-mail') !!}                         
                        {!! Form::text('email', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your e-mail address', 'type'=>'text']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Message') !!}                         
                        {!! Form::textarea('message', null, ['required', 'class'=>'form-control', 'placeholder'=>'Your message', 'type'=>'text']) !!} 
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Contact Us!', ['class'=>'btn btn-primary btn-lg']) !!}
                    </div>
                    <div class="form-group">
                        {!! app('captcha')->render(); !!}
                    </div>                      
                {!! Form::close() !!}
            </div>
        </div>
    </section>
	@include('frontend.partial.home.bottom')
@endsection