@extends('../layouts/app')



@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
<style>
	.form-group{
	position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    width: 100%;
	}
	.form-control{
		height: 5rem !important;
    background-color: transparent !important;
    border-color: #6e6369 !important;
    font-size: 1.4rem !important;
    padding-left: 2rem !important;
    transition: background-color ease-in-out 0.3s !important;
    color: #fff !important;
    border-radius: 0 !important;
}
.text-white{
  color:#c1bbbb !important;
}
option{
  color:#fff !important;
  background-color:#3c3438;
}



.btn.btn-primary{
background-color: #ed1a3b;
  font-size: 20px;
  padding: 5px 15px;
  font-weight: bold;
  color: #fff;
  border: 1px solid #ed1a3b; 
}

.btn.btn-primary:hover {
background-color: #000;
  font-size: 20px;
  padding: 5px 15px;
  font-weight: bold;
  color: #fff;
  border: 1px solid #000;
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

<div id="myModal" class="modal fade" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">

                    <div class="modal-header">

                        <h2 class="modal-title text-blue"> Thank You...</h2>

                    </div>

                    <div class="modal-body">

                        <p style="color: green;">Your Magazine Subscription was Successful</p>

						<p style="color: green;">Thank you for subscribing Asian Hospital and Healthcare Management Magazine. Our team extends its gratitude for your interest in Asian Hospital and Healthcare Management Magazine.</p>

						<p style="color: green;">We look forward to approaching you soon with the details to your access of the magazine.</p>

                        <p style="color: green;">A world of Healthcare insights and industrial acumen awaits you!</p>

						<br>

                       

                    </div>

                    <div class="modal-footer">

                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('https://www.asianhhm.com/subscribe')}}"

                            aria-expanded="false">

                            Close

                        </a>

                    </div>

                </div>

            </div>

        </div>
<!-- <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/e-newsletter')}}" style="color:#fff;">e-Newsletter</a>
              
          </div>
        </div>
      </div>
    </div> -->

      <div class="container-fluid p-0">

        <div class="row p-0">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="row">

                  <div class="col-12 ahhm-editorial-calendar">

                             <div class="row pl-1">

                                      <div class="col-12">

                                            <h1 class="mt-0">Subscribe Asian Hospital and Healthcare Management Magazine</h1>

                                      </div>

                              </div>
                              
                              
                  <div class="row mt-3">

    <div class="col-12">

      <div class="editorial-calendar-form">

              <div class="download-form">

			  <form action="{{route('magazinesubscribe.post')}}" method="Post" enctype="multipart/form-data">	
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" class="form-control" name="type" id="type" value="magazine-subscribe"> 
		<div class="container-fluid">

<div class=" mt-4 mb-4 p-4">
	<div class="row ml-md-5">
		
<div class="col-lg-12 col-md-12 col-sm-12 col-12 border mt-2 ">
<b class="font-16 text-white">Your Subscription Type</b>
<div class="p-1"></div>
<!-- check box start-->
<div class="row  p-3">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
		<div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="acceptance[]" value="e-Magazine" id="e-Magazine">
                 <!-- <input type="hidden" name="acceptance[]" value="e-Magazine" id="e-Magazine" > -->
                 <label class="form-check-label font-16 text-white" for="e-Magazine"  >I would like a free subscription to the Digital Version</label>
              </div>
			</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
			  <div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="acceptance[]" value="e-Newsletter" id="e-Newsletter">
                 <!-- <input type="hidden" name="acceptance[]" value="e-Newsletter" id="e-Newsletter"> -->
                 <label class="form-check-label font-16 text-white" for="e-Newsletter" >I would like a paid subscription to the Print Version</label>
              </div>
			  </div>
</div>
<!-- check box End-->
<div class="p-1"></div>
<b class="font-16 text-white">Your Details</b>
<div class="p-1"></div>
<!-- first form section start-->
<div class="row p-3">
					<div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
	                  <div class=" form-group">
                    <label for="First Name">First Name*</label>
                    <input type="text" class="form-control" id="First Name*" name="firstname" >
                  </div>
                  <div class=" form-group">
                    <label for="Job Title">Job Title*</label>
                    <input type="text" class="form-control" name="job_title" id="Job Title*">
                  </div>
                  	
					</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">			 
              <div class=" form-group">
                <label for="Last Name">Last Name*</label>
                <input type="text" class="form-control" name="lastname" id="Last Name">
              </div>
              <div class=" form-group">
                    <label for="Company Name">Company Name*</label>
                    <input type="text" class="form-control" name="company" id="Company Name*">
                  </div>
              <!--  <div class=" form-group" >
              <label for="Job Function*">Job Function*</label>
            <select class="form-control text-white" id="job_function" name="job_function" required="">
				    	<option disabled="" selected="" value="" class="font-weight-bold ">Job Function*</option>

									<option value="Academic">Academic</option>

									<option value="Engineering">Engineering</option>

									<option value="Financial/Legal">Financial/Legal</option>

									<option value="IT/Communications">IT/Communications</option>

									<option value="Sales/Marketing/Business Development">Sales/Marketing/Business Development</option>

									<option value="Purchasing/Procurement">Purchasing/Procurement</option>

									<option value="Research/Development">Research/Development</option>

									<option value="Operations">Operations</option>

									<option value="Consulting">Consulting</option>

									<option value="Human Resources">Human Resources</option>

									<option value="Production/Manufacturing">Production/Manufacturing</option>

									<option value="QA/QC">QA/QC</option>

									<option value="Scientist/Technologist">Scientist/Technologist</option>

									<option value="Processing">Processing</option>

									<option value="Other">Other</option>

														

								</select>
</div> -->
  <!-- <div class=" form-group" >
  <label for="Company Type*">Company Type*</label>
  <select class="form-control text-white" id="company_type" name="company_type" required="" >

<option disabled="" selected="" value="" class="font-weight-bold text-white dropdown">Company Type*</option>

<option value="Academia/Research Institute">Academia/Research Institute</option>

<option value="Association">Association</option>

<option value="Association">Association</option>

<option value="Consultancy">Consultancy</option>

<option value="Contract Manufacturer">Contract Manufacturer</option>

<option value="Financial/Legal">Financial/Legal</option>

<option value="Government/Regulatory Body">Government/Regulatory Body</option>

<option value="Contract Research">Contract Research</option>

<option value="Drug Development">Drug Development</option>

<option value="Manufacturer - Packaging & Labelling">Manufacturer - Packaging & Labelling</option>

<option value="Manufacturer - Pharmaceuticals">Manufacturer - Pharmaceuticals</option>

<option value="Manufacturer - APIs">Manufacturer - APIs</option>

<option value="Media/PR/Agency">Media/PR/Agency</option>

<option value="Retailer">Retailer</option>

<option value="Biotech">Biotech</option>

<option value="IT/Software">IT/Software</option>

<option value="Logistics">Logistics</option>

<option value="Supplier">Supplier</option>

<option value="Other">Other</option>								

</select>
</div>
  -->
			  </div>
</div> 
<!-- first form section start End-->
<div class="p-1"></div>
<b class="font-16 text-white">Your Contact Details</b>
<div class="p-1"></div>
<!-- first form section start-->
<div class="row p-3">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
	
  <div class=" form-group">
    <label for="Email">Email*</label>
    <input type="email" class="form-control" name="email" id="Email*">
  </div>
  	 
  <div class=" form-group">
    <label for="Telephone">Telephone*</label>
    <input type="tel" class="form-control" name="telephone" id="Telephone*">
  </div>
			</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">

  <div class=" form-group">
    <label for="Country*">Country*</label>
    
	{{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}

<span class="help-block">{{ $errors->first('country', ':message') }}
  </div>
  
  
			  </div>
</div>
<!-- first form section start End-->
<div class="p-1"></div>
<b class="font-16 text-white">Your Notification Type</b>
<div class="p-1"></div>
<!-- check box2 start-->
<div class="row p-3">
	<div class="col-lg-8 col-md-8 col-sm-8 col-12">
			<div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="email_notifications" value="Third Party Email Notifications, Product/Project Updates etc." id="Product/Project">
                
                 <label class="form-check-label font-16 text-white" for="Product/Project">Third Party Email Notifications, Product/Project Updates etc.</label>
              </div>
			  <div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="events_notifications" value="Webinars/Events Notifications" id="Webinars/Events">
              
                 <label class="form-check-label font-16 text-white" for="Webinars/Events">Webinars/Events Notifications</label>
              </div>
			</div>
			  </div>
<!-- check box2 End-->
</div>
</div>
</div>

<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

					<div class="pt-4 pb-3" align="center">

						<button type="submit" id="checkBtn" class="btn btn-primary pl-4 pr-4 btn-md">Submit</button>

					</div>

	
		

		<div class="clearfix"></div>



		

	</div>
</form>
			

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
<script src="https://www.asianhhm.com/promotions/public/styles/js/jquery-2.1.3.min.js"></script>

<script src="https://www.asianhhm.com/promotions/public/styles/js/bootstrap-4.min.js"></script>





<script type="text/javascript">

@if(Session('status') == 'true') 
			
			$('#myModal').modal('show');

			
@endif
    

</script>

<script type="text/javascript">             
            $("#checkBtn").click(function(){ 
                var grpChk1 = $("[name='acceptance[]']:checked"); 
                if(grpChk1.length==0)
                { alert("Please click atleast one check box in Subscription type"); return false; }
			})
		
			</script>


@endsection