@extends('../layouts/app')

@section('style')



@endsection



@section('content')



<style>

  .ahhm-about {
    padding: 2rem;
}
img{
  max-width:100%;
}
</style>
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/printmedia-solutions') }}" class="ahhm-breadcrumb-item">Print Media Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Print Advertising</a>
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

      <h1 class="mt-0 mb-2">Print Advertising</h1>
 <P>
Asian Hospital & Healthcare Management, is a quarterly publication												
& stands as the premier healthcare title catering to the information												
requirements of influential executives within the world's foremost												
healthcare providers. With a comprehensive presence in both print												
and digital formats, Asian Hospital & Healthcare Management remains												
at the forefront of delivering essential insights on significant 												
issues and emerging trends that are shaping the future of the 												
healthcare industry throughout Asia.												
        </P>
<h2 class="mt-2 mb-3" style="text-transform: capitalize;">Print Ads Generate 20% Higher Motivation Response</h2>

      </div>

    </div>   
    
  

    <div class="row mb-5 ">    
    <div class="col-md-12">
      <img src="https://industry.asianhhm.com/promotions/images/print-ads-banner-img.jpg" alt="print-ads-banner-img">
    </div> 
    <div class="col-md-12 mt-5">
    <img src="{{ config('app.url') }}images/advertise/print-advertising-table.jpg" />

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