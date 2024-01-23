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



@section('content')

    <!--breadcrumb-->

    <div class="container-fluid breadcrumb-live">

      <div class="row">

        <div class="col-12">

            <div class="ahhm-breadcrumb">

              <a href="https://www.asianhhm.com/magazine" class="ahhm-breadcrumb-item">Magazine</a>

              <a href="" class="ahhm-breadcrumb-item">Author Guidelines Download</a>

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

		<h1 class="mt-0" style="font-size:30px;">PLEASE FILL THE BELOW FORM TO DOWNLOAD OUR EDITORIAL AUTHOR GUIDELINES</h1>

	  </div>

	</div>

   

	<div class="row mt-3">

	  <div class="col-12">

		<div class="editorial-calendar-form" style="display:block;">
<div class="row">
	<div class="col-md-6">
	<div class="">

<h1 style="color:#fff !important;">Author Guidelines Download</h1>
<p class="pt-4" style="color:#c5c2c3;">Asian Hospital & Healthcare Management provides cutting-edge content that offers both relevant information and knowledge. The magazine covers all the areas of the healthcare industry categorised broadly under the sections mentioned below. The magazine is a multitude of contemporary issues in each of these sections. They include:</p>

</div>
	</div>
	<div class="col-md-6">
	<div class="download-form">
<form>
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
<button type="submit" class="btn btn-ahhmred w-100">Submit</button>

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



@endsection



@section('scripts')



@endsection