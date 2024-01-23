@extends('../layouts/app')

@section('style')



@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Target Market</a>
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid">

        <div class="row PF-WytBG">

            <!-- // LEFT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12">

            <div class="row">

          <div class="col-12 col-lg-12 ahhm-target-market">

            <div class="row">

              <div class="col-12">

                <h1 class="mt-0">Target Market</h1>

                <p class="mt-2"><span class="font-700">Asian Hospital & Healthcare Management</span> reaches out to the top spending private and public hospitals and medical laboratories in addition to the national and regional health authorities and health ministries throughout Asia. This guarantees that your advertisement reaches the right people.</p>

              </div>

            </div>

          

            <div class="row mt-5">

              <div class="col-12">

                <h2>Geographical Breakdown</h2>

                <img src="{{config('app.url')}}images/geographic-breakdown.svg" alt="Geographical Breakdown" >

              </div>



              <div class="col-12 mt-6rem">

                <h2 class="mt-6rem">Business segments</h2>

                <img src="{{config('app.url')}}images/business-segments.svg" alt="Business Segments" class="business-segments">

              </div>

              

            </div>

            

            

          </div>
                </div>


            

              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">Target Market</h1> 

                </div>

               {!! $data->description !!}  

              </div> -->





            </div>

            <!-- // LEFT SECTION // --> 



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