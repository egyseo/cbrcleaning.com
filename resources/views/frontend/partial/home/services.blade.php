<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Services</h2>
            <p class="lead">We provide integral services guarantee the satisfaction and the seal of quality to our customer.</p>
        </div>
        <div class="row">            
            @foreach($services as $service)
            <div class="col-sm-6 col-md-4">
                <div class="media services-wrap wow fadeInDown">
                    <div class="pull-left">
                        <img class="img-responsive" src="{{ $service->icon }}">
                    </div>
                    <div class="media-body">
                        <h3 class="media-heading">{{ $service->name }}</h3>
                        {!! $service->content_intro !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>