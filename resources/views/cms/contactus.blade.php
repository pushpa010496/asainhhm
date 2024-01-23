@extends('../layouts/app')

@section('style')


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

<style>

.PF-BrdrDDD {
    border: 1px solid #DDD;
}

.pt-2, .py-2 {
    padding-top: 0.5rem!important;
}

.pl-3, .px-3 {
    padding-left: 1rem!important;
}

.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.pl-4, .px-4 {
    padding-left: 1.5rem!important;
}


.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    width:100%;
}

.heading {
    font-size: 20px;
    font-weight: bold;
    color: red;
}
.header {
    margin: 0px !important;
    font-size: 23px;
    padding: 10px;
    font-weight: bold;
    color: red;
}

h3 {
    font-family: "Montserrat", sans-serif;
    font-size: 1.4rem;
   font-weight:normal;
    line-height: 2.3rem;
    color: #231F20 !important;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
    margin-bottom: 0.5rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit;
}




legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

fieldset {
    display: block;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 1.2em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: #000;
}

.advertising {
  max-width: 79% !important;
}
.input-group{
  padding:0px !important;
}

.btn-primary {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
    padding: 6px 13px;
    font-size:16px;
}


.modal-header {
    padding: 1rem;
}

.modal-body {
  border-top: 1px solid #e9ecef;
  border-bottom: 1px solid #e9ecef;
    padding: 1rem;
}
</style>





<div class="container-fluid breadcrumb-live">
      <div class="row mb-3">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/magazine') }}" style="color:#fff;">Contact Us</a>
          </div>
        </div>
      </div>
    </div>




      <div class="container mb-3">    



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-12 col-12 PF-BrdrDDD p-1 pl-4">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <!-- <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">Reach us at</h1> 

                </div> -->



                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3" style="margin-bottom: 1rem!important; padding-left: 1rem!important;">
                  <h1 class="PF-Bshelf " style="font-size:22px;margin-top: 1rem;border-bottom: 1px solid red;">Reach us at</h1>
                </div>


                


                <div class="row pl-3">
                  <div class="col-md-4">
                    <h3>Editorial Coverage</h3>
                  </div>
                  <div class="col-md-3">
                    <p class="page_speed_1346035751">
                      <a href="mailto:editorial@asianhhm.com?subject=Contact Asianhhm Editor&amp;cc=info@asianhhm.com&amp;bcc=web@ochre-media.com">editorial@asianhhm.com</a>
                    </p>
                  </div>
                </div>

             
                <div class="row pl-3">
                  <div class="col-md-4">
                    <h3>Advertising Opportunities</h3>
                  </div>
                  <div class="col-md-3">
                    <p class="page_speed_1346035751">
                      <a href="mailto:advertise@asianhhm.com?subject=Contact Asianhhm for Advertising&amp;cc=info@asianhhm.com&amp;bcc=web@ochre-media.com">advertise@asianhhm.com</a>
                    </p>
                  </div>
                </div>


              </div>


              

              <div class="row pl-4">
                <div class="col-md-8 mb-2 p-0">
                <fieldset>
                  <legend class="advertising">
                    <h6 class="header">Advertising &amp; Marketing Enquiries</h6>
                  </legend>
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="heading">Asia</h4>
                      <div class="bold font-16">John Milton</div>
                      <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="heading">EMEA</h4>
                      <div class="bold font-16">Peter Thomas</div>
                      <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <h4 class="heading">North America</h4>
                      <div class="bold font-16">Jeff Kenney</div>
                      <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
                    </div>
                    <div class="col-lg-6">
                      <h4 class="heading">Media Partnership</h4>
                      <div class="bold font-16">Sussane Vincent</div>
                      <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>





</div>

            <!-- // RIGHT SECTION // --> 



            <!--// RIGHT SECTION - Square Banners -->

            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center mt-3">               

              <div class="bg-gray border-secondary">

                <div class="text-center">

                  {{-- <h3 class="adv-title">Advertisements</h3> --}}

                </div>



                 <!-- Square Banner -->

                  @include('layouts.partials._square_banner')

                <!-- End Square Banner -->

              </div>

            </div>

            <!-- RIGHT SECTION - Square Banners // --> 

        </div>
    </div>



<!-- model start -->
<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

      <div class="modal-dialog">
            <div class="modal-content" style="padding:1rem !important;background-color:#f7f7f7 !important;">
                           <div class="modal-header">
                            <h2 class="modal-title text-center">Register to Contact</h2>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                          </div>
            <div class="modal-body">
                  <div class="pt-2"></div>
                          <div class="" style=" margin-left:0px !important;">
                          <form action="{{route('contactUs.post')}}" method="post" id="form_count">             
                          @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="firstname" placeholder="First Name*" aria-label="Username" required>
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="lastname"placeholder="Last Name*" aria-label="Username" required>
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <input type="email" class="form-control" name="email" placeholder="Your Email ID*" aria-label="Username" required>
                              </div>
                              <div class="input-group mb-3 mt-3">
                                <input type="phone" class="form-control" name="phone" placeholder="Telephone Number*" aria-label="Username" required>
                            </div>
                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control"name="company" placeholder="Company Name*" aria-label="Username" required>
                            </div>
                                                    
                            <div class="input-group mb-3 mt-3">
                                <input type="text" class="form-control" name="job_title" placeholder="Job Title*" aria-label="Username" required>
                            </div>
                            <div class="input-group mb-3 mt-3">
                            <textarea rows="4" class="form-control" placeholder="Query" name="description" cols="50" style="font-size:1.4rem !important;padding:10px 15px; "></textarea>
                            </div>
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                            <button type="submit" class="btn btn-ahhmred w-100">Submit</button>
                            </form>
                        </div>
             </div>
    </div>
  </div>   
</div>  

<!-- model end -->


<!-- modal End -->
<div id="myModal" class="modal fade" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

        <div class="modal-header">

            <h2 class="modal-title text-blue"> Thank You...</h2>

        </div>

        <div class="modal-body">

            <p class="text-blue">On successful form submission email notification will be sent to the respective email.</p>
              

<br>
<!-- On successful form submission email notification will be sent to the respective regional contact which the
              visitor initially clicked to touch-base us.The form submitter will also get email notification in his registered email.
            -->

        </div>

        <div class="modal-footer">

            <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('contactus')}}"

                aria-expanded="false">

                Close

            </a>

        </div>

    </div>

</div>

</div>


@endsection



@section('scripts')


<script type="text/javascript">

@if(Session('status') == 'true') 
 $('#myModal').modal('show');

 @endif</script>
@endsection