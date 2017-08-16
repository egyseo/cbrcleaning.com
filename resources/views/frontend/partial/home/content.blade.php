<section id="content">      
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-12 wow fadeInDown">
                <div class="tab-wrap"> 
                    <div class="media">
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class="active"><a href="#tab1" data-toggle="tab" class="analistic-01">Overview</a></li>
                                <li class=""><a href="#tab2" data-toggle="tab" class="analistic-02">Biography</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Mission</a></li>
                                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Vision</a></li>                              
                            </ul>
                        </div>
                        <div class="parrent media-body">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab1">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="img/icons-overviews.png">
                                        </div>
                                        <div class="media-body">
                                           <h2>Overview</h2>
                                           <p>{{$configuration->company_overview_intro}}</p>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="img/icons-bio.png">
                                        </div>
                                        <div class="media-body">
                                           <h2>Biography</h2>
                                           <p>{{$configuration->company_biographies_intro}}</p>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="img/icons-mission.png">
                                        </div>
                                        <div class="media-body">
                                           <h2>Mission</h2>
                                           <p>{{$configuration->company_mission_intro}}</p>
                                       </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="img/icons-vision.png">
                                        </div>
                                        <div class="media-body">
                                           <h2>Vision</h2>
                                           <p>{{$configuration->company_vision_intro}}</p>
                                       </div>
                                    </div>
                                </div>                               
                            </div>   
                        </div> 
                    </div>  
                </div>            
            </div>
            
        </div>
    </div>
</section >