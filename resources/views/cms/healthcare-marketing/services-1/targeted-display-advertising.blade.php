@extends('../layouts/app')

@section('style')

<style>
  .editorialsection-heroimage {
    background: url(https://industry.asianhhm.com/promotions/images/targeted-display-advertising.jpg);
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
    padding-top:10%;
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
              <a href="{{ url('/healthcare-marketing/display-advertising-solutions') }}" class="ahhm-breadcrumb-item"> Display Advertising Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Targeted Display Advertising</a>
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
        <h1  class="mt-0 mb-2">Targeted Display Advertising</h1>
        <div class="editorialsection-heroimage" id="bg-image">
        <h2>Geo-Targeted B2B Display Advertising – Be visible where it matters!</h2>
      </div>

        <P class="mt-5">
        Improve your audience reach with assured metrics in Branding & Engagements												
        </P>


      </div>

    </div>   
  
    <div class="row">
    <div class="col-md-12" >
        <h2 style="text-transform:none !important;">Eliminate wasteful and pointless spending on your Display advertising programs, invest in geo-targeted display advertising & churn out max value on your marketing spend. </h2>
      </div>

    </div>
    <div class="row mt-1">
    

      <div class="col-md-12" ><p>
      Reach your desired audience effectively by utilizing rich formats								
of advertising, targeted to specific geographies. Tailor your 								
content to engage and resonate with the right audience, and 								
gain valuable insights of visitor behavior. Data-driven approach 								
empowers you for creating max impact campaigns.								

    </p></div>

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