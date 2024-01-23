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
             
          <div class="container-fluid mt-5">
                <div class="row">
                  <div class="col-md-12 col-12">
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
                            <li class="nav-item nav-main-item" align="center">
                            <a class="nav-link" href="{{ url('healthcare-marketing/services/content-syndication') }}">
                            <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise"><br>
                              Content Syndication</a>
                            </li>
                            <li class="nav-item nav-main-item active" align="center">
                            <a class="nav-link" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">
                            <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise"><br>
                            Print Advertising</a>
                            </li>
                            <li class="nav-item nav-main-item" align="center">
                            <a class="nav-link" href="{{ url('mediapacks') }}">
                            <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise"><br>
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

 
               
         

<!-- first container start -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
      <div class="text-center content-style">
      <h1 class="font-40" style="font-family:Montserrat, sans-serif;">Content will be added soon...</h1>
      <!-- <p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:21px;">B2B Brand Augmentation</p>
            <p class="mb-3 mt-3" style="font-family:Montserrat, sans-serif;font-size:16px;line-height:26px;">
            Our publication successfully reaches the distinguished private
            and public hospitals, medical laboratories, as well as national
            and regional health authorities and health ministries across Asia.
            By connecting with these prominent institutions, Asian Hospital &
            Healthcare Management ensures extensive coverage of the top-spending
            entities in the healthcare sector, offering unparalleled access to 
            vital information for professionals in the field.
        </p> -->
      </div>
    </div>
  </div>
</div>
<!-- first container End -->
<!-- 2nd container start -->
<!-- <div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-12 col-12">
            <div class="mb-5 text-center content-style">
                        <h2 class="mt-5" style="font-family:Montserrat, sans-serif;">Popular Print Media Advertising Formats <br>
                <p class="mt-3">&amp; expertise in B2B Marketing.</p> -->
             <!--  </h2>
                      <p class="mt-3" style="font-family:Montserrat, sans-serif;font-size:26px;">Discover How AsianHHM Delivers      <br> Quantifiable Branding Objectives through Print Media Advertising
                        </p>    
            <br>
                <a class="btn-style" href="#" style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Learn How</a>
                <p>&nbsp;</p>
            </div>
    </div>
  </div>
</div> -->
<!-- 2nd container End -->

<!-- 3rd container Start -->
<!-- <div class="container-fluid mt-2">
  <div class="row">
    <div class="col-md-12 col-12">
      <div class="img-style">
      <div class="row">
        <div class="col-md-6 col-12 text-center" >
          <div style="background-color:#fff;padding:13px 20px;">
          <h2 class="" style="font-family:Montserrat, sans-serif;">Overview</h2>
          <p class="mt-2" style="font-family:Montserrat, sans-serif;font-size:16px;">
          Get your B2B advertising creatives right in front of the prospects that 
          you really care for. AsianHHM's print magazine and web portal offers all 
          the standard and popular advert formats that you could think of along 
          with tangible performance metrics like; unique readership, repeat visitor 
          to your advertising, leads, average time spent etc. AsianHHM print media 
          circulation is carefully monitored to give you noiseless Marketing ROI 
          and it helps the clients achieve their highest sales and marketing results 
          within the budget.
          </p>
          
        </div>
        </div>
        <div class="col-md-6 col-12 " >
          <div style="background-color:#fff;padding:13px 20px;height:267px;">
                      <p align="center" class="" style="font-family:Montserrat, sans-serif;font-size:26px;">Insights</p> 
           <ul class="li-style">
            <li>12,000 Hard Copy Circulation</li>
            <li>78% Circulation In Asian Region</li>
            <li>85,000 E-Book Circulation</li>
            <li>90% Visitors from Asian Region</li>
           </ul>
        </div>
        </div>  
      </div>
      </div>
    </div>
  </div>
</div> -->
<!-- 3rd container End -->
<!-- 4th container Start -->
<div class="container-fluid mt-5">       
                  <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="img-style">
                              <div class="row">
                              <div class="col-md-4 col-12">
                                <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/webinar-sponserad.png" alt="webinar-sponserad" width="100%">
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/b2b-print-advertising" class="btn-blink" style="color:#fff;font-size:20px;">B2B Print Advertising</a>
                                        </div>                                    
                                </div>
                                </div>
                                <div class="col-md-4 col-12">
                                <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/webinar-sponserad.png" alt="webinar-sponserad" width="100%">
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/print-media-advertising" class="btn-blink" style="color:#fff;font-size:20px;">Print Media Advertising</a>
                                        </div>                                    
                                </div>
                                </div>
                                <div class="col-md-4 col-12">
                                <div class="text-center"> 
                                        <div>
                                          <img src="https://industry.asianhhm.com/promotions/images/webinar-sponserad.png" alt="webinar-sponserad" width="100%">
                                        </div>
                                        <div class="btn-blink" style="width:100%;padding:13px 50px;text-align:center;background-color:#ed1a3b;color:#fff;border-radius:3px;">
                                        <a href="https://www.asianhhm.com/healthcare-marketing/services/b2b-print-advertorial" class="btn-blink" style="color:#fff;font-size:20px;">B2B Print Advertorial</a>
                                        </div>                                    
                                </div>
                                </div>
                              
                              </div>
                              </div>
                        </div>
                  </div>
              </div>
<!-- 4rd container End -->

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
    



@endsection



@section('scripts')



@endsection