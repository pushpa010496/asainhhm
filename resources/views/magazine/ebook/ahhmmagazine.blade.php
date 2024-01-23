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

  <link rel="stylesheet" href="{{ config('app.url') }}mix/app.css">



  {{-- <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">

  <link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">

  --}}

  {{-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css"> --}}

  <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css">



  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 



  <!-- <link rel="stylesheet" href="{{ config('app.url') }}css/animate.css"> -->

  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"> -->

  <!-- Page Level Css -->

<style type="text/css">

/*@media (max-width: 575.98px) {.card-columns {column-count: 1;} }*/



@media (min-width: 1200px) {.card-columns {column-count: 6;} }

@media (min-width: 380px) and (max-width: 572px) {.card-columns {column-count: 2;} }

@media (min-width: 576px) and (max-width: 767.98px) {.card-columns {column-count: 3;} }

@media (min-width: 768px) and (max-width: 991.98px) {.card-columns {column-count: 4;} }

@media (min-width: 992px) and (max-width: 1199px) {.card-columns {column-count: 6;} }



  </style>

  

  <!-- End Page Level Css -->

  

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

   'hitCallback': function(){window.open(url,'_blank')}

 });

}

</script> 





<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-TRDG59J');</script>

<!-- End Google Tag Manager -->



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

</head>



<body>  

  <!-- Google Tag Manager (noscript) -->

  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRDG59J"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->



    <div class="clearfix"></div>



      <div class="container-fluid">



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-12 col-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">e-Book</h1>            

                </div>

                 <p>Asian Hospital & Healthcare Management healthcare e-books, healthcare industry e-books provide you the feel of magazine in the digital format</p>                 

              </div>

            



               <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

                <div class="card-columns">

                  @foreach($ebook as $book)

                  <div class="BookList mb-2">

                    <div class="card shadow">

                      <a   id="show_confirm" data-toggle="modal" href="#" data-target="#modal_confirm" data-id ="{{ Str::slug($book->issue->id) }}" data-eid ="{{ $book->id }}" data-title ="{{ $book->issue->issue_no }}" data-script ="{{ $book->ebook_script }}">

                        <img src="{{ config('app.url').'ebooks/'. Str::slug($book->issue->issue_no).'/'.$book->magazine_image }} " alt="{{ $book->issue->issue_no}}" title="{{ $book->issue->issue_no}}" width="100%">

                        <div class="card-body p-0">

                          <h3 class="card-title bg-dark text-white pl-3 pr-2 pt-2 pb-2 m-0">{{ $book->issue->issue_no}}</h3>

                          <div class="card-text pt-2 pb-3 pr-1">

                            <ul>

                              @if($book->topic_1)<li>{{ $book->topic_1 }}</li>@endif                               

                              @if($book->topic_2)<li>{{ $book->topic_2 }}</li>@endif

                              @if($book->topic_3)<li>{{ $book->topic_3 }}</li>@endif

                              @if($book->topic_4)<li>{{ $book->topic_4 }}</li>@endif

                              @if($book->topic_5)<li>{{ $book->topic_5 }}</li>@endif 

                            </ul>

                          </div>

                        </div>

                      </a>

                    </div>

                  </div>

                  @endforeach                

                </div>

              </div>

               

            </div>

        



           

        </div>

      </div>

    



{{-- Popup --}}

<div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="modal_confirm" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="modal_confirm">{{ old('title') }}</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <form action="{{ route('ebook.post') }}" method="post" target="_blank" accept-charset="utf-8">

          {{ csrf_field() }} 

       <!--    @if ($errors->any())

          <ul>

            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>

            @endforeach

          </ul>      

          @endif      -->  

          <div class="help-block with-errors"></div>

          <div class="input-group">

            <input type="email" name="email" class="form-control" placeholder="Enter your email id to access magazine..." id="inputEmail" data-error="Bruh, that email address is invalid" required >  

            

            <input type="hidden" value="{{ old('title') }}" name="title">

            <input type="hidden" value="{{ old('ebook_id') }}" name="ebook_id">

            <input type="hidden" value="{{ old('issue_id') }}" name="issue_id">

            <input type="hidden" value="{{ old('ebook_script') }}" name="ebook_script">

            <input type="hidden" value="ebook" name="page">

            

            <span class="input-group-btn">

              <button class="btn btn-danger" type="submit" name="submit">Submit</button>

            </span>

          </div><!-- /input-group -->

          <span class="help-block">{{ $errors->first('email', ':message') }}</span>

        </form>

      </div>

    </div>

  </div>

</div>



{{-- End popup --}}





 









    <!-- // Go to top -->

    <a onclick="topFunction()" id="go-top" title="Go to top"><i class="fa fa-chevron-up"></i></a>

    <!-- Scripts -->

    <script src="{{ config('app.url') }}mix/app.js"></script>



    {{--   <script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>

    <script src="{{ config('app.url') }}js/popper.min.js" ></script>

    <script src="{{ config('app.url') }}js/bootstrap.min.js" ></script> --}}

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--End Scripts -->    

    <!--Custom Scripts -->

    <script>

   



    jQuery(document).ready(function($){

      setTimeout(function(){

        if (sessionStorage.getItem('advertOnce') !== 'true') {

          $('#myModalpopup').modal({backdrop: 'static', keyboard: false}); 

          sessionStorage.setItem('advertOnce','true');

        }

      },3000);



    });



  </script>



 <script>

  @if($errors->any())      

      $(document).ready(function(){ 

        $('#modal_confirm').modal('show');   

      });                  

  @endif



$(function () {

  $('body').on('hidden.bs.modal', '.modal', function () {

    $(this).removeData('bs.modal');

  });

});

var $url_path = '{!! url('/') !!}';



$('body').on('click','#show_confirm', function (event) {



  var ebook_id = $(this).data("eid");

  var issue_id = $(this).data("id");

  var script = $(this).data("script");

  

  var action = "{{ url('archives-magazine') }}" +'/' + ebook_id;

  $('.modal-title').text($(this).data("title"));

  // $("form").attr('action',action);

  $("[name=title]").val($(this).data("title"));

  $("[name=issue_id]").val(issue_id);

  $("[name=ebook_id]").val(ebook_id); 

  $("[name=ebook_script]").val(script);   



});

</script>

  <!-- Page Scripts -->



<!--End Page Scripts -->



</body>

</html>    



















