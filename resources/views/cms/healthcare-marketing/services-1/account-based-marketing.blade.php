@extends('../layouts/app')

@section('style')



@endsection



@section('content')
<style>
  .ahhm-about {
    padding: 2rem;
}
.editorialsection-heroimage {
    background: url(https://industry.asianhhm.com/promotions/images/account-based-marketing-img.jpg);
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
    color: #fff!important;
    line-height: 3.5rem;
    padding-top:9%;
}
 
</style>

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/marketing-strategy-solutions') }}" class="ahhm-breadcrumb-item">Marketing Strategy Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Account Based Marketing (ABM)</a>
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

      
      <h1  class="mt-0 mb-2">Account Based Marketing (ABM)</h1>	
      <div class="editorialsection-heroimage" id="bg-image">
        <h2>Grow Better with Account Based Marketing</h2>
      </div>
        <h2 style="text-transform: capitalize;"></h2>
        <h3 class="mt-2 mb-2" style="font-size:18px !important; font-weight:bold;" >Flip your B2B Sales & Marketing Funnel on its Head				
</h3>
        <P>
        Account Based Marketing (ABM) enables you to reach specific, ideal-fit companies 							
that align with your organization's ideal customer profile (ICP). By leveraging							
this approach, you can focus your advertising efforts on precisely targeting							
the companies that are most likely to be a good fit for your products							
or services. 					
						
        </P>
<h2 style="text-transform: capitalize;">AsianHHM team has the privilege to offer custom ABM campaigns to Fortune 500 companies.</h2>

      </div>

    </div>   
    
    <div class="row">
      <div class="col-md-12" >
        <img src="https://industry.asianhhm.com/promotions/images/account-based-marketing.jpg" alt="account-based-marketing-img" style="max-width:100%">
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