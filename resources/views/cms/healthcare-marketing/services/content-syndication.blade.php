@extends('../layouts/app')

@section('style')

<style>
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
.navbar-large {
    margin-left: 4%;
}

  </style>

@endsection



@section('content')

<!-- <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/marketing-strategy-solutions') }}" class="ahhm-breadcrumb-item">Marketing Strategy Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Surveys & Assessments</a>
          </div>
        </div>
      </div>
    </div> -->

    <div class="container-fluid p-0 m-0">       
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0">
                <div class="p-0 m-0">
                  <img class="p-0 m-0" src="https://industry.asianhhm.com/promotions/images/content-syndication-main-banner.jpg" alt="content-syndication-main-banner" width="100%">
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
            <!-- 1st container End -->
            <!-- 2nd container Start -->
            <div class="container-fluid mt-5">       
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="">
                            <div class="text-center content-style">
                                      <h1 class="font-40" style="font-family:Montserrat, sans-serif;">B2B Lead Generation Strategy through Content Syndication </h1>
                                    <p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:21px;">Harness the Power to Boost Branding & Demand Generation</p>
                                    
                               </div>
                            </div>
                        </div>
                  </div>
              </div>
            <!-- 2nd container End -->
              <!-- 3rd container Start -->
              <div class="container-fluid mt-5">       
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-center content-style">
                            <h1 class="font-40" style="font-family:Montserrat, sans-serif;">Overview</h1>
                            <p class="mb-3 mt-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
                            With AsianHHM’s vast reach and established partnerships, we guarantee maximum visibility and impact for your content, ensuring it reaches the right audience. Our channels distribute your valuable content like white papers, case studies, articles, eBooks, and more to a diverse network of healthcare professionals, decision-makers, and industry experts across Asia.
                                 </p>
                                 <div class="mb-4 mt-2"  align="center">                                 
                                <img src="https://industry.asianhhm.com/promotions/images/consumable-btn-img.png" alt="consumable-btn-img">
                                </div>
                            </div>
                        </div>
                  </div>
              </div>
            <!-- 3rd container End -->
                       
               <!-- 7th container Start -->
               <div class="container-fluid mt-5">       
                  <div class="row">
                  <div class="col-md-12 col-12">
                        <div class="img-style">
                        <div class="row">
                          <div class="col-md-6 col-12">
                            <div style="background-color:#fff;padding:13px 20px;height:466px;">
                            <h2 class="mt-2" style="font-family:Montserrat, sans-serif;">Our Content Syndication Lead Generation Program comes with:</h2>
                             <ul class="li-style">
                              <li>Expand your brand's reach and visibility within the thriving healthcare industry across Asia.</li>
                              <li>Generate high-quality leads from a targeted audience of healthcare professionals.</li>
                              <li>Enhance your thought leadership and industry expertise by sharing valuable content.</li>
                              <li>Strengthen your brand reputation and establish trust with potential customers.</li>
                              <li>Drive engagement and conversions through compelling content that resonates with your target audience.</li>                            
                            </ul>
                          </div>
                          </div>
                          <div class="col-md-6 col-12">
                          <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/content-syndication-img.jpg" alt="content-syndication-img" width="100%" >
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/account-based-marketing" class="btn-blink" style="color:#fff;font-size:20px;">Account Based Marketing</a>
                                        </div>                                    
                                </div>
                          </div>
                        </div>
                        </div>
                      </div>
                  </div>
              </div>
            <!-- 7th container End -->
            <!-- 9th container start -->
            <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style">
<div align="center">
  
<h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Content Syndication Performance Metrics</h2></div>
    
    <div class="row mt-4"> 
    
        <div class="col-md-6 col-12">
          <div style="box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;padding:15px;height:100%;">
          <h2 class="" style="font-family:Montserrat, sans-serif;font-size:18px;" align="center">Conversion Rate/ Content Consumption Rate
</h2>

<p class="mb-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px">
75%       </p>         
<h2 class="" style="font-family:Montserrat, sans-serif;font-size:18px;" align="center">Return on Investment (ROI)
</h2>

<p class="mb-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px">
Subject to Project Vision, viz: Lowering CPL & CPA </p>
          
        </div>
        </div>
        <div class="col-md-6 col-12">
          <div style="box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;padding:15px 15px 44px 15px;">
          <h2 class="" style="font-family:Montserrat, sans-serif;font-size:18px;">Lead Generation</h2> 
          <p class="mb-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px">75 (vetted & verified in 25 days), other combinations available. </p>
          <h2 class="" style="font-family:Montserrat, sans-serif;font-size:18px;">Brand Awareness</h2> 
          <p class="mb-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px">15% increase in Branded Search Volume
30% increase in Direct Traffic
</p>
                     
        </div>
        </div>  
       
      </div>

     
      <div>&nbsp;</div>
    </div>
    </div>
   </div>
 </div>
            <!-- 9th conntaienr End -->
            <!-- 6th container start -->
            <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style">
<div align="center">
  
<h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Content Syndication Audience Metrics</h2></div>
    
    <div class="row mt-4"> 
    
        <div class="col-md-6 col-12">
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
        <div class="col-md-6 col-12">
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
        <p class="mt-3" style="font-family:Montserrat, sans-serif;font-size:14px;line-height:26px;"><i><b>*Disclaimer </b>– The above percentages are as per the average audience breakup (geography &amp; job titles) that our client’s typically ask for. We are capable to customise the audience mix as per your vision.</i></p>
      </div>

     
      <div>&nbsp;</div>
    </div>
    </div>
   </div>
 </div>
            <!-- 6th container End -->
             <!-- 5th container Start -->
             <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style">
<div align="center">
  
<h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Capabilities & Operational Excellence</h2></div>
    
    <div class="row mt-4"> 
    
        <div class="col-md-6 col-12">
          <div style="">
          <h2 class="" style="font-family:Montserrat, sans-serif;color:#898686 !important;font-size:18px !important;" align="left">Content Syndication with Account Based Marketing</h2>
          <p class="" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
          AsianHHM offers account-based marketing (ABM) approach, providing an alternative to conventional B2B strategies. In ABM we help our clients concentrate their sales and marketing efforts on carefully selected target accounts. With our experience in utilizing personalized
campaigns tailored to each account, ABM ensures a meaningful and resonating message.

        </p>
        <h2 class="mt-3" style="font-family:Montserrat, sans-serif;color:#898686 !important;font-size:18px !important;" align="left">Microsites</h2>
          <p class="" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
          AsianHHM’s microsite program ensure that your marketing bottom lines are met 
through the most granular content centric outreach channels. The targeted audience wouldn’t be expected to traverse through a diverse range of content that your website offers, rather the visitor’s focus is confined to a specific set of pages. Implementing different CTAs across the many pages of the microsite you gets valuable insight of visitor’s behaviour and trends.

        </p>
       
          
        </div>
        </div>
        <div class="col-md-6 col-12">
<div style="">
<h2 class="text-center" style="font-family:Montserrat, sans-serif;background-color:#ed1a3b;color:#fff !important;padding:10px;border-radius:3px;width:100%;max-width:100%;">Features & Capabilities</h2>
<ul class="li-style">
<li>Designing, Development and Promotions</li>
<li>Available Audience Segment that matches popular campaign requirement</li>
<li>High reachability, & Engagements.</li>
<li>Support all the popular Display devices.</li>
<li>Promotions across a wide range of distribution channels.  </li>
<li>Insightful Performance Analytics & Consultation.</li>

</ul>

</li>

</ul>


</div>
</div> 

      </div>

     
      <div>&nbsp;</div>
    </div>
    </div>
   </div>
 </div>
            <!-- 5th container End -->
           
            <!-- 6th container start  -->
            <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
    <div class="content-style text-center">
    <!-- <h2 class="mt-5 mb-3" style="font-family:Montserrat, sans-serif;">Promotion Channels</h2> -->
    <div class="row">     
        <div class="col-md-12 col-12 text-center">
        <div>
          <img src="https://industry.asianhhm.com/promotions/images/promotion-channels.png" alt="webinar-sponserad">
        </div>
        </div>        
      </div>
    </div>
    </div>
   </div>
 </div>
            <!-- 6th container end  -->
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
              <!-- 9th container Start -->
              <div class="container-fluid mt-5">       
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="p-3" style="background-color:#fff;border-radius:3px;">
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
              <div class="mt-5">&nbsp;</div>
            <!-- 8th container End -->

            </div>
      </div>
  </div>

   

<!--/about section-->



<!--footer-->



<!--/footer-->



</div>

  





@endsection



@section('scripts')



@endsection