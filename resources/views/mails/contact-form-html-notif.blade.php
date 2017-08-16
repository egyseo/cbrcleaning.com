<div style="align: center">
    <a href="http://www.cbrcleaning.com" title="CBR Cleaning Solutions Corp">
        <img src="http://www.cbrcleaning.com/img/logo-cbr.png" alt="CBR Cleaning Solutions Corp" />
    </a>
</div>
<hr/>
<h2>You have a message from your website</h2>
<p><b>Name:</b> {{ $name }}</p> 
<p><b>Phone Number:</b> {{ $phone }}</p>
<p><b>Email Address:</b> {{ $email }}</p>
<p><b>Message:</b> {{ $user_message }}</p> 
<p><b>Location:</b> {{ $city }}, {{ $state }}, {{ $postal_code }}, {{ $country }}</p>
<p><b>Exact Maps Location:</b> <a href="http://maps.google.com/?q={{ $lat }},{{ $lon }}">http://maps.google.com/?q={{ $lat }},{{ $lon }}</a></p>

 