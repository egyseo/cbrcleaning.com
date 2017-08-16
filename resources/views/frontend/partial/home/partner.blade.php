<section id="partner">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Customer</h2>
            <p class="lead">Customer who prefer to work with CBR Cleaning to whom we thank them for their business relationship with us.</p>
        </div>   
        <div class="partners">
            <ul>
                @foreach($partners as $partner) 
                <li> 
                    <a href="/">
                        <img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{ $partner->image }}">
                    </a>
                </li> 
                @endforeach                
            </ul>
        </div>        
    </div>
</section>