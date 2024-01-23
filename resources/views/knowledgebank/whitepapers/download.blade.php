@extends('../layouts/app')

@section('style')
<style>
	.ahhm-editorial-calendar .editorial-calendar-form {
    background-color: #231F20;
    padding: 8rem;
    display: flex;
    background-image: url(https://industry.asianhhm.com/images/editorial-calendar-bg.svg);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: left;
}
	</style>

{{-- <meta http-equiv="refresh" content="20;URL='{{url('/')}}/autherguidlinesdwnlink'" />  --}}



@endsection


 <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>  -->



@section('content')

    <!--breadcrumb-->

    <div class="container-fluid breadcrumb-live">

      <div class="row">

        <div class="col-12">

            <div class="ahhm-breadcrumb">

              <a href="https://www.asianhhm.com/knowledgebank" class="ahhm-breadcrumb-item">Knowledge Bank</a>

              <a href="" class="ahhm-breadcrumb-item">Whitepapers Form</a>

          </div>

        </div>

      </div>

    </div>

    <!--/breadcrumb-->

 <!--content div-->

 <div class="container-fluid">

<!--advertise section-->

<div class="row">

  <div class="col-12 ahhm-editorial-calendar">

	<div class="row">

	  <div class="col-12">

		<h1 class="mt-0" style="font-size:35px;">PLEASE FILL THE BELOW FORM TO DOWNLOAD OUR WHITEPAPER</h1>

	  </div>

	</div>

   

	<div class="row mt-3">

	  <div class="col-12">

		<div class="editorial-calendar-form">

		  <div class="services">

			  <h1>Whitepaper Form</h1>

		  </div>

		  <div class="download-form">

<form action="{{route('whitepapersform.post',[$whitepaper->url])}}" class="email" id="writemessage" method="post" accept-charset="utf-8">


@csrf

			  <div class="input-group mb-3 mt-3">

				  <input type="text" class="form-control" placeholder="First Name*" aria-label="Username" required>

			  </div>

			  <div class="input-group mb-3 mt-3">

				  <input type="text" class="form-control" placeholder="Last Name*" aria-label="Username" required>

			  </div>
			  <div class="input-group mb-3 mt-3">

				<input type="email" class="form-control" placeholder="Email*" aria-label="Username" required>

				</div>
				<div class="input-group mb-3 mt-3">

				  <input type="number" class="form-control" placeholder="Telephone*" aria-label="Username" required>

			  </div>

			  <div class="input-group mb-3 mt-3">

				  <input type="text" class="form-control" placeholder="Company Name*" aria-label="Username" required>

			  </div>
		  

			  <div class="input-group mb-3 mt-3">

				  <textarea type="text" class="form-control" rows="5" placeholder="Message" aria-label="Username"></textarea>

			  </div>
			  <!-- <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response"> -->

			  <button type="submit" class="btn btn-ahhmred w-100">Submit</button>
 </form>
			 </div>
			
		</div>



	  </div>

	</div>

	

	

  </div>









</div>

<!--/advertise section-->





</div>

<!--/content div-->



@endsection



@section('scripts')



@endsection