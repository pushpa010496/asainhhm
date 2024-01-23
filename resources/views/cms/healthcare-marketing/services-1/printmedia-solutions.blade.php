@extends('../layouts/app')

@section('style')

<style>
.editorialsection-heroimage {
    background: url(https://industry.asianhhm.com/promotions/images/print-media-solutions-img.jpg);
    width: 100%;
    height: auto;
    min-height: 40rem;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 5rem;
    margin-top: 1rem;
    /* background-color: #60a9e0; */
    background-position: center right;
}
.editorialsection-heroimage h2 {
    font-family: "Montserrat", sans-serif;
    max-width: 50%;
    color: #000 !important;
    line-height: 3.5rem;
    padding-top:15%;
}
 
</style>

@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
        <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Print Media Solutions</a>
          </div>
                  </div>
      </div>
    </div>

    <div class="container-fluid">

<!--about section-->




<div class="row">

  <div class="col-12 col-lg-9 ahhm-about">


    

    <div class="row">

      <div class="col-12">
      <h1 class="mt-0 mb-3">Print Media Solutions</h1>
      <div class="editorialsection-heroimage mb-5" id="bg-image">
      <h2 style="text-transform: capitalize;">82% of consumers trust print ads the most when making a purchase decision</h2>
               
      </div>
        <h3 class="mt-1 mb-2">AsianHHM remains at the forefront of delivering essential insights on significant issues and emerging trends that are shaping the future </h3>

        <P>
        Our publication successfully reaches the distinguished private														
and public hospitals, medical laboratories, as well as national														
and regional health authorities and health ministries across Asia.														
By connecting with these prominent institutions, Asian Hospital &														
Healthcare Management ensures extensive coverage of the top-spending														
entities in the healthcare sector, offering unparalleled access to 														
vital information for professionals in the field.
 </P>
</div>
</div>   
    
   
<div class="row mt-4">
            <div class="col-md-4" >
              
            <a href="{{ url('/healthcare-marketing/services/print-advertising') }}">
                        <img src="https://industry.asianhhm.com/promotions/images/print-advertising-image.jpg" alt="our brands" style="width:100%;" >
                   </a>
              </div>
            <div class="col-md-4">
                   <a href="{{ url('/healthcare-marketing/services/advertorial') }}">
                    <img src="https://industry.asianhhm.com/promotions/images/advertorial-image.jpg" alt="our brands" style="width:100%;">
                  </a>
                </div>
                       
          
        </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
<div class="bg-gray border-secondary">

  <div class="text-center">

    {{-- <h3 class="adv-title">Advertisements</h3> --}}

  </div>

  <!-- Square Banner -->

    @include('layouts.partials._square_banner')

  <!-- End Square Banner -->

</div>

</div>

</div>

<!--/about section-->



<!--footer-->


<!--/footer-->



</div>

  


@endsection



@section('scripts')



@endsection