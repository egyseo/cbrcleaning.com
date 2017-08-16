 <div class="container">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <p class="pull-left">CopyRight &copy; {{ date('Y') }} {{ $configuration->company_shortname }}<br>
                Powered by <a href="http://www.nissienterprise.com?utm_source=referalcbrcleaning" target="_parent" title="Nissi Technology Enterprise">Nissi Technology Enterprises Inc.</a></p>
        </div>
        <div class="col-sm-6 col-xs-12">
            <ul class="pull-right">
                <li><a href="{{ url('/component/sitemap') }}">Sitemp</a></li>
                <li><a href="{{ url('/component/privacypolicy') }}">Privacy Policy</a></li>
                <li><a href="{{ url('/component/terms') }}">Terms &amp; Conditions</a></li>
                <li><a href="{{ url('/about/faq') }}">FAQ</a></li>
                <li><a href="{{ url('/about/contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>