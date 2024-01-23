@extends('../layouts/app')



@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
<style>
  .text-gray{
  color:#c5c2c3 !important;
  line-height:2;
}
.text-white{
  color:#fff !important;
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
              <a href="{{ url('/magazine') }}" class="ahhm-breadcrumb-item">Magazine</a>
              <a href="" class="ahhm-breadcrumb-item">{{ str_replace('-', ' ', ucwords(Request::segment(count(Request::segments())))) }}</a>
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

      <h1 class="mt-0">Editorial Calendar</h1>

    </div>

  </div>

 

  <div class="row mt-3">

    <div class="col-12">

      <div class="editorial-calendar-form">

      <div class="row">
      <div class="col-md-7">
                  <div class="">

                            <h1 class="text-white mb-3">Introducing Our Healthcare Editorial Calendar: Stay Informed and Engaged All Year Round! </h1>
                            <p class="text-gray">Welcome to our Healthcare Editorial Calendar page! Here, you'll find a curated guide to the engaging content we have planned for you throughout the year. We believe in keeping you informed and empowered in the ever-evolving healthcare industry.</p>
                              <p class="text-gray">Our Editorial Calendar covers a diverse range of topics, ensuring that you have access to the information that matters most to you. We have designed it with your needs in mind, offering a roadmap to the captivating articles that await you.</p>
                              <p class="text-gray">Bookmark this page and stay tuned to our Editorial Calendar for valuable information that enhances your healthcare knowledge. We are committed to empowering you to make informed decisions and stay ahead in healthcare.</p>
                   </div>

      </div>
  
      <div class="col-md-5">
      <form action="{{route('editorialcalendar.post')}}" method="post" id="writemessage">

<input name="_token" type="hidden" value="{{ csrf_token() }}">
                

<input type="hidden" name="name" value="editorial-calendar">

<input type="hidden" value="editorial-calendar" name="type" id="type">

      <div class="download-form">

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control" name="firstname" placeholder="First Name*" aria-label="Username">

</div>
<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

<div class="input-group mb-3 mt-3">

    <input type="text" class="form-control"  name="lastname" placeholder="Last Name*" aria-label="Username">

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

<div class="input-group mb-3 mt-3">

    <textarea type="text" class="form-control" name="description"rows="5" height="10" placeholder="Message" aria-label="Username">

    </textarea>

</div>

<button type="submit" class="btn btn-ahhmred w-100 mt-3 mb-3">Submit</button>


</div>
 
      </div>
      </form>
      </div>
       

       

      </div>

    </div>

  </div>

  

  

</div>









</div>

              <!-- <div class="row form-container">



                  <div class="col-lg-10 offset-lg-1"> 



                    <h1 class="text-center form-title pt-3">EDITORIAL CALENDAR DOWNLOAD</h1>

                    <form action="{{route('editorialcalendar.post')}}" method="post" name="vtiger_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">

                    <form  method="post" name="vtiger_form" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">         



                      <input name="_token" type="hidden" value="{{ csrf_token() }}">

                      <input type="hidden" name="" class="action_url" value="{{route('editorialcalendar.post')}}">

                      

                      <input type="hidden" name="name" value="editorial-calendar">

                      <input type="hidden" value="editorial-calendar" name="type" id="type">



                      <div class="form-group col-lg-12 {{ $errors->first('firstname', 'has-error')}}">

                        <input type="text" class="form-control" value="{{old('firstname')}}" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">

                        <span class="help-block">{{ $errors->first('firstname', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12   {{ $errors->first('lastname', 'has-error')}}">

                        <input type="text" class="form-control" value="{{old('lastname')}}" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">

                        <span class="help-block">{{ $errors->first('lastname', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12  {{ $errors->first('email', 'has-error')}}">

                        <input type="email*" class="form-control" value="{{old('email')}}" name="email" placeholder="Business Email*" required="">

                         <span class="help-block">{{ $errors->first('email', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12  {{ $errors->first('mobile', 'has-error')}}">

                        <input type="text" class="form-control" value="{{old('mobile')}}" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">

                        <span class="help-block">{{ $errors->first('mobile', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12  {{ $errors->first('company', 'has-error')}}">

                        <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                        <span class="help-block">{{ $errors->first('company', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12  {{ $errors->first('cf_leads_jobtitle', 'has-error')}}">

                        <input type="text" class="form-control" value="{{old('cf_leads_jobtitle')}}" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                        <span class="help-block">{{ $errors->first('cf_leads_jobtitle', ':message') }}</span>

                      </div>



                      <div class="form-group col-lg-12  {{ $errors->first('description', 'has-error')}}">

                        <textarea class="form-control" type="textarea" name="description" placeholder="Message" maxlength="140" rows="3">{{old('description')}}</textarea>

                        <span class="help-block">{{ $errors->first('description', ':message') }}</span>

                      </div>



                      <div class="form-group col-12">

                        <div class="grecaptcha-badge"></div>

                      </div>



                      <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">



                       <div class="form-group col-lg-12  {{ $errors->first('g-recaptcha-response', 'has-error')}}">

                         {!! Form::captcha() !!}

                         @if ($errors->has('g-recaptcha-response'))

                         <div class="error text-danger">{{ $errors->first('g-recaptcha-response') }}</div>

                         @endif

                         <div style="color: #d77878" class="verifi"></div>



                     </div> 

                      

                        <div class="form-group col-lg-12">


                          <input type="submit" class="btn submit-form btn-block PF-MTB10 PF-MB20" id="submit-button" value="SUBMIT" >

                        

                      </div>

                    </form>



                  <div class="clearfix"></div>



                  <div class="PF-MB20"></div>



                </div> 

              </div>  -->

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

      var url = "{{url('mediapacks')}}";

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