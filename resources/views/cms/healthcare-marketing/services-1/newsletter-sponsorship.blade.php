@extends('../layouts/app')

@section('style')
<style>
  img{
    max-width:100% !important;
  }
  </style>


@endsection



@section('content')
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/display-advertising-solutions') }}" class="ahhm-breadcrumb-item"> Display Advertising Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Newsletter Sponsorship</a>
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

      <h1  class="mt-0 mb-2">Newsletter Sponsorship</h1>


        <P>
            Maximize your brand exposure and engage with our vibrant B2B					
              healthcare network. Sponsor monthly newsletter & secure the					
              most prominent and relevant ad space, capture the attention					
              of your audience and drive inquiries to your brand.					
              Rest assured our newsletter sponsorship program guarantees					
              relevant & verified lead generation for your brand.					
                        

        </P>


      </div>

    </div>   
    
    <div class="row mt-5 mb-5">  
      <div class="col-md-12 text-center" >
      
      <img src="{{ config('app.url') }}promotions/images/newsletter-ahhm.jpg" alt="newsletter-ahhm">  
      </div>
          
    </div>
    <div class="row">
      <div class="col-md-12 text-center">
      
      <img src="{{ config('app.url') }}promotions/images/geographical-distribution.jpg" alt="geographical-distribution" class="img-fluid">   
      </div>
    </div>
   <div class="">&nbsp;</div>
    <div class="row mt-5">
      <div class="col-md-12 text-center">
      <img src="{{ config('app.url') }}images/advertise/newsletter-sponsorship-table.jpg" />  
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

</di

<!--/about section-->



<!--footer-->



<!--/footer-->



</div>

  





@endsection



@section('scripts')



@endsection