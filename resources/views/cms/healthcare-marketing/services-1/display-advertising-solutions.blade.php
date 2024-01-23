@extends('../layouts/app')

@section('style')



@endsection



@section('content')


<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
        <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Display Advertising Solutions</a>
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
      <h1 class="mt-0 mb-2">Display Advertising Solutions</h1>

        <P>
        AsianHHM's display advertising solutions are strategically crafted to position							
you at the forefront of your prospects. Through our display channels, you can 							
effectively reach and engage with targeted buyers, procurement managers, 							
and numerous other relevant audiences. Our goal is to maximize your 							
visibility and capture the attention of your desired market segments.					
							

        </P>


      </div>

    </div>   
  <!-- duplicate start-->
<div class="row mt-4">
            <div class="col-md-4" >
              
            <a href="{{ url('/healthcare-marketing/services/display-advertising') }}">
                        <img src="https://industry.asianhhm.com/promotions/images/display-advertising-img.jpg" alt="our brands" style="width:100%;" >
                   </a>
              </div>
            <div class="col-md-4">
                   <a href="{{ url('/healthcare-marketing/services/newsletter-sponsorship') }}">
                    <img src="https://industry.asianhhm.com/promotions/images/newsletter-sponsorship-img.jpg" alt="our brands" style="width:100%;">
                  </a>
                </div>
               <div class="col-md-4">
                   <a href="{{ url('/healthcare-marketing/services/targeted-display-advertising') }}">
                    <img src="https://industry.asianhhm.com/promotions/images/targeted-display-advertising-img.jpg"  alt="our brands" style="width:100%;">
                      </a>
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

<!--/about section-->



<!--footer-->

<div class="mt-5 mb-5">&nbsp;</div>
<div class="mt-5 mb-5">&nbsp;</div>
<div class="mt-5 mb-5">&nbsp;</div>

<!--/footer-->



</div>

  





@endsection



@section('scripts')



@endsection