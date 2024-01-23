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
    }
    .nav-main-item>a:hover{
        background-color: #fff!important;   
        color:#000 !important;
        height:100%;
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
      color: #5a5a5a !important;
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
<p style="color: green;">{{ session('thank_message') }}</p>
<br>
</div>
<div class="modal-footer">
<a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('healthcare-marketing/services/account-based-marketing')}}"
aria-expanded="false">
Close
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
                  <img class="p-0 m-0" src="https://industry.asianhhm.com/promotions/images/webinar-main-banner.jpg" alt="webinar-banner-img" width="100%">
                </div>
            </div>
      </div>
</div>   
    

<div class="container-fluid bg-dark">       
    <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
          <!-- 1st container strat -->
            <div class="container-fluid mt-5">       
                <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                          <div class="">
                          <nav class="navbar-large">
                          <ul class="nav nav-tabs main-tab-menu" id="mainTabs">
                            <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link" href="{{ url('healthcare-marketing/b2b-display-advertising') }}">
                                      <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise" ><br>
                                    Display Advertising</a>
                                    </li>
                                    <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link" href="{{ url('healthcare-marketing/services/webinars') }}">
                                    <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise"><br>
                                      Webinars</a>
                                    </li>
                                    <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link " href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">
                                    <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/email-marketing-icon.png" alt="document-advertise"><br>
                                    Email Marketing</a>
                                    </li>
                                    <li class="nav-item nav-main-item active" align="center">
                                    <a class="nav-link" href="{{ url('healthcare-marketing/services/content-syndication') }}">
                                    <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise"><br>
                                      Content Syndication</a>
                                    </li>
                                    <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">
                                    <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise"><br>
                                    Print Advertising</a>
                                    </li>
                                    <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link" href="{{ url('mediapacks') }}">
                                    <img src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise"><br>
                                      Media Pack</a>
                                    </li>
                                    <li class="nav-item nav-main-item" align="center">
                                    <a class="nav-link" href="{{ url('clients') }}">
                                    <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/clientes-icon.png" alt="document-advertise"><br>
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
            </div>
        
            

<!-- first container start -->

<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="text-center content-style">
<h1 class="font-40" style="font-family:Montserrat, sans-serif;">AsianHHM’s Account Based Marketing</h1>
<p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:30px;">Target Specific High-Value Accounts</p>

</div>
</div>
</div>
</div>

<!-- first container End -->
<!-- 2nd container start -->



<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="text-center content-style">
<h1 class="font-40" style="font-family:Montserrat, sans-serif;">Overview</h1>

<p class="mb-3 mt-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
Flip your B2B Sales & Marketing Funnel on its Head, Account Based Marketing (ABM) enables you to reach specific, ideal-fit companies that align with your organization's ideal customer profile (ICP). By leveraging this approach, you can focus your advertising efforts on precisely targeting the companies that are most likely to be a good fit for your products or services.

</p>
</div>
</div>
</div>
</div>




<!-- 2nd container End -->

<!-- 3rd container Start -->

<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="img-style">
<div class="row">
<div class="col-md-6 col-12" >
<div style="background-color:#fff;padding:13px 20px;">
<p class="" style="font-family:Montserrat, sans-serif;font-size:24px;">AsianHHM team has the privilege to design & execute custom ABM campaigns to some of the Fortune 500 companies</p> 
<p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
AsianHHM offers account-based marketing (ABM) approach, providing an alternative to conventional B2B strategies. In ABM we help our clients concentrate their sales and marketing efforts on carefully selected target accounts. With our experience in utilizing personalized campaigns tailored to each account, ABM ensures a meaningful and resonating message. This specialized strategy proves to be a highly advantageous asset for our healthcare clients, as it fosters robust customer relationships with enhanced customer retention.
</p>   
</div>
</div>
<div class="col-md-6 col-12">
<div class="text-center"> 
<div>
<img src="https://industry.asianhhm.com/promotions/images/account-based-marketing.jpg" alt="webinar-sponserad" width="100%" height="340">
</div>
<div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
<a href="https://www.asianhhm.com/healthcare-marketing/services/content-syndication" class="btn-blink" style="color:#fff;font-size:20px;">Content Syndication</a>
</div>                                    
</div>
</div>     
</div>
</div>
</div>
</div>
</div>

<!-- 3rd container End -->
<!-- 4th container Start -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
      <div class="content-style">
      <div class="text-center mt-5">
      <p class="" style="font-family:Montserrat, sans-serif;font-size:26px;">
      AsianHHM’s Account Based Marketing Functional Strategy</p>
      <img src="https://industry.asianhhm.com/promotions/images/5d-account-img.jpg" style="border: 0;
      box-shadow: 0 5px 25px -10px rgba(150,170,180,0.5);">
      </div>
      <p class="mt-4 text-center" style="font-family:Montserrat, sans-serif;font-size:28px;">AsianHHM will help design, plan and promote your content through tried and tested Pro-ABM channels for enhanced engagements, higher ROI. Our process entails -</p> 
      <p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
      <b>Research & Discovery:</b>We work along with our clients in researching and discovering high-potential target accounts that align with our client's business goals and objectives. This is our hybrid model, but our team is experienced to handle accounts that are given by the clients.
      </p>
      <p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;"><b>Fishing & Defining: </b>Our research team and sometimes our clients assists us in freezing the list of the key stakeholders and decision-makers within discovered accounts. Our research team helps in understanding the organizational structure, roles, and responsibilities of the individuals that we propose to target to our clients.
    </p>
      <p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
      <b> Develop:</b>Progressing ahead in this stage of our ABM program – Highly relevant content and target campaigns that resonate with the target accounts are designed & developed. The content would address the specific needs, pain points, and challenges of the account. This fosters strong connection and assumes engagement.
    </p>
      <p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;"><b>Deliver:</b>At this level of our program we deliver the content through the most appropriate channels. This includes email marketing, personalized landing pages, social media, direct mail, or other methods that suit the preferences of the target accounts.
    </p>
      <p style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
      <b>Determine:</b>Finally, we measure and determine the success of our ABM efforts. Key performance indicators (KPIs) that are prefixed and agreed upon with our clients are used to evaluate the impact of the program on lead generation, sales pipeline growth, revenue growth, and retention. 
<br>
<br>
AsianHHM’s ABM programs are unique in the sense that we work together with our clients as partners and strive for guaranteed ROI on their marketing spend. 
</p>



      </div>
    


    </div>
  </div>
</div>
<!-- 4rd container End -->
<!-- 5th container start -->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class="text-center content-style">
<p class="mt-4 mb-4" style="font-family:Montserrat, sans-serif;font-size:24px;">Market Smarter, Accelerate Sales Cycle & Win over High Value Clients.</p>
<h2 class="mb-5" style="font-family:Montserrat, sans-serif;font-size:27px;">B2B ACCOUNT BASED MARKETING - UP YOUR GAME 
</h2>  

<br>
<a class="btn-style" data-toggle="modal" data-target="#registerform" style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Ask Us How</a>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
<!-- 5th container End -->

   <!-- 8th container Start -->
   <div class="container-fluid mt-5">       
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="img-style">
                              <div class="row">
                              <div class="col-md-6 col-12">
                                <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/b2b-surveys-assessments.jpg" alt="b2b-surveys-assessments" width="100%">
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/b2b-surveys-assessments" class="btn-blink" style="color:#fff;font-size:20px;">B2B Surveys Assessments</a>
                                        </div>                                    
                                </div>
                                </div>
                                <div class="col-md-6 col-12">
                                <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/b2b-microsites.jpg" alt="b2b-microsites" width="100%">
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/b2b-microsites" class="btn-blink" style="color:#fff;font-size:20px;">B2B Microsites</a>
                                        </div>                                    
                                </div>
                                </div>
                              
                              </div>
                              </div>
                        </div>
                  </div>
              </div>
            <!-- 8th container End -->
<!-- 6th container start -->
<div class="container-fluid mt-5 mb-5">
    <div class="row"> 
    <div class="col-12 ">
    <div class="p-4" style="background-color:#fff;border-radius:3px;">
    <div class="mb-3 text-center">
    <h1 class="font-40" style="font-family:Montserrat, sans-serif;">Clients</h1>
    </div>
    <div class="row">
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532264-img-ups.jpg" alt="UPS" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532272-img-shimadzu.jpg" alt="Shimadzu" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532178-img-sats.jpg" alt="SATS" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532165-img-roche.jpg" alt="Roche" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532152-img-philips.jpg" alt="Philips" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532141-img-oracle.jpg" alt="Oracle" style="width:75%; height:auto;">
    </div>
    
    </div><div class="row">
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532125-img-mrepec.jpg" alt="Malaysian Rubber Export Promotion Council" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532114-img-microsoft.jpg" alt="Microsoft" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532104-img-ibm.jpg" alt="IBM" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532092-img-greiner-bio-one.jpg" alt="Greiner Bio One" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532081-img-fuji-xerox.jpg" alt="Fuji Xerox" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532070-img-electrolux.jpg" alt="Electrolux" style="width:75%; height:auto;">
    </div>
    
    </div><div class="row">
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532045-img-economist.jpg" alt="The Economist" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532035-img-bpl.jpg" alt="BPL" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488532024-img-advantech.jpg" alt="Advantech" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488538105-img-acuity.jpg" alt="Systems Acuity Information" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488538297-img-napier.jpg" alt="NAPIER" style="width:75%; height:auto;">
    </div>
    
    <div class="col-md-2 col-4">
    <img src="https://industry.asianhhm.com//advertisers/1488538223-img-fujifilm.jpg" alt="FUJIFILM" style="width:75%; height:auto;">
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
              <form action="{{ route('accountBasedmarketing.post') }}" method="post" id="writemessage">
                 @csrf
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">		
                        <input type="hidden" name="formtype" value="modal-form">
                     <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                      <input type="hidden" name="client_subject" value="Thank you – Book free consultation - Asianhhm">
                      <input type="hidden" name="admin_subject" value="Book free consultation – account-based-marketing – Asianhhm">
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