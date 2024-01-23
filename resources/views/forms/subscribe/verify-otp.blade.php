 <!-- resources/views/verify-otp.blade.php -->

 @extends('layouts.app')

@section('content')
   

  <!--content div-->
  <div class="container-fluid">
      <!--advertise section-->
      <div class="row">
        <div class="col-12 ahhm-advertise-services">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0">Register to Subscribe</h1>
            </div>
          </div>
         
          <div class="row mt-3">
            <div class="col-12">
          
              <div class="services-wrapper" style="display:block !important;">
              <div class="row">
                    <div class="col-md-4">
                    <div class="services">
                    <h1 style="color:#fff;font-size:40px;line-height: 5rem;">Guaranteed ROI Programs</h1>
                    <h3>Print Media Promotions</h3>
                    <ul class="ahhm-list ahhm-list-dotted">
                      <li>Print Advertisements</li>
                      <li>Advertorials</li>
                      <li>Product Launches</li>
                    </ul>

                    <h3 class="mt-5">Online Media Promotions</h3>
                    <ul class="ahhm-list ahhm-list-dotted">
                      <li>Email Marketing</li>
                      <li>E-Newsletter Promotions</li>
                      <li>Banner Advertising</li>
                      <li>Webinars</li>
                      <li>Content Marketings</li>
                      <li>Social Media Marketing</li>
                      <li>Custom Marketing Programs</li>
                      <li>Marketing Assessments</li>
                      <li>Event Marketing</li>
                    </ul>
                </div>
                    </div>
                    <div class="col-md-8 mt-5">
                    <div class="download-form">
                <form action="{{ route('verify-otp') }}" method="post">
                 @csrf
                    <h3 class="text-center">{{ __('OTP Verification') }}</h3>
                    <div class="input-group mb-3 mt-3">
                        <input type="email" class="form-control" name="email" value=" {{$user->email}}"  aria-label="Username" readonly>  
                   </div>                   
                    <div class="input-group mb-3 mt-3">
                        <input type="otp" class="form-control" name="otp" placeholder="OTP" aria-label="Username">
                    </div>                  
                    <button type="submit" class="btn btn-ahhmred">{{ __('Verify OTP') }}</button>
                   
                    </form>
             
                </div>
                        </div>
                </div>
               
           
               
               
              </div>
            </div>
          </div>
        
          
        </div>




      </div>
      <!--/advertise section-->
    </div>
    <!--/content div-->

<!-- 
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('OTP Verification') }}</div>

                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('verify-otp') }}">
                            @csrf

                            <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                         
                                <div class="col-md-6">
                                    <input id="" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value=" {{$user->email}}" required autocomplete="email" autofocus readonly>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                             
                            </div>

                            <div class="form-group row">
                                <label for="otp" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>

                                <div class="col-md-6">
                                    <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" required>

                                    @error('otp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Verify OTP') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
