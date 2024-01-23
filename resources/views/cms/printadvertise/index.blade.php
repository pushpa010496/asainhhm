<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="language" content="english" /> 
    {!! app('seotools')->generate() !!}
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-91608244-1', 'auto');
   ga('send', 'pageview', { 
    'dimension1': '183.82.0.18' 
  }); 
  
</script>
 <!-- Bootstrap CSS -->
  <link rel="icon" type="image/png" href="{{url('images/favicon.ico')}}" />
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
  <link rel="stylesheet" href="{{ config('app.url') }}css/single-style.css">

	<style type="text/css">
	 	.sm-thumb{background-color:#f04e23; color: #fff; padding: 4px; border-radius: 3px;font-size: 13px;}
	 	.sm-twt	 {background-color:#1DA1F2; color: #fff; padding: 4px; border-radius: 3px;font-size: 13px;}
	 	.sm-lin  {background-color:#0077B5; color: #fff; padding: 4px; border-radius: 3px;font-size: 13px;}
	 	/*.panel{border-radius: 0px;}
	 	.page-header {
		    padding-bottom: 9px;
		    margin: 20px 0 20px;
		    border-bottom: none;
		}
	 	.panel-heading{padding: 0px;font-size: 18px;}
	 	.nav-tabs {margin-top: 0px;}
	 	.nav-tabs.nav-justified > li > a{border-radius: 0px;}
	 	.nav-justified > li > a, .nav-tabs.nav-justified > li > a {
		    margin-bottom: 0px;
		    text-align: center;
		}
		.nav-tabs > li > a{margin: 0px;}
		.tab-content{padding: 0px;border:0px;}
		.panel-default > .panel-heading {
		    color: #333;
		    background-color: #fff;
		    border-color: #fff;
		}*/
		.bg-blk-transp {background-color: rgba(0,0,0,0.6);}
    .carousel{border: 1px solid #ddd;}
		.carousel-indicators{ top: 5px;}
		.carousel-indicators li{border: 1px solid #F04E23;}
		.carousel-caption{margin-right: 30px;}
    .carousel-caption p{font-size: 14px;line-height: 130%;}
		/*.carousel-inner > .item{height: 394px;}*/
		/*.carousel{min-height: 394px;border:1px solid #ddd;}*/
    .carousel-indicators li {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin: 1px;
      text-indent: -999px;
      cursor: pointer;
      background-color: #000\9;
      background-color: rgba(0,0,0,0);
      border: 1px solid #F04E23;
      border-radius: 10px;
    }
    .carousel-indicators .active {
      width: 12px;
      height: 12px;
      margin: 0;
      background-color: #fff;
    }
    .carousel-caption {
        position: absolute;
        right: 6%;
        left: 6%;
        z-index: 10;
        /*bottom: 20px;
        padding-top: 20px;
        padding-bottom: 20px;*/
        color: #fff;
        margin-right: 0px;
    }


    .testimonial-title{
      position: absolute;
      top: 0;
      z-index: 9;
      background-color: #fff;
      padding: 10px 20px;
      -webkit-box-shadow: 1px 1px 5px 1px rgba(0,0,0,.1);
      box-shadow: 1px 1px 5px 1px rgba(0,0,0,.1);
      font-size: 15px;
    }
    .testimonial-title::after {
      content: '';
      position: absolute;
      right: -50px;
      top: 0;
      width: 0;
      height: 0;
      border-left: 0px solid transparent;
      border-right: 50px solid transparent;
      border-top: 38px solid #fff;
      clear: both;
      /*border-bottom: 64px solid transparent;*/
    }
    footer{
      margin-top:0 !important;
      background: #1f2634;
    }
    .font-20{font-size: 20px;}
    .font-18{font-size: 18px;}
    .font-16{font-size: 16px;}
    .form-control{border-radius: 0px;}
	</style>
  <style>
    .tabs {
      margin: 0 auto;
      /*max-width: 640px;*/
      /*padding: 0 20px;*/
    }
    #tab-button {
      display: table;
      table-layout: fixed;
      width: 100%;
      margin: 0;
      padding: 0;
      list-style: none;
    }
    #tab-button li {
      display: table-cell;
      width: 20%;
    }
    #tab-button li a {
      display: block;
      padding: .5em;
      background: #eee;
      border: 1px solid #ddd;
      text-align: center;
      color: #000;
      text-decoration: none;
    }
    #tab-button li:not(:first-child) a {
      border-left: none;
    }
   /* #tab-button li a:hover,*/
    #tab-button .is-active a {
      border-bottom-color: transparent;
      background: #fff;
    }
    .tab-contents {
      /*padding: .5em 2em 1em;*/
      border: 1px solid #ddd;
    }

    /*.tab-button-outer {
      display: none;
    }
    .tab-contents {
      margin-top: 20px;
    }*/
    @media screen and (min-width: 768px) {
      .tab-button-outer {
        position: relative;
        z-index: 2;
        display: block;
      }
      /*.tab-select-outer {
        display: none;
      }*/
      .tab-contents {
        position: relative;
        top: -1px;
        margin-top: 0;
      }
      .has-error .help-block{
        color: #f3f3f3;
        font-size: 12px;
      }
      .carousel-inner .img-fluid{
        max-height: 100%; width: auto;
      }
     /* .carousel-caption{position: relative;}*/
    }

    @media (max-width: 575.98px) {
     .carousel-item .img-fluid{
       max-width: auto !important;
       height: 100% !important;
      }
    }
  </style>

<!--AS per Basco& sudhakar Canonical -->
<link rel="canonical" href="{{url()->current()}}" />

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

<!--AS per Basco& sudhakar Schema code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1603651466522663'); 
    fbq('track', 'PageView');
  </script>
  <noscript>
   <img height="1" width="1" src="https://www.facebook.com/tr?id=1603651466522663&ev=PageView&noscript=1"/>
 </noscript>
 <!-- End Facebook Pixel Code -->

</head>
  



<body>
  <!-- Akilesh requirement Starts Here  -->
  <!-- Google Code for Pharma Print ads(form button) Conversion Page -->
  <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 878187201;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "-e5GCLXB4GoQwaXgogM";
    var google_remarketing_only = false;
    /* ]]> */
  </script>

  <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
  <noscript>
    <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="googleadservices" src="//www.googleadservices.com/pagead/conversion/878187201/?label=-e5GCLXB4GoQwaXgogM&amp;guid=ON&amp;script=0"/>
    </div>
  </noscript>
  <!-- End of Akilesh requirement  -->

  <!-- // Phase-1 -->
  <div class="container-fluid hero-header">
  	<div class="row">
      <header class="large">
        <nav>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" align="center">
            <img src="{{ config('app.url') }}images/logo.png" class="img-fluid logo" alt="{{ trans('messages.sitename') }}" title="{{ trans('messages.sitename') }}">
          </div> 

          <div class="col-lg-8 col-md-8 hidden-sm hidden-xs"> </div>
        </nav>
      </header>
    </div>

    <div class="row mt-5 pt-4">

      <div class="container-fluid">
        <!-- Start: Header -->
        <div class="row">
          <div class="p-2"></div>

          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-xs-12 pl-0 mt-4">                
                <div class="row">
                  <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 p-0 pt-3" align="center">
                      <!--  <a data-toggle="modal" href="#myModal1"> -->
                      <img src="{{config('app.url')}}images/print-ads-magazines.png" alt="e-Book" class="img-fluid mb-2">
                  </div>

                  <div class="col-lg-7 col-xs-12 pt-3">
                    <h1 class="text-danger mt-1 font-20"><b>Quarterly Magazine for Hospitals and Healthcare Professionals</b></h1>    
                    <p class="PF-TXTBlk000">Asian Hospital & Healthcare Management, the leading B2B healthcare publication in Print and Digital media is focused on catering with the latest trends and technological advancements in Healthcare and Hospital management sector. </p> 
                    
                    <h2 class="mt-1 PF-TXTBlk000 font-18"><em>"Unification of all knowledge makes for a well-rounded society. We are AHHM and we are poised for it."</em></h2>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-xs-12 form-bg mt-3">
                <div class="p-3">
                  <h2 class="TXT-wyt pb-2 PF-M0 text-center font-20 font-weight-bold">Print Advertising Options</h2>
                  <form role='form' action="{{route('printads.post')}}" method="post" accept-charset="utf-8" class="email" id="writemessage">  
                    {{ csrf_field() }}
                    <div class="row"> 
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('fullname', 'has-error')}}">
                        <input class="form-control" id="fullname" name="fullname" placeholder="Full Name *" required="" type="text">
                        <input value="printadvertising-advertising" name="type" id="type" type="hidden">
                        <input type="hidden" name="lead" value="Lead Genrated from Landing Page..." />
                        <input type="hidden" name="formname" value="ec" />
                        <span class="help-block">{{ $errors->first('fullname', ':message') }}</span>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('email', 'has-error')}}">
                        <input class="form-control" id="email" name="email" placeholder="Email *" required="" type="email">
                        <span class="help-block">{{ $errors->first('email', ':message') }}</span>                        
                      </div>
                    </div>                    
                    
                    <div class="row"> 
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('telephone', 'has-error')}}">
                        <input class="form-control" id="telephone" name="telephone" placeholder="Telephone *" required="" type="tel">
                        <span class="help-block">{{ $errors->first('telephone', ':message') }}</span>                        
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 {{ $errors->first('company', 'has-error')}}">
                        <input class="form-control" id="company" name="company" placeholder="Company *" required="" type="text">
                        <input type="hidden" name="lead" value="Lead Generated from Landing Page..." />
                        <span class="help-block">{{ $errors->first('company', ':message') }}</span>
                      </div>
                    </div>

                    <div class="row"> 
                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 {{ $errors->first('description', 'has-error')}}">
                        <textarea class="form-control" type="textarea" id="message" name="description" placeholder="Message" maxlength="140" rows="1"></textarea>
                        <span class="help-block">{{ $errors->first('description', ':message') }}</span>
                      </div>

                      <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center mb-1">
                        <button onclick="goog_report_conversion ({{route('printads')}})" href="{{route('printads')}}" type="submit" id="sbtbtn" class="btn btn-sm btn-success">SUBMIT </button> 
                        <div class="clearfix"></div>
                      </div>

                      <div class="form-group mb-0 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                        <p class="small TXT-wyt mb-0">**We will under no circumstances would sell or share your contact details with any organisation Gov. or Private</p>
                      </div>                  
                    </div>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="p-2"></div>       
          </div>

        </div>
        <!-- End: Header -->
        
        <div class="pb-4"></div>
      </div>      
      
    </div>
  </div>

  <!-- Phase-1 // -->



  	<!-- // Start: Circulation -->
  	<div class="container-fluid bg-img">
      <div class="circulation pt-3">
   	    <div class="row">
     		  <div class="col-md-5 pt-4 pb-4" align="center">
		      	<div class="content-ct rate">
			        <h3 class="text-danger text-uppercase text-center"><span>Circulation details</span></h3>
			        <div class="clearfix"></div>
              <div class="row">			        
  			        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-4" align="left">
                  <div class="row">
    			        	<div class="col-7 pb-2 text-right">Hord Copies</div>
    			        	<div class="col-5 pb-2 text-left txt-yellow">5,500</div>
    			        	<div class="col-7 pb-2 text-right">e-Books</div>
    			        	<div class="col-5 pb-2 text-left txt-yellow">90,000+</div>
    			        	<div class="col-7 pb-2 text-right">Readership</div>
    			        	<div class="col-5 pb-2 text-left txt-yellow">180,000</div>
                  </div>
  			       	</div>

  			       	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-4" align="right">    
                  <div class="row">        
    				        <div class="col-7 pb-2 text-right">Europe</div>
    				        <div class="col-5 pb-2 text-left txt-yellow">35%</div>
    				        <div class="col-7 pb-2 text-right">America</div>
    				        <div class="col-5 pb-2 text-left txt-yellow">9%</div>
    				        <div class="col-7 pb-2 text-right">Asia Pacific</div>
    				        <div class="col-5 pb-2 text-left txt-yellow">55%</div>
                  </div>
  			      	</div>
              </div>
		    	  </div>
		      </div>

    	    <div class="col-md-4 pt-4 pb-4" align="center" style="border-left: 1px solid #ccc;border-right: 1px solid #ccc;">
    	    	<div class="content-ct rate">
      			  <h3 class="text-danger text-uppercase text-center"><span>Web Reach</span></h3>
      			  <div class="clearfix"></div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-4" align="right">
                <div class="row">
                  <div class="col-9 text-left pb-2">
                    <p class="mb-0"><i class="fa fa-thumbs-up mr-2 sm-thumb" aria-hidden="true"></i> Avg. Monthly Visitors</p>
                  </div>
                  <div class="col-3 text-left pb-2 txt-yellow">150K+</div>
                  <div class="col-9 text-left pb-2">
                    <p class="mb-0"><i class="fa fa-linkedin mr-2 sm-lin" aria-hidden="true"></i> LinkedIn Followers</p>
                  </div>
                  <div class="col-3 text-left pb-2 txt-yellow">9K+</div>
                  <div class="col-9 text-left pb-2">
                    <p class="mb-0"><i class="fa fa-twitter mr-2 sm-twt" aria-hidden="true"></i> Twitter Reach</p>
                  </div>
                  <div class="col-3 text-left pb-2 txt-yellow">20K+</div>
                </div>
              </div>
          	</div>
    	    </div>	

    	    <div class="col-md-3 pt-4 pb-4" align="center">
    	    	<div class="content-ct rate">
        			<h3 class="text-danger text-uppercase text-center"><span>Credibility</span></h3>		        
        			<div class="clearfix"></div>
    		        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-4">
    		        	<p style="line-height: 30px;">Successfully served <strong class="txt-yellow">700+</strong>
    		        	companies world wide & counting...
    		        	</p>
    		       	</div>
    		    </div>
    	    </div>	
  		  </div>
	    </div> 
    </div>    
	<!-- End: Circulation -->


	<div class="container pt-4">
		<div class="row">
			<div class="col-md-6 pt-4 pb-4">

        <div class="tabs">
          <div class="tab-button-outer">
            <ul id="tab-button">
              <li><a href="#tab01">Target Market</a></li>
              <li><a href="#tab02">Target Audience</a></li>
            </ul>
          </div>
          <!-- <div class="tab-select-outer">
            <select id="tab-select">
              <option value="#tab01">Target Market</option>
              <option value="#tab02">Target Audience</option>
            </select>
          </div> -->

          <div id="tab01" class="tab-contents">
            <img src="{{config('app.url')}}images/ahhm-geographical-breakdown.jpg" alt="Target Market" class="img-fluid">
          </div>
          <div id="tab02" class="tab-contents">
            <img src="{{config('app.url')}}images/ahhm-occupational-break-down.jpg" alt="Target Audience" class="img-fluid"> 
          </div>
        </div>

			</div>

			<!-- // Testimonials -->
			<div class="col-md-6 pt-4 pb-4"> 
        <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
          <h2 class="testimonial-title mt-4 font-weight-bold">Our Advertisers</h2>
          <ol class="carousel-indicators">
            <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#testimonials-carousel" data-slide-to="1"></li>
            <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            <li data-target="#testimonials-carousel" data-slide-to="3"></li>
            <li data-target="#testimonials-carousel" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="{{config('app.url')}}images/testimonial-slide-1.jpg" alt="Testimonial">
              <div class="carousel-caption text-left">
                <div class="bg-blk-transp p-4">
                  <h5 class="txt-yellow mt-0"><strong>Caroline Watkins</strong></h5>
                  <p><em>Proffessor, Stroke and Older People's Care, Department of Nursing,<br/>
                  University of Central Lancashire, UK.</em></p>
                  <p class="mb-0">"We are impressed by the quality and content of you magazine. We are interested in giving a full page colour ad in your magazine"</p>
                </div>                  
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{config('app.url')}}images/testimonial-slide-2.jpg" alt="Testimonial">
              <div class="carousel-caption text-left">
                <div class="bg-blk-transp p-4">
                  <h5 class="txt-yellow mt-0"><strong>Diego Delgado</strong></h5>
                  <p><em>Professor, Division of Cardiology and Transplantation,<br/>
                  University Health Network, Canada.</em></p>
                  <p class="mb-0">"It covers a broad range of issues - which does make it interesting to read"</p>
                </div>                 
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{config('app.url')}}images/testimonial-slide-3.jpg" alt="Testimonial">
              <div class="carousel-caption text-left">
                <div class="bg-blk-transp p-4">
                  <h5 class="txt-yellow mt-0"><strong>Peter Lachman</strong></h5>
                  <p><em>Consultant Paediatrician, Great Ormond Street,<br/>
                  Hospital for Children, NHS Trust, UK.</em></p>
                  <p class="mb-0">"The issue has very interesting articles of general interest"</p>
                </div>                  
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{config('app.url')}}images/testimonial-slide-4.jpg" alt="Testimonial">
              <div class="carousel-caption text-left">
                <div class="bg-blk-transp p-4">
                  <h5 class="txt-yellow mt-0"><strong>Amir Hannan</strong></h5>
                  <p><em>Lead, Information, Management & Technology, Glossop Primary Care Trust,<br/>
                  Primary Care, Lead North West Strategic Health Authority, UK.</em></p>
                  <p class="mb-0">"I am very pleased with the presentation and the quality of the journal"</p>
                </div>                  
              </div>
            </div>

            <div class="carousel-item">
              <img class="img-fluid" src="{{config('app.url')}}images/testimonial-slide-5.jpg" alt="Testimonial">
              <div class="carousel-caption text-left">
                <div class="bg-blk-transp p-4">
                  <h5 class="txt-yellow mt-0"><strong>Beverly Jensen</strong></h5>
                  <p><em>Associate Professor, Communications,<br/>
                  UAE University, UAE.</em></p>
                  <p class="mb-0">"My overall impression about the magazine is that it is done really professionally and "sells" well the contents its present. The choice of the images is also very adequate. I think that is an important way to disseminate academic discoveries to the public. In this sense, I see you magazine as an important means to communicate between theory and practice"</p>
                </div>                  
              </div>
            </div>

          </div>
          <!-- <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>   

			</div>
			<!-- Testimonials // -->

		</div>
	</div>



  <!-- Start: Clients -->
  <div class="container-fluid tickets gray-bg text-center" id="clients">
    <div class="col-md-12 content-ct text-center">
      <h5 class="TXT-blu pt-3 text-uppercase text-center font-weight-bold">Our Clients</h5>
    </div>
    <div class="row content-ct">
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/ups-logo.png" alt="ups" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/siemens-logo.png" alt="siemens" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/philips-healthcare-logo.png" alt="philips" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/zebra-logo.png" alt="zebra" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/csc-logo.png" alt="csc" class="img-fluid" />
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 col-6 mb-2" align="center">
        <img width="60%" src="{{config('app.url')}}images/fuji-xerox-logo.png" alt="fuji" class="img-fluid" />
        <div align="center">
          <a href="{{url('clients')}}" target="_blank" class="TXT-blu">
            View More &nbsp; <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- End: Clients -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="footer-widget">
            <p class="mb-3 mt-3 text-light">&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- main container --> 

  <!-- <a href="#0" class="cd-top">TOP</a> --> 

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->



  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="{{ config('app.url') }}js/popper.min.js"></script>
  <script src="{{ config('app.url') }}js/bootstrap.min.js"></script>


  <script type="text/javascript">
    $(document).on("scroll",function(){
      if($(document).scrollTop()>150){ 
        $("header").removeClass("large").addClass("small");
      }
      else{
        $("header").removeClass("small").addClass("large");
      }
    });
  </script>

  <script>
   $(document).ready(function() {

    $(function() {
      $('#sbtbtn').attr('disabled', 'disabled');
    });

    $('input[type=text],input[type=tel],input[type=email]').on("change", function() {

      if ($('#telephone').val() !=''&&
        $('#company').val() != '' &&
        $('#email').val() != ''&&
        $('#fullname').val() != '') {

        $('#sbtbtn').removeAttr('disabled');
    } else {
      $('#sbtbtn').attr('disabled', 'disabled');
    }
  });
  });
</script>

<script>
 $(document).ready(function() {

  $(function() {
    $('#sbtbtn1').attr('disabled', 'disabled');
  });

  $('input[type=text],input[type=tel],input[type=email]').on("change", function() {

    if ($('#telephone1').val() !=''&&
      $('#company1').val() != '' &&
      $('#email1').val() != ''&&
      $('#fullname1').val() != '') {

      $('#sbtbtn1').removeAttr('disabled');
  } else {
    $('#sbtbtn1').attr('disabled', 'disabled');
  }
});
});
</script>

       

<script type="text/javascript">
  $('myCarousel').carousel('pause');
</script>

<script>
  $(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});
</script>
</body>

</html>

