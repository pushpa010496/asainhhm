@extends('../layouts/app')

@section('style')

<style>
    .editorialsection-heroimage {
    background: url(https://industry.asianhhm.com/promotions/images/market-survey.jpg);
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
    color: #fff !important;
    line-height: 3.5rem;
    padding-top:13%;
}
 
  </style>

@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/marketing-strategy-solutions') }}" class="ahhm-breadcrumb-item">Marketing Strategy Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Surveys & Assessments</a>
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


      <h1  class="mt-0 mb-2"> Surveys & Assessments	 </h1>		
      <div class="col-md-12"><div class="editorialsection-heroimage" id="bg-image">
        <h2>Market Survey & Research <br> helps you increase Sales & Customer Retention</h2>
      </div>
</div>
        <h2 style="text-transform: capitalize;"></h2>

        <P>      								
              By conducting surveys and assessments, we equip you with										
              independent and data-driven insights that can shape your 										
              strategy and highlight the distinct advantages of your 										
              products or services. 		
										    </P>
                        <h2 style="text-transform: capitalize;">Cut on your Assumptions, go Data Driven						
</h2>


      </div>

    </div>   
    <div class="ml-5">
    <div class="row"  >
      

      <div class="col-md-8">			
  <img src="https://industry.asianhhm.com/promotions/images/capabilities-surveys-assessments.jpg" alt="capabilities-surveys-assessments">
    </div>
   </div>
   </div>
    <div class="row mt-4">
      <h2 style="text-transform: capitalize;">Your Partners for thorough Market Survey & Assessment	</h2>
      <div class="col-md-12 mt-3" >
        <img style="max-width:100%;"
 src="https://industry.asianhhm.com/promotions/images/surveys-assessments.jpg" alt="surveys-assessments"></div>

     
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