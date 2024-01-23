@extends('../layouts/app')
@section('style')

@endsection

@section('content')

    <div class="clearfix"></div>
 
      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{url('/knowledgebank')}}">Knowledge Bank</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">Industry Reports</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Industry Reports</h1>            
                </div>

                <p>Asian Hospital & Healthcare Management (AHHM) Reports contain a depth of healthcare company’s information, statistics, and facts. Our reports including Industrial and Global Reports keep you updated on all happenings in healthcare industry. Our Global Reports provide internationally comparable statistics on a wide range of company’s products, services, and industrial markets. 
                Gain acquaintance on Company’s insights through our Reports!</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12">
                    <a href="{{url('/healthcare-reports')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">HEALTHCARE REPORTS</span></h3>
                    </a>
                  </div>

                  {{-- <div class="col-md-12">
                    <a href="{{url('/reports')}}">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">GLOBAL REPORTS</span></h3>
                    </a>
                  </div>
 --}}
                 
                </div>               
              </div> 
            </div>


            <!--// Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <!-- Square Banner -->
              @include('layouts.partials._square_banner')
          <!-- End Square Banner -->
           </div>
            <!-- Square Banners // --> 
        </div>

      </div>



@endsection

@section('scripts')

@endsection