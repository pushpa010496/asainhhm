@extends('../layouts/app')

@section('style')



@endsection



@section('content')


<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/marketing-strategy-solutions') }}" class="ahhm-breadcrumb-item">Marketing Strategy Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Email Marketing</a>
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

      <h1  class="mt-0 mb-2">Email Marketing</h1>	
        <P>
        With B2B email marketing, you have the power to generate leads, 						
share important product news, and establish lasting relationships.						
B2B email marketing stands out as your most effective marketing option. 						
It allows you to directly engage with your target audience, providing a						
reliable and efficient means to communicate.</P>

<div>
<img src="{{ config('app.url') }}images/advertise/email-marketing-table.jpg" alt="email-marketing-table" />
</div>
<h2 class="mt-5 mb-5" style="text-transform: capitalize;">Our extensive database empowers you to reach the right individuals,											
ensuring that your brand, products, services, or events receive maximum exposure.											
</h2>

      </div>

    </div>   
    
    <div class="row">   

      <div class="col-md-12">
      <img src="https://industry.asianhhm.com/promotions/images/email-marketing-img.jpg" alt="email-marketing-img" />
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