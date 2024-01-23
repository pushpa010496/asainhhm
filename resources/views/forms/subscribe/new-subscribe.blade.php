@extends('../layouts/app')
@section('style')
  <meta property="og:image" content="https://industry.asianhhm.com/images/ahhm-advertise-og.jpg" />
  <style>
    .gray{
      color: #c5c2c3;
    }
</style>

<script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>
@endsection
@section('content')

    <!--breadcrumb-->
    <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
        <div class="ahhm-breadcrumb">
              <a href="" class="ahhm-breadcrumb-item">Register</a>
          </div>
         </div>
      </div>
    </div>
    <!--/breadcrumb-->


    <!--content div-->
    <div class="container-fluid">
      <!--advertise section-->
      <div class="row">
        <div class="col-12 ahhm-advertise-services">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0" style="font-size:40px;">Asia's Healthcare Revolution: Join the Vanguard with AHHM Magazine!</h1>
            </div>
          </div>
         
          <div class="row mt-3">
            <div class="col-12">
              <div class="services-wrapper">
                <div class="row">
                  <div class="col-md-5">
                  <div class="services">
                    <h1 style="color:#fff;font-size:40px;line-height: 5rem;">Unlock the Power of Healthcare Knowledge: Subscribe with Us and Stay Ahead in the Industry!</h1>
                   
                   <p class="gray mt-4">Stay informed and connected with the latest in healthcare by subscribing with us. Our platform delivers valuable insights, expert analysis, and exclusive content straight to your inbox.</p>
                   <p class="gray">Don't miss out on the opportunity to elevate your healthcare knowledge and be part of our vibrant community. Subscribe with us today and unlock a world of healthcare insights.</p>
                   <p class="gray">Sign up now and embark on a journey of knowledge, innovation, and growth in the healthcare domain.</p>
                </div>
                  </div>
                  <div class="col-md-7">
                                  <div class="download-form">
  
                                          <form action="{{ route('register.post') }}" method="post">
                                          @csrf
                                              <h3>Register to Learn More & Download Media Pack</h3>
                                              <div class="input-group mb-3 mt-3">
                                                  <input type="text" class="form-control" name="firstname" placeholder="First Name*" aria-label="Username" required>
                                              </div>
                                              <div class="input-group mb-3 mt-3">
                                                  <input type="text" class="form-control" name="lastname"placeholder="Last Name*" aria-label="Username" required>
                                              </div>
                                              <div class="input-group mb-3 mt-3">
                                                  <input type="text" class="form-control"name="company" placeholder="Company Name*" aria-label="Username" required>
                                              </div>
                                                            <div class="input-group mb-3 mt-3">
                                                  <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" name="email" placeholder="Your Email ID*" aria-label="Username" required>
                                                  @if ($errors->has('email'))
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
    @endif
                                              </div>
                                              <div class="input-group mb-3 mt-3">
                                                  <input type="phone" class="form-control" name="phone" placeholder="Telephone Number*" aria-label="Username" required>
                                              </div>
                                              <div class="input-group mb-3 mt-3">
                                                  <input type="password" class="form-control" name="password" placeholder="Password*" aria-label="Username" required>
                                              </div>
                                              <div class="input-group mb-3 mt-3 arrow {{ $errors->first('country', 'has-error')}}">
                                              {{ Form::select('country', $countries, null, ['class' => 'form-control custom-select','required'=>'required']) }}

                                              <span class="help-block">{{ $errors->first('country', ':message') }}</span> 
                                              </div>
                                              <button type="submit" class="btn btn-ahhmred">Submit</button>
                                              @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color:red;">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                              </form>
                                   </div>
                  </div>
                </div>


                
               
              
               
              </div>
            </div>
          </div>
        
          
        </div>




      </div>
      <!--/advertise section-->
    </div>
    <!--/content div-->


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

      var url = "{{ route('advertise.post') }}";

      function OnButton1(){

        setTimeout(function(){

            document.advertise_form.action = url;

        document.advertise_form.submit();

        },200);

      }

    

      function checkform() {      

       var flag = true;

       var form = $('#writemessage');

       $("#writemessage input").each(function(){

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