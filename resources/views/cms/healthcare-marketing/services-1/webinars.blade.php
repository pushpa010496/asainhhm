@extends('../layouts/app')

@section('style')

<style>
 
img{
  max-width:100%;
}

.ahhm-about {
    padding: 2rem;
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
              <a href="" class="ahhm-breadcrumb-item">Webinars</a>
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


 <h1 class="mt-0 mb-2">Webinars</h1>

        <P>AsianHHM excels in every aspect, from webinar registrations, hosting						
            to improving live-audience engagements, to on-demand promotions. 						
            Our webinars are fully customizable and can be utilized for 						
            customer training, educating potential buyers about your latest						
            launches, developments, products, or upcoming events. With our 						
            assistance, you can effectively reach your target audience and 						
            generate highly qualified sales leads.</P>

      </div>

    </div>   
    
              <div class="row mt-4 mb-3">     
                      <div class="col-md-8 ">
                      <img src="https://industry.asianhhm.com/promotions/images/capabilities.jpg" alt="webinars-capabilities">
                      </div>     
              </div>
              <div class="row">   
                      <div class="col-md-12">
                        <img src="https://industry.asianhhm.com/promotions/images/webinar-table.jpg" alt="webinars-capabilities"> 
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