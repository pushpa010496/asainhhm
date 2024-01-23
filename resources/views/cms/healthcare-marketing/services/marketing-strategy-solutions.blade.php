@extends('../layouts/app')

@section('style')



@endsection



@section('content')


<style>
  .ahhm-about {
    padding: 2rem;
}
h2 {
    color: #231F20 !important;
    font-family: "Montserrat", sans-serif;
    text-transform: capitalize;
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 1rem;
    display: inline-block;
    line-height: 2.5rem;
}
.editorialsection-heroimage {
    background: url(https://industry.asianhhm.com/promotions/images/marketing-solutions-img.jpg);
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
    padding-top:15%;
}
 
 
</style>

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
        <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Marketing Strategy Solutions</a>
          </div>
                  </div>
      </div>
    </div>


    <div class="container-fluid ml-5">
              <div class="row">
                <div class="col-12 col-lg-9 ahhm-about">   

                              <div class="row">
                                <div class="col-12">
                                <h1  class="mt-0 mb-2"> Marketing Strategy Solutions</h1>	
                                <br>
                            	
                              <div class="editorialsection-heroimage mb-5" id="bg-image">
                              <h2> Marketing Strategy - Simplified</h2>
      </div>
      <h2>Inbound Marketing Solutions that drives growth, brand augmentation & verified leads</h2> 
                                  <P>
                                  AsianHHM offers top-notch marketing strategy solutions derived						
                                    by a team of experts and consultants. Solutions tailored for 						
                                    effective marketing framework. Our solutions stack is backed 						
                                    with regular audits aligning them with industry trends and insights,						
                                    ensuring max ROI for you. For product launches, market penetration, 						
                                    realignment, or conducting market assessments, explore our inbound						
                                    marketing solutions tailored for the healthcare industry.</P>
                                </div>
                              </div>   
    
                              <div class="row">
                                <h2>Generate New Business Leads & Opportunities	</h2>
                              </div>
                              <div class="row mt-4">
                                      <div class="col-md-4" >
                                        
                                      <a href="{{ url('/healthcare-marketing/services/webinars') }}">
                                                  <img src="https://industry.asianhhm.com/promotions/images/webinars-live-img.jpg" alt="our brands" style="width:100%;" >
                                            </a>
                                        </div>
                                      <div class="col-md-4">
                                            <a href="{{ url('/healthcare-marketing/services/sponsored-webinar-series') }}">
                                              <img src="https://industry.asianhhm.com/promotions/images/sponsored-webinar-series-img.jpg" alt="our brands" style="width:100%;">
                                            </a>
                                          </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('/healthcare-marketing/services/surveys-assessments') }}">
                                              <img src="https://industry.asianhhm.com/promotions/images/surveys-assessments-img.jpg"  alt="our brands" style="width:100%;">
                                                </a>
                                          </div>        
                                    
                                  </div>

                            <div class="row mt-5">
                                <div class="col-md-4" >
                                  
                                <a href="{{ url('/healthcare-marketing/services/content-syndication') }}">
                                            <img src="https://industry.asianhhm.com/promotions/images/content-syndication-image.jpg" alt="our brands" style="width:100%;" >
                                      </a>
                                  </div>
                                <div class="col-md-4">
                                      <a href="{{ url('/healthcare-marketing/services/account-based-marketing') }}">
                                        <img src="https://industry.asianhhm.com/promotions/images/account-based-img.jpg" alt="our brands" style="width:100%;">
                                      </a>
                                    </div>
                                  <div class="col-md-4">
                                      <a href="{{ url('/healthcare-marketing/services/email-marketing') }}">
                                        <img src="https://industry.asianhhm.com/promotions/images/email-marketing-image.jpg"  alt="our brands" style="width:100%;">
                                          </a>
                                    </div>        
                              
                            </div>
        <div class="mt-5">&nbsp;</div>
        <div class="mt-5">&nbsp;</div>

    

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