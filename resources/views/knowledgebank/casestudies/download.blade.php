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

              <a href="https://www.asianhhm.com/knowledgebank" class="ahhm-breadcrumb-item">Knowledge Bank</a>

              <a href="" class="ahhm-breadcrumb-item">Case Studie Form</a>

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

		<h1 class="mt-0" style="font-size:30px;">Case Studie Form</h1>

	  </div>

	</div>

   

	<div class="row mt-3">

	  <div class="col-12">

		<div class="editorial-calendar-form" style="display:block;">
<div class="row">
	<div class="col-md-6">
	<div class="text-center pt-5">

<h1 style="color:#fff !important;">PLEASE FILL THE BELOW FORM TO DOWNLOAD OUR CASESTUDY</h1>
<!-- <p class="pt-4" style="color:#c5c2c3;">Asian Hospital & Healthcare Management provides cutting-edge content that offers both relevant information and knowledge. The magazine covers all the areas of the healthcare industry categorised broadly under the sections mentioned below. The magazine is a multitude of contemporary issues in each of these sections. They include:</p> -->

</div>
	</div>
	<div class="col-md-6">
	<div class="download-form">
	<form action="{{ route('casestudiesform.post',[$casestudy->url])}}" class="email" id="writemessage" method="post" accept-charset="utf-8">

		       				{{ csrf_field() }}

			              	<!-- <h2 class="mb-3">Please fill the below form to download our <span class="PF-Caps PF-TXTRED">CASESTUDY</span></h2> -->



			              	<div class="row">

				                <div class="input-group mb-3 mt-3 col-lg-6 {{ $errors->first('fullname', 'has-error')}}">

				                	<input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name*" required="">

				                	<input type="hidden" value="casestudy-download" name="type" id="type">

				                	<input type="hidden" value="{{$casestudy->id}}" name="casestudy_id" id="type">

				                	<input type="hidden" value="{{$casestudy->title}}" name="title">



				                	<span class="help-block">{{ $errors->first('fullname', ':message') }}</span>

				                </div>

				                <div class="input-group mb-3 mt-3 col-lg-6 {{ $errors->first('email', 'has-error')}}">

				                	<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="">

				                	<span class="help-block">{{ $errors->first('email', ':message') }}</span>

				                </div>

				                <div class="input-group mb-3 mt-3 col-lg-6 {{ $errors->first('telephone', 'has-error')}}">

				                	<input type="tel" class="form-control" id="subject" name="telephone" placeholder="Telephone*" minlength="8" required="">

				                	<span class="help-block">{{ $errors->first('telephone', ':message') }}</span>

				                </div>

				                <div class="input-group mb-3 mt-3 col-lg-6 {{ $errors->first('company', 'has-error')}}">

				                	<input type="text" class="form-control" id="mobile" name="company" placeholder="Company*" required="">

				                	<span class="help-block">{{ $errors->first('company', ':message') }}</span>

				                </div>

				                <div class="input-group mb-3 mt-3 col-lg-12 col-md-12 col-sm-12 {{ $errors->first('description', 'has-error')}}">

				                   <textarea class="form-control" type="textarea" id="message" name="description" placeholder="Message" maxlength="200" rows="7"></textarea>

				                   <span class="help-block">{{ $errors->first('description', ':message') }}</span>

				                </div>

				                <div class="input-group mb-3 mt-3 col-lg-12 col-md-12 col-sm-12">

				                    <input type="submit" value="SUBMIT" id="submit-button" class="btn btn-ahhmred w-100">                   

				                     <div class="clearfix"></div>

				                </div>

			            	</div>

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