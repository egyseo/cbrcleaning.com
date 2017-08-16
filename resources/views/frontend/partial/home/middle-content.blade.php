<section id="middle">
  <div class="container">
    <div class="row">    
      <div class="col-sm-6 wow fadeInDown">
        <div class="skill">
          <h2>Our Skills</h2>
          <p>Our company makes available to our customers all our skills as a cleaning company with high quality standards</p>          
          @foreach($skills as $skill)    
          <div class="progress-wrap">
            <h3>{{ $skill->name }}</h3>
            <div class="progress">
              <div class="progress-bar color1" role="progressbar" aria-valuenow="{{ $skill->value }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill->value }}%">
                <span class="bar-width">{{ $skill->value }}%</span>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="col-sm-6 wow fadeInDown">
        <div class="accordion">
          <h2>Why do our customers prefer CBR Cleaning?</h2>
          <div class="panel-group" id="accord">
            @foreach($prefers as $prefer) 
            <div class="panel panel-default">
              <div class="panel-heading @if($loop->first) active  @endif">
                <h3 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accord" href="#colla{{ $prefer->id }}">
                     {{ $prefer->title }}
                    <i class="fa fa-angle-right pull-right"></i>
                  </a>
                </h3>
              </div>

              <div id="colla{{ $prefer->id }}" class="panel-collapse collapse @if($loop->first) in @endif">
                <div class="panel-body">                                      
                 {{ $prefer->content }}
                </div>
              </div>
            </div>
            @endforeach  
        </div>
      </div>
    </div>
  </div>
</section>

