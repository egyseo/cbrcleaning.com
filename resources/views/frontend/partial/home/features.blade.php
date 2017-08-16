<section id="feature" >  
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Values</h2>
            <p class="lead">Our company is based on Moral and Christian principles that are the seal of quality of our services.</p>
        </div>
        <div class="row">
            <div class="features">
                @foreach($values as $value)
                <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <div class="feature-wrap">
                        <i class="{{ $value->icon }}"></i>
                        <h2>{{ $value->name }}</h2>
                        <h3>{{ $value->content }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
