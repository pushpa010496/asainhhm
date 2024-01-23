<nav class="navbar-expand-lg ahhm-branding mt-5" class="nav-responsivie1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-6"> <a class="navbar-brand logo" href="{{url('/')}}"> <img src="{{config('app.url')}}images/ahhm-logo.png" alt="asianHHM Logo"> </a> </div>
            <div class="col-md-3 col-6 p-0">
                 {{Form::open(['url' => 'search'])}}
                <div class="input-group ahhm-search" id="main-search"> <input type="text" class="form-control" name="q" placeholder="" id="autoComplete" aria-label="Recipient's username" aria-describedby="button-addon2"> <!-- <span style="padding-left:50px;">&nbsp;</span> --> <button class="btn js-search" type="button"> <img src="{{config('app.url')}}images/search.svg" alt="search-icon"> </button> 
            </div> {{Form::close()}}
            </div>
            <div class="col-md-2">
                <div class="navbar-nav secondary-nav"> <button class="primary-navbar-toggler" type="button"> <span class="primary-navbar-toggler-icon"></span> </button>
                    <ul style="list-style-type:none;margin:0px;padding:0px;">
                  
                        <li class="nav-item"> <a class="nav-link" href="{{url('/mediapacks')}}">Media Pack</a> </li>
                        <!-- <li class="nav-item"> <a class="nav-link" href="{{url('/login')}}">Login</a> </li> -->
                    </ul> 
                    <!-- <a href="{{url('/register')}}" class="btn btn-ahhmblk btn-ahhmblk-sm" style="color:#fff;">Register</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>
<!--/secondary Navbar-->
<!--header container-->
<header>
    <nav class="ahhm-navbar navbar yamm ahhm-branding navbar-expand-lg ">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="padding-left:15%;">
                <li class=""> <a href="/">Home</a> </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/editorialsection')}}" class="dropdown-toggle"> Editorial Section </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2">
                                            <li class="active"> <a href="{{url('/healthcare-management')}}"> Healthcare Management <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/medical-sciences')}}"> Medical Sciences <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/surgical-speciality')}}"> Surgical Speciality <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/diagnostics')}}"> Diagnostics <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/technology-equipment')}}"> Technology, Equipment & Devices <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/facilities-operations')}}"> Facilities & Operations <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/information-technology')}}"> Information Technology <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/advertorials')}}"> Advertorials <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
</div></div></div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/magazinesection')}}" class="dropdown-toggle"> Magazine </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2">
                                            <li class="active"> <a href="{{url('/magazine')}}"> Current Issue&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/archives')}}"> Previous Issue <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/forthcoming-issue')}}"> Forthcoming Issue <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/e-book')}}"> e-Book Archives <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/foreword')}}"> Foreword&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/author-guidelines')}}"> Author Guidelines <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/advisory-board')}}"> Advisory Board <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/editorial-calendar')}}"> Editorial Calendar <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/testimonials')}}"> Testimonials <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                             
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/knowledgebank')}}" class="dropdown-toggle"> Knowledge Bank </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2">
                                            <li class="active"> <a href="{{url('/articles')}}"> Articles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/interviews')}}"> Interviews&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/technotrends')}}"> Techno Trends&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/projects')}}"> Projects&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/healthcare-reports')}}"> Industry Reports&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/researchinsights')}}"> Research Insights&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/bookshelf')}}"> Book Shelf&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/casestudies')}}"> Case Studies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/whitepapers')}}"> White Papers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                    
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/industryupdates')}}" class="dropdown-toggle"> Industry Updates </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/news')}}"> News&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/pressreleases')}}"> Press Releases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/events')}}"> Events&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/webinars')}}"> Webinars&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                               
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/healthcare-marketing/services')}}" class="dropdown-toggle"> Advertise </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2">
                                        <li class="active"> <a href="{{url('/advertise')}}"> Advertise With Us <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/healthcare-marketing/display-advertising-solutions')}}"> Display Advertising<br> Solutions <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/healthcare-marketing/marketing-strategy-solutions')}}"> Marketing Strategy<br> Solutions <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/healthcare-marketing/printmedia-solutions')}}"> Print Media Solutions <i class="fa fa-chevron-right"></i> </a> </li>
                                         
                                            
                                            <li class=""> <a href="{{url('/mediapacks')}}"> Mediapack&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/clients')}}"> Clientele&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10">
                                         
                                            <div class="tab-pane" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                              
                                                            </div>
                                                     
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                                <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/display-advertising')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/display-advertising.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/display-advertising')}}" class="name">Display Advertising</a>
                                                                </div>
                                                            </div>
                                                        </li><li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/newsletter-sponsorship')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/newsletter-sponsorship.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/newsletter-sponsorship')}}" class="name">Newsletter Sponsorship</a>
                                                                </div>
                                                            </div>
                                                        </li><li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/targeted-display-advertising')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/targeted-display-advertising.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/targeted-display-advertising')}}" class="name">Targeted Display Advertising</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                                <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/sponsored-webinar-series')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/sponsored-webinar-series.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/sponsored-webinar-series')}}" class="name">Sponsored Webinar Series</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/surveys-assessments')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/surveys-assessments.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/surveys-assessments')}}" class="name">Surveys Assessments</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/content-syndication')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/content-syndication.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/content-syndication')}}" class="name">Content Syndication</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/account-based-marketing')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/account-based-marketing.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/account-based-marketing')}}" class="name">Account Based Marketing</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/email-marketing')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/email-marketing.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/email-marketing')}}" class="name">Email Marketing</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/webinars')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/webinars.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/webinars')}}" class="name">Webinars</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/print-advertising')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/print-advertising.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/print-advertising')}}" class="name"> Print Advertising</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/healthcare-marketing/services/advertorial')}}"> <img alt=""  src="{{ config('app.url')}}images/advertise/advertorial.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/healthcare-marketing/services/advertorial')}}" class="name"> Advertorial</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div><div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                               
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
               -->


                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/advertise')}}" class="dropdown-toggle"> Advertise </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                    <ul style="display:flex !important;column-gap:241px !important;" class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2">
                                            <li class=""> &nbsp; </li>
                                        </ul>
                                        <div class="tab-content col-md-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="pl-5" style="list-style-type:none;">
                                                    <li> <a href="{{ url('healthcare-marketing/b2b-display-advertising') }}">Dispaly Advertising</a>
                                                    <ul  style="padding-left:25px !important;list-style-type:none;">
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/display-banner-advertising') }}">Banner Advertising</a></li>
                                                    <li><a class="chitti"  href="{{ url('healthcare-marketing/services/geo-targeted-display') }}">Targeted Display Ads</a></li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                              <ul style="list-style-type:none;">
                                                    <li> <a href="{{ url('healthcare-marketing/services/content-syndication') }}">Content Syndication</a></li>
                                                    <ul style="padding-left:25px !important;list-style-type:none;">
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/account-based-marketing') }}">Account Based Marketing</a></li>
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/b2b-surveys-assessments') }}">Surveys & Assessments</a></li>
                                                    <li><a class="chitti"  href="{{ url('healthcare-marketing/services/b2b-microsites') }}">Microsites</a></li>
                                                    </ul>
                                                    </li>
                                             </ul>
                                             </div>  

                                            <div class="col-md-4">
                                                <ul style="list-style-type:none;">
                                                    <li><a href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">Print Advertising</a>
                                                    <ul style="padding-left:25px !important;list-style-type:none;">
                                                    <li> <a class="chitti" href="{{ url('healthcare-marketing/services/ebook-advertising') }}">E-Book</a></li>
                                                    <li> <a class="chitti" href="{{ url('healthcare-marketing/services/print-media-advertising') }}">Print Media</a></li>
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/b2b-print-advertorial') }}">Advertorials</a></li>
                                                      </ul>
                                                    </li>
                                                </ul>
                                        </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                    <ul style="list-style-type:none;">
                                                        <li> <a href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">Targeted Mail Marketing</a>
                                                        <ul style="padding-left:25px !important;list-style-type:none;">
                                                        <li> <a class="chitti" href="{{ url('healthcare-marketing/services/newsletter-sponsorship') }}">Newsletters</a></li>
                                                        <li> <a class="chitti" href="{{ url('healthcare-marketing/services/b2b-email-marketing') }}">Electronic Direct Mail</a></li>
                                                    <ul>
                                                        </li>
                                                    <ul>
                                            </div>
                                            <div class="col-md-4">
                                                 <ul style="list-style-type:none;">
                                                   <li > <a href="{{ url('healthcare-marketing/services/webinars') }}">Webinars</a>
                                                   <ul style="padding-left:25px !important;list-style-type:none;">
                                                  <li> <a class="chitti" href="{{ url('healthcare-marketing/services/sponsored-webinar-series') }}">Sponsored Webinar Series</a></li>
                                                  <ul>
                                                </li>
                                                </ul>
                                          </div>
                                            <div class="col-md-4">
                                                <ul style="list-style-type:none;">
                                                    <li > <a href="{{ url('mediapacks') }}">Media Pack</a></li>
                                                    <li > <a  href="{{ url('clients') }}">Clientele</a></li>
                                                </ul>
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                   <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/subscribe')}}" class="dropdown-toggle"> Subscribe </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/e-newsletter-subscribe')}}">e-Newsletter Subscription<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/subscribe')}}"> Magazine Subscription <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                       
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Mobile Responsive navbar -->

    
      <!--primary Nav-->


      <nav class="navbar navbar-expand-lg ahhm-primary-nav" id="navbar" class="nav-responsivie2">
<div class="container w-auto">
  <div class="collapse navbar-collapse show" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/editorialsection')}}" id="button1"  data-bs-toggle="dropdown" aria-expanded="false" >
          Editorial Section
        </a>
        <ul class="dropdown-menu" aria-labelledby="button1">
          <li><a class="dropdown-item" href="{{url('/healthcare-management')}}">Healthcare Management</a></li>
          <li><a class="dropdown-item" href="{{url('/medical-sciences')}}">Medical Sciences</a></li>
          <li><a class="dropdown-item" href="{{url('/surgical-speciality')}}">Surgical Speciality</a></li>
          <li><a class="dropdown-item" href="{{url('/diagnostics')}}">Diagnostics</a></li>
          <li><a class="dropdown-item" href="{{url('/technology-equipment')}}">Technology, Equipment & Devices</a></li>
          <li><a class="dropdown-item" href="{{url('/facilities-operations')}}">Facilities & Operations</a></li>
          <li><a class="dropdown-item" href="{{url('/information-technology')}}">Information Technology</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/magazinesection')}}"  id="button2"  data-bs-toggle="dropdown" aria-expanded="false">
          Magazine
        </a>
        <ul class="dropdown-menu" aria-labelledby="button2">
          <li><a class="dropdown-item" href="{{url('/magazine')}}">Current Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/archives')}}">Previous Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/forthcoming-issue')}}">Forthcoming Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/e-book')}}">e-Book Archives</a></li>
          <li><a class="dropdown-item" href="{{url('/foreword')}}">Foreword</a></li>
          <li><a class="dropdown-item" href="{{url('/author-guidelines')}}">Author Guidelines</a></li>
          <li><a class="dropdown-item" href="{{url('/advisory-board')}}">Advisory Board</a></li>
         <li><a class="dropdown-item" href="{{url('/editorial-calendar')}}">Editorial Calendar</a></li>
          <li><a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/knowledgebank')}}" id="button3"  data-bs-toggle="dropdown" aria-expanded="false">
          Knowledge Bank
        </a>
        <ul class="dropdown-menu" aria-labelledby="button3">
          <li><a class="dropdown-item" href="{{url('/articles')}}">Articles</a></li>
          <li><a class="dropdown-item" href="{{url('/interviews')}}">Interviews</a></li>
          <li><a class="dropdown-item" href="{{url('/technotrends')}}">Techno Trends</a></li>
          <li><a class="dropdown-item" href="{{url('/projects')}}">Projects</a></li>
          <li><a class="dropdown-item" href="{{url('/healthcare-reports')}}">Industry Reports</a></li>
          <li><a class="dropdown-item" href="{{url('/researchinsights')}}">Research Insights</a></li>
          <li><a class="dropdown-item" href="{{url('/bookshelf')}}">Book Shelf</a></li>
          <li><a class="dropdown-item" href="{{url('/casestudies')}}">Case Studies</a></li>
          <li><a class="dropdown-item" href="{{url('/whitepapers')}}">White Papers</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/industryupdates')}}" id="button4"  data-bs-toggle="dropdown" aria-expanded="false">
         Industry Update
        </a>
        <ul class="dropdown-menu" aria-labelledby="button4">
        <li><a class="dropdown-item" href="{{url('/news')}}">News</a></li>
        <li><a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a></li>
        <li><a class="dropdown-item" href="{{url('/events')}}">Events</a></li>
        <li><a class="dropdown-item" href="{{url('/webinars')}}">Webinars</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/advertise')}}" id="button5"  data-bs-toggle="dropdown" aria-expanded="false">
          Advertise
        </a>
        <ul class="dropdown-menu" aria-labelledby="button5">           
        
                <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/b2b-display-advertising') }}"><b>Dispaly Advertising</b></a>
                        <ul  style="padding-left:30px !important;list-style-type:none;">
                                <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/display-banner-advertising') }}">Banner Advertising</a></li>
                                <li><a class="dropdown-item"  href="{{ url('healthcare-marketing/services/geo-targeted-display') }}">Targeted Display Ads</a></li>
                         </ul>
                </li>
                <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/content-syndication') }}"><b>Content Syndication</b></a></li>
                            <ul style="padding-left:30px !important;list-style-type:none;">
                                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/account-based-marketing') }}">Account Based Marketing</a></li>
                                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-surveys-assessments') }}">Surveys & Assessments</a></li>
                                    <li><a class="dropdown-item"  href="{{ url('healthcare-marketing/services/b2b-microsites') }}">Microsites</a></li>
                             </ul>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}"><b>Print Advertising</b></a>
                            <ul style="padding-left:30px !important;list-style-type:none;">
                                    <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/ebook-advertising') }}">E-Book</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/print-media-advertising') }}">Print Media</a></li>
                                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-print-advertorial') }}">Advertorials</a></li>
                             </ul>
                    </li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}"><b>Targeted Mail Marketing</b></a>
                                <ul style="padding-left:30px !important;list-style-type:none;">
                                    <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/newsletter-sponsorship') }}">Newsletters</a></li>
                                    <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-email-marketing') }}">Electronic Direct Mail</a></li>
                                 </ul>
                        </li>
                        <li > <a class="dropdown-item" href="{{ url('healthcare-marketing/services/webinars') }}"><b>Webinars</b></a>
                                     <ul style="padding-left:30px !important;list-style-type:none;">
                                    <li> <a class="dropdown-item" href="{{ url('healthcare-marketing/services/sponsored-webinar-series') }}">Sponsored Webinar servic</a></li>
                                     </ul> 
                        </li>
                    <li > <a class="dropdown-item" href="{{ url('mediapacks') }}"><b>Media Pack</b></a></li>
                    <li > <a class="dropdown-item"  href="{{ url('clients') }}"><b>Clientele</b></a></li>  
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" aria-current="page" href="{{url('/subscribe')}}" id="button7"  data-bs-toggle="dropdown" aria-expanded="false">Subscribe</a>
        <ul class="dropdown-menu" aria-labelledby="button7">
            <li><a class="dropdown-item" href="{{url('/e-newsletter-subscribe')}}"> e-Newsletter Subscription </a></li>
            <li><a class="dropdown-item" href="{{url('/subscribe')}}"> Magazine Subscription </a></li>
        </ul>
    </li>
    </ul>
  </div>
</div>
</nav>

<!--/primary Nav-->

 <!-- Mobile Responsive navbar -->