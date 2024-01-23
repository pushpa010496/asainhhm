@extends('../layouts/app')
@section('style')
<style>
  b,
strong {
  font-weight:700 !important;
}
</style>

@endsection
@section('content')

  <!--breadcrumb-->
  <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/magazinesection') }}" class="ahhm-breadcrumb-item">Magazine Section</a>
              <a href="" class="ahhm-breadcrumb-item">{{ ucwords( str_replace('-',' ', Request::segment(count(Request::segments()))) )}}</a>
          </div>
        </div>
      </div>
    </div>
<!--/breadcrumb-->

      <div class="container-fluid">
           <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-1">
            <div class="row">
        <div class="col-12 col-lg-12 ahhm-about">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0">Forthcoming Issue</h1><br>
             
            </div>
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
               <p> {!! $cmspage->description !!} </p> 
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Forthcoming Issue</h1> 
                </div>
        <div class="col-md-12 text-center img-fluid"><img src="https://industry.asianhhm.com/images/images/virusoutbreak.jpg"></div>
               {!! $cmspage->description !!}  
              </div> -->
            </div>
            <!-- // RIGHT SECTION // --> 
            <!--// RIGHT SECTION - Square Banners -->
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
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>
      </div>
@endsection
@section('scripts')
@endsection