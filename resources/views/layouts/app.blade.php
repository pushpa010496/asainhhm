<!doctype html>

<html lang="{{ app()->getLocale() }}">

<head>

  {{-- <title>{{ config('app.name') }}</title> --}}

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="{{config('app.url') }}images/favicon.ico" type="image/x-icon">

  <meta name="robots" content="index, follow"/>

  <!-- LUMEN -->

   {!! app('seotools')->generate() !!} 

  <!-- Bootstrap CSS --> 
 

  @yield('style')

  <!-- End Page Level Css -->


<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TRDG59J');</script>
<!-- End Google Tag Manager -->


<script>
/**
* Function that tracks a click on an outbound link in Analytics.
* This function takes a valid URL string as an argument, and uses that URL string
* as the event label. Setting the transport method to 'beacon' lets the hit be sent
* using 'navigator.sendBeacon' in browser that support it.
*/
var trackOutboundLink = function(url) {
 ga('send', 'event', 'outbound', 'click', url, {
 'transport': 'beacon',
 'hitCallback': function(){  
  window.open(url, '_blank');}
 });
}
</script>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', '  GTM-TRDG59J  ', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRDG59J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<script type="application/ld+json">

  {

    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Asianhhm",
    "url" : "https://www.asianhhm.com/",
    "sameAs" : [
    " https://www.facebook.com/AsianHospitalandHealthcareManagement ",
    " https://twitter.com/asianhhm ",
    " https://plus.google.com/+AsianhhmSecunderabad/about ",
    " https://www.linkedin.com/groups?home=&gid=6750651&trk=anet_ug_hm ",
    " https://www.tumblr.com/blog/asianhhm "

    ]

  }

</script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P7HK0R3Y29"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-P7HK0R3Y29');
</script>

<!--new sites style-->
<link type="text/css" rel="stylesheet" href="{{ config('app.url') }}css/bootstrap-css/new-bootstrap.min.css">

<link href="https://fonts.googleapis.com/css2?family=Lustria&family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" as="font" type="font/woff2" crossorigin>
    <link type="text/css" rel="stylesheet" href="{{ config('app.url') }}css/ahhm-skin.css">
    <link type="text/css" rel="stylesheet" href="{{ config('app.url') }}css/navbar.css">    
  <link rel="stylesheet" type="text/css" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> -->

    <style>

.disc{

  list-style-type:disc !important;
 
}
.chitti{
  font-weight: normal !important;
}
/* for mobile responsive  */
.dropdown:hover .dropdown-menu{
  display:inline-block !important;"
}
</style>



    <!-- <link type="text/css" rel="stylesheet" href="{{ config('app.url') }}css/bootstrap-css/bootstrap.min.css"> -->
   
<!--new sites style-->

<!-- Google tag (gtag.js) -->
<!-- Bootstrap CSS -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</head>

<body>  



<!-- Google Tag Manager (noscript) -->
<!-- End Google Tag Manager (noscript) -->
    <!-- header -->
    @if (request()->is('mediapacks') || request()->is('advertise'))
    @include('layouts.partials.header-mediapack-advertise')
@else
    @include('layouts.partials._header1')
@endif 


    <!-- end header -->

    <!-- Body starts -->

    @yield('content')

    <!-- End Body -->


    @include('layouts.partials._advertisepopup')

    <!--  Footer -->

    @include('layouts.partials._footer')

    <!-- End Footer -->

    <!-- Advertise -->


    <!-- End Advertise -->

   

    @yield('scripts') 

<!--End Page Scripts -->



<!--new site scripts-->

  <!--jQuery Slim version (without AJAX)-->
    <script src="{{ config('app.url') }}js/jquery.js"></script>
 <script src="https://industry.asianhhm.com/js/popper.min.js"></script>
    <!-- Bootstrap JS -->    
    <script src="{{ config('app.url') }}js/bootstrap-js/bootstrap.bundle.js"></script>
    <script src="{{ config('app.url') }}js/ahhm-js.js"></script>
    <script src="{{ config('app.url') }}js/navbar.js"></script>
    <script src="https://www.asianhhm.com/promotions/public/styles/js/bootstrap-4.min.js"></script>
<script src="{{ config('app.url') }}js/bootstrap.min.js"></script>


<!--new site scripts-->




</body>



</html>    

