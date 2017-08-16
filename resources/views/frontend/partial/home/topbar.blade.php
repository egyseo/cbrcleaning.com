<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-4">
                <div class="top-number"> 
                    <p><a href="tel:+{{ $configuration->company_phone }}"><i class="fa fa-phone-square"></i>+{{ $configuration->company_phone }}</p></a></div>
            </div>
            <div class="col-sm-6 col-xs-8">
                <div class="social">
                    <ul class="social-share">
                        @foreach($socialnetworks as $socialnetwork)
                        <li><a href="{{ $socialnetwork->url }}"><i class="{{ $socialnetwork->icon }}"></i></a></li>         
                        @endfor             
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
{{ $configuration->render() }}   
{{ $socialnetworks->render() }}   