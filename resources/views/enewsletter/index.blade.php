@extends('../layouts/app')

@section('style')



@endsection



@section('content')





    <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="#" style="color:#fff;">{{trans('messages.enewsletter_title')}}</a>
          </div>
        </div>
      </div>
    </div>




      <div class="container">

        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">

                  <h1 class="float-left PF-Bshelf">{{trans('messages.enewsletter_title')}}</h1>

                  <span class="PF-ForthIssue PF-MobP015 PF-MobMB10">

                    <a href="e-newsletter-subscribe" target="_blank" class="float-right">

                      <i class="fa fa-book mr-2"></i> Subscribe</a>

                  </span>

                  <div class="clearfix"></div>

                </div>         

                <p>{{trans('messages.enewsletter_text')}}</p>

              </div>



              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <iframe id="form-iframe" src="{{ config('app.url').'e-newsletters/'.$data->file }}" style="margin:0; width:100%; height:1450px; border:none; overflow:hidden;" scrolling="no"></iframe>

              </div>



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