@extends('../layouts/app')
@section('style')
<style>
  .font-17{
    font-size:17px;
  }
  .pointer::before{
    content:"♦ "
  }
  </style>
@endsection
@section('content')
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Target Audience</a>
          </div>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
            <!-- // LEFT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-0">
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                  <h1 class="PF-Bshelf pt-2">Target Audience</h1> 
                </div>
                <p>A high-quality, response-driven magazine, supported by a monthly e-newsletter, Asian Hospital and Healthcare management is the right vehicle to market the best of industry-related products and services to the right market and audience. Our customized advertising solutions deliver a higher quality of responses thanks to our expansive readership and reach.<br>
                </p>
                      <div class="">
                        <img class="img-fluid pb-4" alt="ahhm-occupational-break-down" src="https://industry.asianhhm.com/upload//targetmarket/ahhm-occupational-break-down.jpg">
                        </div>
                      <p >The key job titles of industry readers who receive <strong>Asian Hospital &amp; Healthcare Management</strong> include:</p>
                      <div class="row pt-5">
                        <div class="col-md-2"><h3 class="font-17">C-LEVEL</h3></div>
                        <div class="col-md-10">
                          <div class="row">
                            <div class="col-md-4 pointer">Chairman</div>
                            <div class="col-md-4 pointer">President</div>
                            <div class="col-md-4 pointer">Chief Executive Officer</div>
                          </div>
                          <div class="row">
                               <div class="col-md-4 pointer">Chief Finance Officer</div>
                               <div class="col-md-4 pointer">Chief Information Officer</div>
                               <div class="col-md-4 pointer">Chief Operating Officer</div>
                          </div>
                          <div class="row">
                               <div class="col-md-4 pointer">Chief Technology Officer</div>
                               <div class="col-md-4 pointer">Chief Scientific Officer</div>
                          </div>
                        </div>
                        <!-- <div class="col-md-4 pointer"></div> -->
                      </div>
                      <div class="row pt-5">
                        <div class="col-md-2"><h3 class="font-17">Head of the Department</h3></div>
                        <div class="col-md-10">
                          <div class="row">
                            <div class="col-md-4 pointer">Head of Radiology</div>
                            <div class="col-md-4 pointer">Head of Cardiology</div>
                            <div class="col-md-4 pointer">Head of Oncology</div>
                          </div>
                          <div class="row">
                               <div class="col-md-4 pointer">Head of Mammography</div>
                               <div class="col-md-4 pointer">Head of Fluoroscopy</div>
                               <div class="col-md-4 pointer">Head of Radiography</div>
                          </div>
                          <div class="row">
                               <div class="col-md-4 pointer">Head of Anaesthesiology</div>
                               <div class="col-md-4 pointer">Head of Diabetes</div>
                               <div class="col-md-4 pointer">Head of Clinical Research</div>
                          </div>
                          <div class="row">
                               <div class="col-md-4 pointer">Head of Intensive Care Unit</div>
                               <div class="col-md-4 pointer">Head of Marketing</div>
                          </div>
                          <div class="row">
                          <div class="col-md-5 pointer">Head of Information Technology</div>
                                                   </div>
                          <div class="row">                        
                          <div class="col-md-7 pointer">Heads of all the healthcare disciplines and departments</div>
                          </div>
                        </div>
                     </div>
                        <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">BUSINESS MANAGEMENT</h3></div>
                              <div class="col-md-10">
                                      <div class="row">
                                        <div class="col-md-4 pointer">Vice President</div>
                                        <div class="col-md-4 pointer">Executive Director</div>
                                        <div class="col-md-4 pointer">Managing Director</div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4 pointer">Administrator</div>
                                          <div class="col-md-4 pointer">Senior Advisors</div>
                                      </div>
                              </div>
                         </div>
                  <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">SPECIALISTS</h3></div>
                        <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-4 pointer">Specialists in Radiology</div>
                                  <div class="col-md-4 pointer">Specialists in Cardiology</div>
                                  <div class="col-md-4 pointer">Specialists in Oncology</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Specialists in Mammography</div>
                                    <div class="col-md-4 pointer">Specialist in Fluoroscopy</div>
                                    <div class="col-md-4 pointer">Specialist in Radiography</div>
                                </div>
                                <div class="row">
                                                 <div class="col-md-4 pointer">Specialists in Healthcare IT</div>
                                      <div class="col-md-4 pointer">Professors in all the medical</div>
                                </div>
                                <div class="row">
                                      <div class="col-md-4 pointer">Sciences Department</div>
                                      <div class="col-md-6 pointer">Specialists in all the Disciplines</div>
                                   </div>
                                   <div class="row">
                                      <div class="col-md-5 pointer">Specialists in Anaesthesiology</div>
                                      </div>
                        </div>
                  </div>
                  <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">CRUCIAL HCP</h3></div>
                        <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-4 pointer">Clinicians</div>
                                  <div class="col-md-4 pointer">Physicians</div>
                                  <div class="col-md-4 pointer">Technicians</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Healthcare Admins</div>
                                 </div>
                        </div>
                  </div>
                  <h2 class="pt-5">SUBSCRIBER COMPANIES:</h2>
                  <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">TOP INDIAN HOSPITALS</h3></div>
                        <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-4 pointer">All India Institute of Medical</div>
                                  <div class="col-md-4 pointer">Sciences</div>
                                  <div class="col-md-4 pointer">Apollo Hospitals</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Care Hospitals</div>
                                    <div class="col-md-4 pointer">Jaslok Hospital</div>
                                    <div class="col-md-4 pointer">Centre</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Lilavati Hospital</div>
                                      <div class="col-md-4 pointer">JIPMER Hospital</div>
                                </div>
                                <div class="row">
                                <div class="col-md-5 pointer">Fortis Healthcare Limited (FHL)</div>
                                 </div>
                                 <div class="row">
                                 <div class="col-md-5 pointer">Escorts Heart Institute and Research</div>
                                 </div>
                                <div class="row">
                                    <div class="col-md-5 pointer">P.D.Hinduja National Hospital</div>
                                </div>
                                <div class="row">
                                <div class="col-md-5 pointer">Wockhardt Hospital & Heart Institute</div>
                                </div>
                        </div>
                  </div>
                  <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">TOP ASIAN PACIFIC HOSPITALS</h3></div>
                        <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-4 pointer">Alexandra Hospital</div>
                                  <div class="col-md-4 pointer">Christchurch Hospital</div>
                                  <div class="col-md-4 pointer">King Fahad National Guards</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Hospital</div>
                                    <div class="col-md-4 pointer">Princess Margaret Hospital</div>
                                    <div class="col-md-4 pointer">Queen Mary Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Singapore General Hospital</div>
                                      <div class="col-md-4 pointer">Siriraj Hospital</div>
                                      <div class="col-md-4 pointer">St Stephens Hospital</div>
                                </div>
                                <div class="row">
                                <div class="col-md-5 pointer">Bangkok Bumrungrad Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pointer">Jordan Hospital & Medical Centre</div>
                                </div>
                        </div>
                  </div>
                  <div class="row pt-5">
                          <div class="col-md-2"><h3 class="font-17">TOP EUROPEAN AND AMERICAN HOSPITALS</h3></div>
                        <div class="col-md-10">
                                <div class="row">
                                  <div class="col-md-4 pointer">Athens Medical Center</div>
                                  <div class="col-md-4 pointer">Belford Hospital</div>
                                  <div class="col-md-4 pointer">Belgium Hospital Association</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">General Hospital Vienna</div>
                                    <div class="col-md-4 pointer">Hopital de la Tour</div>
                                    <div class="col-md-4 pointer">Linkoping University Hospital</div>
                                </div>
                                <div class="row">
                                      <div class="col-md-4 pointer">Montfort Hospital</div>
                                      <div class="col-md-4 pointer">Odense University Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Princess of Wales Hospital</div>
                                      <div class="col-md-4 pointer">Rouen University Hospital</div>
                                      <div class="col-md-4 pointer">St. George's Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">St. Joseph - Krankenhaus</div>
                                      <div class="col-md-4 pointer">St. James Hospital</div>
                                      <div class="col-md-4 pointer">Saint James Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 pointer">Santa Maria Hospital</div>
                                      <div class="col-md-4 pointer">Westeinde Hospital</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5 pointer">Helsinki University Central Hospital</div>
                                 </div>
                                 <div class="row">
                                <div class="col-md-5 pointer">Mexico City Shriners Hospital</div>
                                </div>
                                  <div class="row">
                                   <div class="col-md-5 pointer">University Hospital of Trondheim</div>                                     
                                </div>
                        </div>
                  </div>
                   <!-- {!! $data->description !!}   -->
              </div>
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
      <div class="pt-5 pb-5"></div>
@endsection
@section('scripts')
@endsection