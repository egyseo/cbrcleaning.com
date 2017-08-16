<nav class="navbar navbar-inverse" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url($configuration->company_logo_image) }}" alt="{{ $configuration->company_shortname }}"></a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>                
                
                <li class="dropdown">
                    <a href="{{ url('/services') }}" class="dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('services/building-maintenance') }}">Building Maintenance</a></li> 
                        <li><a href="{{ url('services/carpet-cleaning') }}">Carpet Cleaning</a></li>    
                        <li><a href="{{ url('services/industrial-cleaning') }}">Industrial Cleaning</a> </li>
                        <li><a href="{{ url('services/church-cleaning') }}">Church Cleaning</a> </li>
                        <li><a href="{{ url('services/janitorial-services') }}">Janitorial Services</a> </li>
                        <li><a href="{{ url('services/office-cleaning') }}">Office Cleaning</a> </li>
                        <li><a href="{{ url('services/post-construction-cleaning') }}">Post Construction</a> </li>  
                        <li><a href="{{ url('services/pressure-cleaning') }}">Pressure Cleaning</a> </li>             
                    </ul>                   
                </li>            

                {{--  <li><a href="{{ url('/portfolio') }}">Portfolio</a></li> --}}
                <li><a href="{{ url('/blog') }}">Blog</a></li>               

                <li class="dropdown">
                    <a href="{{ url('/about') }}" class="dropdown-toggle" data-toggle="dropdown">About Us <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('about/overview') }}">Overview</a></li> 
                        <li><a href="{{ url('about/faq') }}">F.A.Q.</a></li>    
                        <li><a href="{{ url('about/contact') }}">Contact</a> </li>                 
                    </ul>                   
                </li>                 
            </ul>
        </div>
    </div>
</nav>