@extends('../layouts/app')

@section('style')

<style>
.form-control{
   font-size: 15px !important;
    height: calc(3rem + 2px) !important; 
    font-family: 'Lato', sans-serif !important;
    appearance: auto !important;
  }
     
    /* Styles for large screens */
    @media only screen and (min-width: 768px) {
      .navbar-small {
        display: none !important;
      }
    }
    
    /* Styles for small screens */
    @media only screen and (max-width: 767px) {
      .navbar-large {
        display: none !important;
      }
    }
    
      .ahhm-about {
        padding: 2rem;
    }
    
     /* Custom CSS for active tab color */
     
     .nav-link.active {
          background-color: #ED1A3B !important;
          color: #fff !important;
        }
        .nav-tabs {
        border:none;
        }
        a{
            color:#000;
        }
        .nav-main-item{
          width:14%;      
          background-color:#f5f5f7 !important;
          border:1px solid #f5f5f7 ;
          height:100% !important;
        }
        .nav-main-item.active{
          width:14%;      
          background-color:#f5f5f7 !important;
          border:1px solid #f5f5f7 ;
          
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
        color: #555555;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color:1px solid #ddd;
        cursor: default;
        height:110px;
    }
        .nav-main-item>a:hover{
            background-color: #fff!important;   
            color:#000 !important;
            height:110px;
        }
        .nav-mini-item{
          background-color: #ddd !important;   
            color:#000 !important;
        }
        .nav-mini-item>a:hover{
          background-color: #ED1A3B !important;   
            color:#fff !important;
        }
        .main-tab-menu {
          flex: 0 0 20px;
         
        }
        .nav-tabs .nav-link {
        border:none;
        }
        .mini-subtab-menu .nav-link {
        margin-bottom: 0px !important;
        }
    
        .tab-content-wrapper {
          display: flex;
        }   
    
        .mini-subtab-menu {
          display: flex;
          flex-direction: column;
          margin-top:45px;
        }
    
        .mini-subtab-menu .nav-link {
          margin-bottom: 5px;
        }
    
        .subtab-content {
          flex: 1;
          padding-left: 0px;
        }
    
        .subtab-content h3 {
          margin-top: 10px !important;
        }
    
        .subtab-content-container {
          display: flex;
        }
    
        .subtab-menu {
          flex: 0 0 200px;
        }
    
        .subtab-content-area {
          flex: 1;
          margin-top:6px;
          padding-left: 20px;
        }
        img{
      max-width:100%;
    }
    
    .ahhm-about {
        padding: 2rem;
    }
    
    .main-tab-menu {
        flex: 0 0 20px;
        background-color: #f5f5f7 !important;
        border: 1px solid #f5f5f7;
    }
    /* new styles */
    .bg-dark{ 
    background-color: #f5f5f7;
    }

    .content-style{
      background-color:#fff;       
          padding:5px 20px 10px 20px;
          border-radius: 8px;
          border: 0;
          box-shadow: 0 5px 25px -10px rgba(150,170,180,0.5);
        }
    .btn-style:hover{
          background-color: #fff !important;
          color:#5a5a5a !important;
          font-family:"Montserrat" , sans-serif;
          box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;
          border: 2px solid #ed1a3b;
          
        }
        .li-style{
      font-size:18px;
      line-height:32px;
      font-family:"Montserrat" , sans-serif;
    }       
        .btn-blink:hover {
        color: #000 !important;
    }
    .btn-Sponsored:hover{
    color:#000 !important;
    }    
    .navbar-large{
      margin-left:4%;
    }
     
    </style>

@endsection



@section('content')

<script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>

<!-- popup -->
<div id="myModal" class="modal fade" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="background-color:#ccc !important;">

                    <div class="modal-header">

                        <h2 class="modal-title text-blue"> Thank You...</h2>

                    </div>

                    <div class="modal-body">

                        <p style="color: green;">{{session('thank_message')}}</p>

					

						<br>

                       

                    </div>

                    <div class="modal-footer">

                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('healthcare-marketing/services/geo-targeted-display')}}"

                            aria-expanded="false">

                            Close

                        </a>

                    </div>

                </div>

            </div>

        </div>
<!-- end popup -->


<!-- <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/display-advertising-solutions') }}" class="ahhm-breadcrumb-item"> Display Advertising Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Targeted Display Advertising</a>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container-fluid   p-0 m-0">       
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0">
                <div class="p-0 m-0">
                  <img class="p-0 m-0" src="https://industry.asianhhm.com/promotions/images/webinar-main-banner.jpg" alt="webinar-banner-img" width="100%">
                </div>
            </div>
      </div>
      </div>


      <div class="container-fluid bg-dark">       
        <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                 
              <div class="container-fluid mt-5">
                    <div class="row">
                      <div class="col-md-12 col-12">
                      <nav class="navbar-large">
        <ul class="nav nav-tabs main-tab-menu" id="mainTabs">
        <li class="nav-item nav-main-item active" align="center">
          <a class="nav-link" href="{{ url('healthcare-marketing/b2b-display-advertising') }}">
            <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise" ><br>
           Display Advertising</a>
          </li>
          <li class="nav-item nav-main-item " align="center">
          <a class="nav-link" href="{{ url('healthcare-marketing/services/webinars') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise"><br>
            Webinars</a>
          </li>
          <li class="nav-item nav-main-item" align="center">
          <a class="nav-link " href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/email-marketing-icon.png" alt="document-advertise"><br>
           Email Marketing</a>
          </li>
          <li class="nav-item nav-main-item" align="center">
          <a class="nav-link" href="{{ url('healthcare-marketing/services/content-syndication') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise"><br>
            Content Syndication</a>
          </li>
          <li class="nav-item nav-main-item" align="center">
          <a class="nav-link" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise"><br>
           Print Advertising</a>
          </li>
          <li class="nav-item nav-main-item" align="center">
          <a class="nav-link" href="{{ url('mediapacks') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise"><br>
            Media Pack</a>
          </li>
          <li class="nav-item nav-main-item" align="center">
          <a class="nav-link" href="{{ url('clients') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/clientes-icon.png" alt="document-advertise"><br>
          Clientele</a>
          </li>
        </ul>
    </nav>
    <!-- Mobile Responsive start -->
    <nav class="navbar-small">
          <div class="container p-0 m-0" id="tab-menu">
    <div class="table-responsive">
      <table class="table table-bordered table-hover">
        <!-- <thead>
          <tr>
            <th class="text-center">Service</th>
            <th class="text-center">Icon</th>
          </tr>
        </thead> -->
        <tbody>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('healthcare-marketing/b2b-display-advertising') }}">Display Advertising</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('healthcare-marketing/services/webinars') }}">Webinars</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/email-marketing-icon.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">Email Marketing</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('healthcare-marketing/services/content-syndication') }}">Content Syndication</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">Print Advertising</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('mediapacks') }}">Media Pack</a>
            </td>
          </tr>
          <tr>
            <td class="text-center">
              <img src="https://industry.asianhhm.com/promotions/images/clientes-icon.png" alt="document-advertise">
            </td>
            <td class="text-center">
              <a href="{{ url('clients') }}">Clientele</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    </div>
    </nav>
    <!-- Mobile Responsive End -->
                        </div>
                    </div>
              </div>
    
    <!-- first container start -->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="text-center content-style">
<h1 class="font-40" style="font-family:Montserrat, sans-serif;">Geo-Targeted Display Advertising </h1>
<p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:21px;">Improve your brand reach across audience segmented by Geography, measure the impact – On the go…</p>
</div>
</div>
</div>
</div>
    <!-- first container End -->


<!-- 2nd container start -->
<div class="container-fluid mt-1">
<div class="row">
<div class="col-md-12 col-12">
<div class="mt-5 text-center content-style">
<h1 class="font-40" style="font-family:Montserrat, sans-serif;">Overview</h1>
<p class="mb-3 pt-2" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
Reach your desired audience effectively by utilizing rich formats
of advertising, targeted to specific geographies. Tailor your 
content to engage and resonate with the right audience, and 
gain valuable insights of visitor behaviour. Data-driven approach 
empowers you for creating max impact campaigns.
</p>
<p class="mb-3 pt-2" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
With geo-targeted display advertising, AsianHHM can help businesses
optimize their marketing efforts by delivering personalized and 
location-specific content to engage and attract target audience.
</p>               
</div>
</div>
</div>
</div>
<!-- 2nd container End -->
    
<!-- 3rd row start -->
    
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class=" text-center content-style">
<h2  class="mt-4" style="font-family:Montserrat, sans-serif;">Geo-Targeted Banner Advertising is a way to <br>
<p class="mt-3">deliver more accurate & relevant message to the users.</p>
</h2>
<p class="mb-4" style="font-family:Montserrat, sans-serif;font-size:26px;">It’s not just great for users, it drives sales</p>
<a class="btn-style" data-toggle="modal" data-target="#registerform"  style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Learn More</a>
<p>&nbsp;</p>
</div> 
</div>
</div>
</div>
    
    
<!-- 3rd row End -->
    
<!-- 4th container Start -->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="img-style">
<div class="row">
<div class="col-md-6 col-12">
<div style="background-color:#fff;padding:13px 20px;">
<h2 class="text-center" style="font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff !important;padding:10px;border-radius:3px;width:100%;max-width:100%;">Features & Capabilities</h2>
<ul class="li-style">
<li >100% Share of Voice (SOV) programs</li>
<li>Supports all the popular Display formats & sizes</li>
<li>Multi-Device & Multi-Lingual Delivery </li>
<li>Reach across major ICPs & Designations of Healthcare sector</li>
<li>Non-programmatic installation, supporting rich media formats.</li>
<li>Flexibility to modify the running program for enhanced reachability</li>
</ul>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-12">
<div class="mt-1"> 
<img src="https://industry.asianhhm.com/promotions/images/webinar-global-img.jpg" alt="webinar-global-img" width="100%" height="375px">
</div>
</div>

</div>
</div>
</div>
</div>
</div>
    <!-- 4th container End -->
    
    
<!-- 5th row start-->
    
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="  text-center content-style">

    <h2  class="mt-4" style="font-family:Montserrat, sans-serif;">92% Marketers agree using Geo-Targeted Advertising is crucial<br><p class="mt-3"> for their high impact cost effective campaigns. </p></h2>
    <p class="mb-5" style="font-family:Montserrat, sans-serif;font-size:26px;">Make Geo-Targeted Display Advertising an important 
    <br>
    element in your Digital Strategy.</p>
    <a class="btn-style" data-toggle="modal" data-target="#registerform"  style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Ask us how?</a>
    <p>&nbsp;</p> 

</div> 
</div>
</div>
</div>

<!-- 5th row End -->
    
    
    
    <!-- 6th row start -->
    
    
<div class="container-fluid mt-5">       
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="img-style">
<div class="row">
<div class="col-md-6 col-12">
<div class="text-center"> 
<div>
<img src="https://industry.asianhhm.com/promotions/images/b2b-surveys-assessments.jpg" alt="b2b-surveys-assessments" width="100%" height="340">
</div>
<div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
<a href="https://www.asianhhm.com/healthcare-marketing/b2b-display-advertising" class="btn-Sponsored" style="color:#fff;font-size:20px;">Display Advertising Solution</a>
</div>                                    
</div>
</div>
<div class="col-md-6 col-12">
<div class="text-center"> 
<div>
<img src="https://industry.asianhhm.com/promotions/images/b2b-microsites.jpg" alt="b2b-microsites" width="100%" height="340">
</div>
<div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
<a href="https://www.asianhhm.com/healthcare-marketing/services/display-banner-advertising" class="btn-Sponsored" style="color:#fff;font-size:20px;">Banner Advertising </a>
</div>                                    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    
 <!-- 6th row End -->
    
    <!-- 7th container start -->
    <div class="container-fluid mt-5 mb-5">
      <div class="row"> 
      <div class="col-12 ">
      <div class="img-client-style" style="background-color:#fff;border-radius:3px;">
      <div class="mb-3 text-center">
      <h1 class="font-40" style="font-family:Montserrat, sans-serif;">Clients</h1>
      </div>
      <div class="row">
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532264-img-ups.jpg" alt="UPS" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532272-img-shimadzu.jpg" alt="Shimadzu" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532178-img-sats.jpg" alt="SATS" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532165-img-roche.jpg" alt="Roche" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532152-img-philips.jpg" alt="Philips" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532141-img-oracle.jpg" alt="Oracle" style="width:69%; height:auto;">
      </div>
      
      </div><div class="row">
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532125-img-mrepec.jpg" alt="Malaysian Rubber Export Promotion Council" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532114-img-microsoft.jpg" alt="Microsoft" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532104-img-ibm.jpg" alt="IBM" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532092-img-greiner-bio-one.jpg" alt="Greiner Bio One" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532081-img-fuji-xerox.jpg" alt="Fuji Xerox" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532070-img-electrolux.jpg" alt="Electrolux" style="width:69%; height:auto;">
      </div>
      
      </div><div class="row">
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532045-img-economist.jpg" alt="The Economist" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532035-img-bpl.jpg" alt="BPL" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488532024-img-advantech.jpg" alt="Advantech" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488538105-img-acuity.jpg" alt="Systems Acuity Information" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488538297-img-napier.jpg" alt="NAPIER" style="width:69%; height:auto;">
      </div>
      
      <div class="col-md-2 col-4">
      <img src="https://industry.asianhhm.com//advertisers/1488538223-img-fujifilm.jpg" alt="FUJIFILM" style="width:69%; height:auto;">
      </div>
      
      </div>
      </div>
      
    </div> 
    </div>
    </div>
    <!-- 7th container end -->
    
    
    </div>
    </div>
    </div>

      

<!--/about section-->



<!--footer-->

<!--/footer-->

<!-- form start -->

<div id="registerform" class="modal fade show" role="dialog" style="padding-right: 17px;">
    <div class="modal-dialog modal-md">
    <div class="modal-content" style="padding:1% 5%;">
            <div class="modal-header">
                
                <p class="m-0 p-0" style="font-size:22px;font-weight:bold;">Register Now</p>

    
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('targetedDisplayAdvertising.post') }}" method="post" id="writemessage">
               @csrf
              	
                    	<input type="hidden" name="formtype" value="modal-form">
                   
                    <input type="hidden" name="g-recaptcha-response"  id="g-recaptcha-response" >
                    <input type="hidden" name="client_subject" value="Thank you – Book free consultation - Asianhhm">
                    <input type="hidden" name="admin_subject" value="Book free consultation – Geo-targeted-display – Asianhhm">
                    <input type="hidden" name="client_message" value="Thank you for your interest in knowing the various advertising and branding options with AsianHHM.">
                    <input type="hidden" name="site_name" value="PharmaFocusAsia">
                    <input type="hidden" name="thank_message" value="Thank you for showing interest in Increase Reach With B2B Display Marketing. One of our team will get back to you soon and the details will be e-mailed to you.">
                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="first_name" name="firstname" placeholder="First Name*" value="" required="">
                            </div>
                      
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" id="last_name" name="lastname" placeholder="Last Name*" value="" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12 mb-3">
                            <input type="text" class="form-control" name="company" placeholder="Company Name*" aria-label="Username" required="">
                            </div>
                      
                            <div class="col-12 mb-3">
                            <input type="text" class="form-control" name="job_title" placeholder="Job Title *" aria-label="Username" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12  mb-3">
                                <div class="form-group ">
                                <input type="email" class="form-control" name="email" placeholder="Business Email ID*" aria-label="Username" required="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-12  mb-3">
                                <div class="form-group ">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" value="" required="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group  arrow mb-3 ">
                        <select class="form-control" name="services" required="" value="">
                        <option selected="">Select Service</option>

                        <option value="Print Advertisements">Print Advertisements</option>

                        <option value="Advertorials">Advertorials</option>

                        <option value="Product Launches">Product Launches</option>

                        </select>
                        </select>
                        <span class="help-block"></span>
                        </div>


                  <div class="form-group mb-5">

                  <select class="form-control" name="country" aria-label=".form-select-lg example" required>
                  <option selected>Select Country</option>
                  @foreach($countries as $country)
                  <option value="{{$country->title}}">{{$country->title}}</option>
                  @endforeach
                  </select>



                  <span class="help-block"></span>
                  </div>
                                      
                
   <button type="submit" class="btn btn-ahhmred w-100 mb-3">Submit</button>
                        
                        
                        
</form>
</div>
</div>
</div>
</div>

<!-- form end -->
</div>

  

@endsection



@section('scripts')

  <!-- Include jQuery and Bootstrap JS -->
  <script src="https://www.asianhhm.com/promotions/public/styles/js/jquery-2.1.3.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

@if(Session('status') == 'true') 
  <script type="text/javascript">
			$('#myModal').modal('show');

</script>
@endif

@endsection