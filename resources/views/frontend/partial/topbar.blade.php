<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-4">
                <div class="top-number">
                    <a href="tel:+{{ $configuration->company_phone}}">
                        <p><i class="fa fa-phone-square"></i>+1-786-263-8401</p>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-xs-8">
                <div class="social">                   
                    <ul class="social-share">
                        @foreach($socials as $social)
                        <li><a href="{{ $social->url}}"><i class="{{ $social->icon}}"></i></a></li>
                        @endforeach
                    </ul>                 
                  
                    {{-- <div class="search">
                        <form role="form">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                            <i class="fa fa-search"></i>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>



