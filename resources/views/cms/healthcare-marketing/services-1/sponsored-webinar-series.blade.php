@extends('../layouts/app')

@section('style')

<style>
 
  .editorialsection-heroimage {
    background: url( https://industry.asianhhm.com/promotions/images/sponsored-webinar-series.jpg);
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
    padding-top:9%;
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
              <a href="" class="ahhm-breadcrumb-item">Sponsored Webinar Series</a>
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


      <h1  class="mt-0 mb-2"> Sponsored Webinar Series</h1>					
      <div class="row">
   
      <div class="editorialsection-heroimage" id="bg-image">
        <h2>A series of webinars focussed on a specialized collection of topics									
targeting highly specialized audience group.		</h2>
      </div>
    

    </div>
        <h2 style="text-transform: capitalize;">							
</h2>

        <P>  A webinar series presents B2B marketers with an opportunity to 							
effectively communicate product information, engage with clients							
& prospects in real-time. Our webinar series solution is completely							
customizable and adaptable for various purposes such as customer							
training, educating potential buyers about new developments, 							
products, or events. </P>

<h2 style="text-transform: capitalize;">Verified MQLs with distinct maturity levels after each webinar in the series </h2>
      </div>

    </div>   
    
    <div class="row mt-3">    

     
      <div class="col-md-8">
     <img src="https://industry.asianhhm.com/promotions/images/capabilities.jpg" alt="">

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