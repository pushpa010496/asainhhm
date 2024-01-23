@extends('../layouts/app')

@section('style')

@endsection

@section('content')

<!--breadcrumb-->

 <div class="container-fluid breadcrumb-live">

<div class="row">

  <div class="col-12">

      <div class="ahhm-breadcrumb">

        <a href="" class="ahhm-breadcrumb-item">Webinars</a>

    </div>

  </div>

</div>

</div>

<!--/breadcrumb-->

<!--content div-->

<div class="container-fluid">

<!--advertise section-->

<div class="row">

  <div class="col-12 col-lg-9 ahhm-advertise-services">

    <div class="row">

      <div class="col-12">

        <h1 class="mt-0">Healthcare Webinars by Asian Hospitals & Healthcare Management</h1>

      </div>

    </div>

    <div class="row mt-3">

      <div class="col-12">

        <div class="services-wrapper">

          <div class="services">

              <h1 class="mt-0">Enhance your marketability with our efficient webinar service</h1>

              <ul class="ahhm-list ahhm-list-dotted">

                <li>Share your story with style</li>

                <li>Hassle-free set-up</li>

                <li>All-in-one webinar programs (inception, hosting, promotions, on-demand, reporting)</li>

                <li>Session Recording, Interactive Attendee Engagements capability</li>

                <li>1 Year hosting of the webinar’s recorded session on our platform</li>

              </ul>

          </div>
        </div>

      </div>

    </div>

    @php
            $upcoming_flag = false;
            $completed_flag = false;

            @endphp

<!-- upcoming webinars -->

<div class="row mt-4rem">

<div class="col-12">

  @php 
            $upcoming_flag = true;
            @endphp
  <div class="ahhm-webinars">
  @foreach($upcome as $val)
  @if($completed_flag == false)
  <h2>Upcoming Webinars</h2>
  @endif
          @if($upcoming_flag == false)
    <a href="{{url($val->url)}}" title="{{$val->title_tag}}" target="_blank" class="webinar-card">

      <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="webinar-logo">

      <div class="card">
        <div class="card-body mt-0">
            <span class="card-text">
              <h3 class="card-title hyperlink">{{$val->title}}</h3><br>
              <p class="mb-0 name">{{$val->speaker}}</p>
              <i class="designation">{!!$val->speaker_designation!!}</i><br>
              <p class="mb-0 name">{{@$val->speaker2}}</p>
              <i class="designation">{!!@$val->speaker2_designation!!}</i><br>
              <p class="date-time mt-2 mmt-2rem"><img src="{{config('app.url')}}images/calendar.svg" alt="calendar-icon">{!!$val->date!!}</p>
            </span>
        </div>
      </div>
    </a>
    @endif  
@endforeach
  </div>
</div>
</div>

<!-- end upcoming webinars -->

          <!-- completed webinars  -->
    <div class="row mt-4rem">

      <div class="col-12">
      @if($completed_flag == false)
        <h2>Completed Webinars</h2>
        @endif
        @php $completed_flag = true @endphp
        <div class="ahhm-webinars">
        @foreach($complete as $val)
            @if($val->webinar_date <=  Carbon\Carbon::today())
          <a href="{{url($val->url)}}" title="{{$val->title_tag}}" target="_blank" class="webinar-card">

            <img src="{{config('app.url').'/webinars/'. $val->image}}" alt="{{$val->alt_tag}}" title="{{$val->alt_tag}}" class="webinar-logo">

            <div class="card">

              <div class="card-body mt-0">

                  <span class="card-text">

                    <h3 class="card-title hyperlink">{{$val->title}}</h3><br>

                    <p class="mb-0 name">{{$val->speaker}}</p>

                    <i class="designation">{!!$val->speaker_designation!!}</i><br>
                    <p class="mb-0 name">{{@$val->speaker2}}</p>
                    <i class="designation">{!!@$val->speaker2_designation!!}</i><br>
                    <p class="date-time mt-2 mmt-2rem"><img src="{{config('app.url')}}images/calendar.svg" alt="calendar-icon">{!!$val->date!!}</p>

                  </span>

              </div>

            </div>

          </a>

          @endif  
    @endforeach
        </div>
    
      </div>

    </div>
  
<!-- end completed webinars -->
  </div>



   <!--advertise-->

   <div class="col-12 col-lg-3 text-center" >

   @include('layouts.partials._square_banner')

    </div>

    <!--advertise-->





</div>




</div>

     @endsection



     @section('scripts')



     @endsection