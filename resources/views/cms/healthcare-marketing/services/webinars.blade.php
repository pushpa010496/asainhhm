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
      box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;       
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

                <div class="modal-content" style="background-color:#fff !important;">

                    <div class="modal-header">

                        <h2 class="modal-title text-blue"> Thank You...</h2>

                    </div>

                    <div class="modal-body">

                        <p style="color:green;">{{session('thank_message')}}</p>
						<br>   
                    </div>

                    <div class="modal-footer">

                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('healthcare-marketing/services/webinars')}}"

                            aria-expanded="false" style="background-color:#005aff;color:#fff;font-size:13px;">

                            close

                        </a>

                    </div>

                </div>

            </div>

        </div>
<!-- end popup -->



    <div class="container-fluid p-0 m-0">       
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0">
                <div class="p-0 m-0">
                  <img class="p-0 m-0" src="https://industry.asianhhm.com/promotions/images/webinars-main-banner.jpg" alt="webinars-main-banner" width="100%">
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
      <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('healthcare-marketing/b2b-display-advertising') }}">
          <img class="mt-2" src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise" ><br>
         Display Advertising</a>
        </li>
        <li class="nav-item nav-main-item active" align="center">
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
      <h1 class="font-40" style="font-family:Montserrat, sans-serif;">B2B Webinars - Flexible and Convenient</h1>
      <p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:21px;">Attendees can access webinars from anywhere, making it convenient for them to engage with your brand.</p>
           
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
                      B2B Webinars are a powerful tool for generating high-quality leads without breaking your marketing budget, and AsianHHM with years of experience in the industry can help you in stress-free planning & cost-effective execution of your webinar objectives.
                      </p>
                      <p class="mb-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
                      Our expertise covers - ideation, planning, hosting, marketing and data analytics. B2B Webinars is an opportunity to connect with your target audience effectively, generating high-quality leads while gaining valuable real-time analytics and attendee data.
                      </p>
                      
              </div>
    </div>
  </div>
</div>
<!-- 2nd container End -->
<!-- 5th container Start -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style text-center">
    <!-- <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Average Webinar Metrics</h2> -->
    <div class="row">     
        <div class="col-md-12 col-12 text-center" >
        <div>
          <img src="https://industry.asianhhm.com/promotions/images/webinar-metrics.png" alt="webinar-sponserad" >
        </div>
        </div>    
      </div>
    </div>
    </div>
   </div>
 </div>
<!-- 5th container End -->


<!-- 3rd container Start -->

<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style">
<div align="center">
  
<h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Webinar Audience Metrics</h2></div>
    
    <div class="row mt-4"> 
    
        <div class="col-md-6 col-12" >
          <div style="box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;padding:15px;">
          <h2 class="" style="font-family:Montserrat, sans-serif;" align="center"> Geographies</h2>
          <ul class="li-style">
            <li>West Europe – 85%</li>
            <li>East Europe – 15%</li>
            <li>North America – 90%</li>
            <li>South America – 10%</li>
            <li>SEA – 80%</li>
            <li>Middle East – 20%</li>           
          </ul>
       
          
        </div>
        </div>
        <div class="col-md-6 col-12" >
          <div style="box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;padding:15px 15px 44px 15px;">
          <h2 class="" style="font-family:Montserrat, sans-serif;">Job Profiles</h2> 
          <ul class="li-style">
            <li>Corporate Management- 35%</li>
            <li>Middle Management- 15%</li>
            <li>Scientific Management- 30%</li>
            <li>Scientific Research- 15%</li>
            <li>Others- 5%</li>          
          </ul>            
        </div>
        </div>  
        <p class="mt-3" style="font-family:Montserrat, sans-serif;font-size:14px;line-height:26px;"><i><b>*Disclaimer </b>– The above percentages are as per the average audience breakup (geography & job titles) that our client’s typically ask for. We are capable to customise the audience mix as per your vision.</i></p>
      </div>

     
      <div>&nbsp;</div>
    </div>
    </div>
   </div>
 </div>
<!-- 3rd container End -->
<!-- 4th container Start -->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="img-style">
<div class="row">
<div class="col-md-6 col-12" >
<div style="background-color:#fff;padding:13px 20px;">
<h2 class="text-center" style="font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff !important;padding:10px;border-radius:3px;width:100%;max-width:100%;">Capabilities</h2>
<ul class="li-style">
<li>Branded registration page</li>
<li>Live polling &amp; metrics</li>
<li>On-demand</li>
<li>Hosted on the AsianHHM website forever</li>
<li>Comprehensive reporting</li>
<li>Webinar moderation</li>
<li>Live Q&amp;A</li>
<li>Webinar marketing
<ul class="li-style">
<li>Email Blasts </li>
<li>Social Media Promotions (LinkedIn, Facebook and Twitter)</li>
<li>Banner Ads </li>
<li>Automatic reminder emails to webinar registrants</li>
<li>Inclusion in the Newsletter</li>
</ul>

</li>

</ul>


</div>
</div>
<div class="col-md-6 col-12 " >
<div class="text-center"> 
<div>
<img src="https://industry.asianhhm.com/promotions/images/webinar-sponserad.png" alt="webinar-sponserad" width="100%" height="480">
</div>
<div class="btn-Sponsored" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
<a href="https://www.asianhhm.com/healthcare-marketing/services/sponsored-webinar-series" class="btn-Sponsored" style="color:#fff;font-size:20px;">Sponsored Webinar</a>
</div>                                    
</div>
</div>  
</div>
</div>
</div>
</div>
</div>
<!-- 4th container End -->
<!-- 7th container Start -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style text-center">
    <!-- <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Promotion Channels</h2> -->
    <div class="row">     
        <div class="col-md-12 col-12 text-center" >
        <div>
          <img src="https://industry.asianhhm.com/promotions/images/promotion-channels.png" alt="webinar-sponserad" >
        </div>
        </div>       
      </div>
    </div>
    </div>
   </div>
 </div>
<!-- 7th container End -->

<!-- 5th container Start -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style">
      <div class="text-center">
    <h2 class="mt-5 mb-3 text-center" align="center" style="font-family:Montserrat, sans-serif;">Webinar Packages</h2>
    </div>
    <div class="row">     
        <div class="col-md-4 col-12" >
        <div>
        <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Webinar Starter</h2>
          <ul class="li-style">
            <li>1 Branded Registration Page</li>
            <li>1 Social Media Post per week</li>
            <li>1 Email Marketing (5K IAPs*)</li>
             <li>1 time Newsletter inclusion</li> 
             <li>150 live registrations</li>
             <li>50 On-Demand Registrations</li>              
          </ul>
          <small><i><b>*IAP – Ideal audience profiles</b></i></small>
          <div class="mt-5">&nbsp;</div>
          <div class="mt-5">&nbsp;</div>
          <div class="mt-2">&nbsp;</div>
                    <a data-toggle="modal" data-target="#registerform"  ><h4 class="text-center btn-style" style="border:2px solid #ed1a3b;font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff;padding:10px;border-radius:3px;width:100%;max-width:100%;font-weight:bold;
    font-size: 16px;">Learn More </h4></a>
        </div>
        </div>
        <div class="col-md-4 col-12" >
        <div>
        <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Webinar Pro <span style="font-size:14px;text-transform: capitalize;"> <small><i>( Recommended )</i></small></span></h2>
        <ul class="li-style">
            <li>1 Branded Registration Page</li>
            <li>Multi-Lingual Content Generation & Promotions</li>
            <li>Multiple Social Media Posts per week</li>
             <li>Banner Advertising</li> 
             <li>1 Email Marketing (25K IAPs*)</li>
             <li>Multiple Newsletter inclusion</li>
              <li>350+ live registrations</li>
              <li>60 On-Demand Registrations</li>
          </ul>
          <small><i><b>*IAP – Ideal audience profiles</b></i></small>
          <a data-toggle="modal" data-target="#registerform"  ><h4 class="text-center btn-style mt-5" style="border:2px solid #ed1a3b;font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff;padding:10px;border-radius:3px;width:100%;max-width:100%;font-weight:bold;
    font-size: 16px;">Learn More </h4></a>
        </div>
        </div>  
        <div class="col-md-4 col-12" >
        <div>
        <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Webinar Ultimate</h2>
        <ul class="li-style">
            <li>1 Branded Registration Page</li>
            <li>Multi-Lingual Content Generation & Promotions</li>
            <li>Multiple Social Media Posts per week</li>
             <li>Banner Advertising</li> 
             <li>1 Email Marketing (25K IAPs*)</li>
             <li>Multiple Newsletter inclusion</li>
              <li>500+ live registrations</li>
              <li>100 On-Demand Registrations</li>
          </ul>
          <small><i><b>*IAP – Ideal audience profiles</b></i></small>
          <div>&nbsp;</div>
          <a data-toggle="modal" data-target="#registerform"  ><h4 class="text-center btn-style mt-3" style="border:2px solid #ed1a3b;font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff;padding:10px;border-radius:3px;width:100%;max-width:100%;font-weight:bold;
    font-size: 16px;">Learn More </h4></a>
        </div>
        </div>  
         <div>&nbsp;</div>
      </div>
    </div>
    </div>
   </div>
 </div>
<!-- 5th container End -->

<!-- 6th container start -->
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
<!-- 6th container end -->


                </div>
                </div>
            </div>
    
<div>
  
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
            <form action="{{ route('webinars.post') }}" method="post" id="writemessage">
               @csrf
             	
                    	<input type="hidden" name="formtype" value="modal-form">
                    <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                    <input type="hidden" name="client_subject" value="Thank you – Book free consultation - Asianhhm">
                    <input type="hidden" name="admin_subject" value="Book free consultation – webinars – Asianhhm">
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