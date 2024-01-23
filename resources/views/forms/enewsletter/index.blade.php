@extends('../layouts/app')
@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">

<style>
 .text-white{
    color:#fff !important;
  }
 ul {
   list-style: none;
   color:#c5c2c3 !important;
}
.text-gray{
  color:#c5c2c3 !important;
  line-height:2;
}

.bullet-color::before {
   content:"";  
   padding-right: 15px;
   background-color:#ED1A3B;  
   border:1px solid #000;
    border-radius:50%;  
    line-height:3;
    margin-right:12px;
}

  </style>

@endsection

<script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>



@section('content')
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/e-newsletter')}}" style="color:#fff;">e-Newsletter</a>
              <!-- <a href="" class="ahhm-breadcrumb-item"></a> -->
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid p-0">

        <div class="row p-0">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="row">

<div class="col-12 ahhm-editorial-calendar">

  <div class="row pl-1">

    <div class="col-12">

      <h1 class="mt-0">Sign up for our Newsletter</h1>

    </div>

  </div>

 

  <div class="row mt-3">
    <div class="col-12">
    @if(Session('status') == 'true') 
<h2 style="color: green;" align="center">Thank  You! Your Newsletter Registration was Suceessful</h2>
@endif
      <div class="editorial-calendar-form">
      <div class="row">
<div class="col-md-7">
<div class="">
            <h1  class="text-white">Welcome to Our Healthcare E-Newsletter Community!  Stay Informed, Inspired, and Ahead of the Curve!</h1>
            <p class="text-gray">Get ready to embrace the healthcare world with style and stay on the cutting edge of industry trends! As a subscriber, you will gain valuable access to the latest updates, expert insights, and exclusive content that will keep you informed, inspired, and ahead of the curve.</p>
            <h3  class="text-white">Here are some of the key benefits you can expect:</h3>
            <ul >
              <li class="bullet-color">Stay updated on healthcare trends.</li>
              <li class="bullet-color">Expert insights at your fingertips.</li>
              <li class="bullet-color">Access to exclusive content.</li>
              <li class="bullet-color">Empowerment for informed decisions.</li>
              <li class="bullet-color">Community and engagement.</li>
            </ul>

        </div>
</div>



<div class="col-md-5">

<form  method="post" name="vtiger_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1"> 

@csrf        



<input name="_token" type="hidden" value="{{ csrf_token() }}">

<input type="hidden" name="" class="action_url" value="{{route('enewsletter.post')}}">



<input type="hidden" name="name" value="e-newsletter-subscribe">

<div class="download-form">

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control" name="firstname" placeholder="First Name*" aria-label="Username">

</div>

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control" name="lastname" placeholder="Last Name*" aria-label="Username">

</div>

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control" name="company" placeholder="Company Name*" aria-label="Username">

</div>

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control" name="cf_leads_jobtitle" placeholder="Designation*" aria-label="Username">

</div>

<div class="input-group mb-3 mt-3">

    <input type="email" class="form-control" name="email" placeholder="Your Email ID*" aria-label="Username">

</div>

<div class="input-group mb-3 mt-3">

    <input type="phone" class="form-control" name="mobile" placeholder="Telephone Number*" aria-label="Username">

</div>
<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">


<div class="input-group mb-3 mt-3">

    <textarea type="text" class="form-control" name="description" rows="5" height="10" placeholder="Message" aria-label="Username"></textarea>

</div>

<button type="submit" class="btn btn-ahhmred w-100 mt-3 mb-3">Submit</button>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="" id="box">
  <label class="form-check-label text-gray" for="box">
  I agree to the Terms of Use and Privacy Policy. Please sign me up for the free e-newsletter from AHHM
  </label>
</div>


</div>

</div>
      
      </div>

        


      </div>

    </div>

  </div>  

</div>

</div>            

            </div>

            <!-- // RIGHT SECTION // --> 





  
        </div>



      </div>

<div id="alertModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

     <div class="modal-header">

      <h5 class="modal-title text-danger">Error</h5>

      <button type="button" class="close" data-dismiss="modal">&times;</button>



    </div>

    <div class="modal-body">

      <p class="">Please fill the all required fields....!!</p>





    </div>

    <div class="modal-footer">

     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



   </div>

 </div>

</div>

</div>



@endsection



@section('scripts')




<script type="text/javascript">

      var url = "{{route('enewsletter.post')}}";

      function OnButton1(){

        setTimeout(function(){

            document.vtiger_form.action = url;

            document.vtiger_form.submit();

        },200);

      }  

      function checkform() {  

       var flag = true;

       var form = $('#writemessage');

      if(form.find('select').val() == ''){

         $('#alertModal').modal('show');  

         return false;

       } 

       $("#form_count input").each(function(){



        if($(this)[0].hasAttribute("required")){



          if($(this)[0].value == ""){

            $('#alertModal').modal('show');                 

            flag = false;

          }

        }

      });

       if (!flag) { return false; }

         OnButton1();

     }

</script> 





@endsection