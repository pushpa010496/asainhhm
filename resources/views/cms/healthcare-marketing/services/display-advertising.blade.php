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
        
          font-family:"Montserrat" , sans-serif;
          box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0;
          border: 2px solid #ed1a3b;
          background-color: #fff !important;
          color:#5a5a5a !important;
          
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
    
    .btn-styles {
    padding: 10px 15px;
    background-color: #ebebeb;
    color: #000;
    width: 90%;
    border: none;
    font-size: 15px;
    font-weight: bold;
}

.navbar-large{
      margin-left:4%;
    }

.btn-styles:hover{        

/* box-shadow: rgba(95,93,93,0.2) 0 2px 8px 0; */
border: 2px solid #ef2947;
background-color: #ef2947;
color: #fff !important;
font-weight: bold;
border: none;
font-size: 15px;
padding: 10px 15px;
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
                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('healthcare-marketing/services/display-banner-advertising')}}"
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
              <a href="" class="ahhm-breadcrumb-item">Display Advertising</a>
          </div>
        </div>
      </div>
    </div> -->


    <div class="container-fluid p-0 m-0">       
      <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 m-0">
                <div class="p-0 m-0">
                  <img class="p-0 m-0" src="https://industry.asianhhm.com/promotions/images/display-advertising-main-banner.jpg" alt="display-advertising-main-banner" width="100%">
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
            <h1 class="font-40" style="font-family:Montserrat, sans-serif;">Display Banner Advertising</h1>
            <p class="pt-2 mb-3" style="font-family:Montserrat, sans-serif;font-size:21px;">Strengthen you Brand Visibility with 
        B2B Banner Advertising
        </p>
             
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
        AsianHHM offers a diverse selection of display advertising solutions,
    providing various options for placements, share of voice (SOV), and 
    banner sizes. It's an unbeatable choice for marketers seeking a 
    highly targeted B2B audience across multiple geographical regions.
    Our display advertising programs guarantee quantifiable branding,
    behavioral insights, and comprehensive reporting with segmentation
    capabilities. With us, you can confidently optimize your campaigns
    and gain valuable insights into your audience's behaviour.
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
            <div class="  text-center content-style">
                <h2  class="mt-4" style="font-family:Montserrat, sans-serif;">Take the Guesswork Out of Your Display Advertising
                    <p class="mt-3">Get a grip on your </p>
                  </h2>
                    <p class="mb-4" style="font-family:Montserrat, sans-serif;font-size:26px;">Visibility | Brand Equity | Engagement</p>
                    <a class="btn-style" data-toggle="modal" data-target="#registerform" style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Learn More</a>
                    <p>&nbsp;</p>
            </div> 
          </div>
        </div>
        </div>
    
    
    <!-- 3rd row End -->


 <!-- 4th row start -->
 
    <div class="container-fluid mt-5 shadow">       
        <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="content-style">

                <h4 class="mb-5 mt-3" style="text-transform: capitalize;font-size: 26px;font-weight: 600;line-height: 31px;">Available Banner Options</h4>
                <div class="row">
                    <div class="col-md-3 p-3">
                    <button class="btn-styles mb-2" onclick="changeImage1()">Primary Banner</button><br>
                    <button class="btn-styles mb-2" onclick="changeImage2()">Sky Tower Banner</button><br>
                    <button class="btn-styles mb-2" onclick="changeImage3()">Leader board Banner</button><br>
                    <button class="btn-styles mb-2" onclick="changeImage4()">Top/Full Banner</button><br>
                    <button class="btn-styles mb-2" onclick="changeImage5()">Square Banner</button><br>
                    <button class="btn-styles mb-2" onclick="changeImage6()">Base Banner</button> <br>                   
                    </div>
                    
                    <div class="col-md-9 d-flex justify-content-sm-center" style="box-shadow: 10px 10px 50px #ccc;">
                <div class="">
                    <img id="image" src="https://industry.asianhhm.com/promotions/images/prime-banner.jpg" >
                    </div>
                    </div>
                    
                    </div>
                    </div>
              </div>
        </div>
    </div>




<!-- 4th row End -->

<!-- 5th container Start -->
<div class="container-fluid mt-5">
<div class="row">
<div class="col-md-12 col-12">
<div class=" text-center content-style">
<h2  class="mt-4" style="font-family:Montserrat, sans-serif;">Not sure which banner type would suit you the best?<br></h2>
<p class="mb-5" style="font-family:Montserrat, sans-serif;font-size:26px;">Speak to our Subject Matter Expert (SME)…Today!</p>
<a class="btn-style" data-toggle="modal" data-target="#registerform" style="font-family:Montserrat, sans-serif;width:50%;text-align:center;background-color:#ed1a3b;color:#fff;font-size:20px;padding:10px 30px;border-radius:3px;">Learn more</a>
<p>&nbsp;</p>

</div> 
</div>
</div>
</div>
 <!-- 5th container End -->
    
<!-- 6th row start --> 
<div class="container-fluid mt-5 mb-5">       
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="img-style">
<div class="row mb-5">
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
<a href="https://www.asianhhm.com/healthcare-marketing/services/geo-targeted-display" class="btn-Sponsored" style="color:#fff;font-size:20px;">Targeted Display Ads</a>                                    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    
    <!-- 6th row End -->
    

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
            <form action="{{ route('displayAdvertising.post') }}" method="post" id="writemessage">
               @csrf
              		
                    	<input type="hidden" name="formtype" value="modal-form">
                      <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                 
                    <input type="hidden" name="client_subject" value="Thank you – Book free consultation - Asianhhm">
                    <input type="hidden" name="admin_subject" value="Book free consultation –  Display Banner advertising – Asianhhm">
                    <input type="hidden" name="client_message" value="Thank you for your interest in knowing the various advertising and branding options with AsianHHM.">
                    <input type="hidden" name="site_name" value="PharmaFocusAsia">
                    <input type="hidden" name="thank_message" value="Thank you for showing interest in Increase Reach With B2B Display Marketing. One of our team will get back to you soon and the details will be e-mailed to you.">
                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control advertising" id="first_name" name="firstname" placeholder="First Name*" value="" required="">
                            </div>
                      
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control advertising" id="last_name" name="lastname" placeholder="Last Name*" value="" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12 mb-3">
                            <input type="text" class="form-control advertising" name="company" placeholder="Company Name*" aria-label="Username" required="">
                            </div>
                      
                            <div class="col-12 mb-3">
                            <input type="text" class="form-control advertising" name="job_title" placeholder="Job Title *" aria-label="Username" required="">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-row">
                            <div class="col-12  mb-3">
                                <div class="form-group ">
                                <input type="email" class="form-control advertising" name="email" placeholder="Business Email ID*" aria-label="Username" required="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="col-12  mb-3">
                                <div class="form-group ">
                                <input type="text" class="form-control advertising" name="phone" id="phone" placeholder="Telephone*" value="" required="">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group  arrow mb-3 ">
                        <select class="form-control advertising" name="services" required="" value="">
                        <option selected="">Select Service</option>

                        <option value="Print Advertisements">Print Advertisements</option>

                        <option value="Advertorials">Advertorials</option>

                        <option value="Product Launches">Product Launches</option>

                        </select>
                        </select>
                        <span class="help-block"></span>
                        </div>


                  <div class="form-group mb-5">

                  <select class="form-control advertising" name="country" aria-label=".form-select-lg example" required>
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

<script>

var image = document.querySelector('#image');

function changeImage1() {
    image.src = 'https://industry.asianhhm.com/promotions/images/prime-banner.jpg';
}
 function changeImage2() {
    image.src = 'https://industry.asianhhm.com/promotions/images/sky-tower-banner.jpg';
}
function changeImage3() {
    image.src = 'https://industry.asianhhm.com/promotions/images/leader-baord-banner.jpg';
}
function changeImage4() {
    image.src = 'https://industry.asianhhm.com/promotions/images/top-full-banner.jpg';
}
function changeImage5() {
    image.src = 'https://industry.asianhhm.com/promotions/images/square-banner.jpg';
}
function changeImage6() {
    image.src = 'https://industry.asianhhm.com/promotions/images/base-banner.jpg';
}

</script>

@if(Session('status') == 'true') 
  <script type="text/javascript">
			$('#myModal').modal('show');

</script>
@endif
@endsection


