@extends('../layouts/app')

@section('style')



@endsection



@section('content')



<style>
  .demo {
    filter: drop-shadow(1px 2px 14px #ccc);

  }
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
              <a href="" class="ahhm-breadcrumb-item">Advertorial</a>
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

<h1 class="mt-0 mb-2">Advertorial</h1>

<P>
 Advertorials are designed to provide valuable information 											
to the audience while subtly promoting a product,											
service, or brand. This approach aims to capture the attention											
of readers in a non-disruptive manner, offering a more engaging											
and organic advertising experience.											
</P>
<h2 class="mt-2 mb-3" style="text-transform: capitalize;">Advertorial combines elements of editorial content with promotional messaging</h2>
<p>90% find advertorials informative and easy to understand</p>
<p>84% consider them credible</p>

</div>

    </div>   
    

    <div class="row mb-5 mt-2 ">    
    <div class="col-md-12 shadow">
      <img class="demo" src="https://industry.asianhhm.com/promotions/images/content-marketing-banner-img.jpg" alt="content-marketing-banner">
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