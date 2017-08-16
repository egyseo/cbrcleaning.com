<section id="recent-works">         
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Recent Works</h2>
            <p class="lead">Our recent work testifies to the quality of our services, we are a company with the seal of quality in each of our work carried out.</p>
        </div>
        <div class="row">
            @foreach($works as $work) 
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{ $work->urlimagemini }}" alt="{{ $work->name }}">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h2 style="color: white;">{{ $work->name }}</h2>
                            <p>{{ $work->introcontent }}</p>
                           {{--  <a class="preview" href="/services" rel="prettyPhoto">
                                <i class="fa fa-eye"></i> View
                            </a> --}}
                        </div> 
                    </div>
                </div>
            </div>  
            @endforeach  
        </div>
    </div>
</section> 