@extends('../layouts/app')

@section('style')



@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
        <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Services</a>
          </div>
                  </div>
      </div>
    </div>




        <!--about section-->
          <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-lg-9 ahhm-about">
              <div class="row">
                      <div class="col-12">
                    <h1 class="mb-4">Services</h1>
                    <P>At our core, we prioritize your team's needs when providing outsourced marketing services. 									
                        We understand that you may require us to either serve as your dedicated marketing 									
                        department or seamlessly complement your existing one. Rest assured, since 2008, 									
                        we have been assisting teams similar to yours in achieving tangible business outcomes.
                    </P> 
                  </div>
                </div>   
    




    <!-- duplicate start-->
<div class="row" >
<h2 style="text-transform:none !important;">Our Exhaustive Solutions Stack, Explore for Guaranteed ROI...</h2>
<div class="row mt-4">
            <div class="col-md-4" >
              
            <a href="{{ url('/healthcare-marketing/display-advertising-solutions') }}">
                        <img src="https://industry.asianhhm.com/promotions/images/display-advertising-solutions.jpg" alt="our brands" style="width:100%;" >
                   </a>
              </div>
            <div class="col-md-4">
                   <a href="{{ url('/healthcare-marketing/marketing-strategy-solutions') }}">
                    <img src="https://industry.asianhhm.com/promotions/images/marketing-strategy-solutions.jpg" alt="our brands" style="width:100%;">
                  </a>
                </div>
               <div class="col-md-4">
                   <a href="{{ url('/healthcare-marketing/printmedia-solutions') }}">
                    <img src="https://industry.asianhhm.com/promotions/images/print-media-solutions.jpg"  alt="our brands" style="width:100%;">
                      </a>
                </div>        
          
        </div>
        </div>
<!-- duplicate end-->

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
</div>

<!--/about section-->



<!--footer-->
<div class="mt-5 mb-5">&nbsp;</div>
<div class="mt-5 mb-5">&nbsp;</div>
<div class="mt-5 mb-5">&nbsp;</div>

<!--/footer-->




  





@endsection



@section('scripts')



@endsection