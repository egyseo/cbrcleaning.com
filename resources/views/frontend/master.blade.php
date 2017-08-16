<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        @section('seo')

        @show  
        <meta name="author" content="{{ $configuration->powered_company_name}}">   
        {!! Html::style('css/corlate.bootstrap.min.css') !!}
        {!! Html::style('css/font-awesome.css') !!}
        {!! Html::style('css/corlate.animate.min.css') !!}
        {!! Html::style('css/corlate.prettyPhoto.css') !!}
        {!! Html::style('css/corlate.main.css') !!}
        {!! Html::style('css/corlate.responsive.css') !!}
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]--> 
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png')}}"> 
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png')}}">
        <link rel="manifest" href="{{ asset('img/favicon/manifest.json')}}">
        <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('img/favicon/favicon.ico')}}">
        <meta name="msapplication-config" content="{{ asset('img/favicon/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body class="homepage"> 
        <header id="header">
            @include('frontend.partial.topbar', compact(['configuration' => $configuration, 'socials' => $socials]))
            @include('frontend.partial.navbar', compact($configuration))		
        </header>       
        @section('main-content-page')       

        
        @show        
        <footer id="footer" class="midnight-blue">
            @include('frontend.partial.footer', compact($configuration))   
        </footer>       
        {!! Html::script('js/corlate.jquery.js') !!}
        {!! Html::script('js/corlate.bootstrap.min.js') !!}
        {!! Html::script('js/corlate.jquery.prettyPhoto.js') !!}
        {!! Html::script('js/corlate.jquery.isotope.min.js') !!}
        {!! Html::script('js/corlate.main.js') !!}
        {!! Html::script('js/corlate.wow.min.js') !!}       
    </body>
</html>