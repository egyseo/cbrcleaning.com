 <section id="main-slider"class="no-margin">
    <div id="slideshow" class="carousel slide">
        <ol class="carousel-indicators">
           
            @foreach($slides as $slide)

                @if($loop->first)         
                    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                @else
                    <li data-target="#slideshow" data-slide-to="{{ (int)$slide->iconimage_position - 1 }}"></li>
                @endif                       
            @endforeach    

        </ol>
        <div class="carousel-inner">
            @foreach($slides as $slide)
                @if($loop->first)
            <div class="item active" style="background-image: url({{$slide->backgroundimage}})">
                @else
            <div class="item" style="background-image: url({{$slide->backgroundimage}})">
                @endif
                <div class="container">
                    <div class="row slide-margin">
                    {{--  If the text position is normal --}}
                    @if((boolean)$slide->textpositionleft)                    
                        <div class="col-sm-{{ $slide->text_col_size }}">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">{{ $slide->text_h1 }}</h1>
                                <h2 class="animation animated-item-2">{{ $slide->text_h2 }}</h2>
                                <a class="btn-slide animation animated-item-3" href="{{ $slide->read_more_link }}">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-{{ $slide->iconimage_col_size }} hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{ $slide->iconimage }}" class="img-responsive">
                            </div>
                        </div>                    
                    @else
                        {{--  If the text position is inverted --}}
                        <div class="col-sm-{{ $slide->iconimage_col_size }} hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="{{ $slide->iconimage }}" class="img-responsive">
                            </div>
                        </div> 
                        <div class="col-sm-{{ $slide->text_col_size }}">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1">{{ $slide->text_h1 }}</h1>
                                <h2 class="animation animated-item-2">{{ $slide->text_h2 }}</h2>
                                <a class="btn-slide animation animated-item-3" href="{{ $slide->read_more_link }}">Read More</a>
                            </div>
                        </div>
                    @endif
                    </div>
                </div>
            </div>
            @endforeach  

        </div>
    </div>
    <a class="prev hidden-xs" href="#slideshow" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#slideshow" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section>
