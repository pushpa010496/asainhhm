@extends('../layouts/app')

@section('style')



@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/industryupdates')}}" class="ahhm-breadcrumb-item">Industry Update</a>
              <a href="" class="ahhm-breadcrumb-item">{{trans('messages.pressreleases_title')}}</a>
          </div>
        </div>
      </div>
    </div>




      <div class="container-fluid">

        <div class="row p-5 pt-0 pr-0">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 ">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">{{trans('messages.pressreleases_title')}}</h1>            

                </div>

                <p>{{trans('messages.pressreleases_text')}}</p>

              </div>


  <!-- month new code  start -->
  <div class="col-12 calendar-stay-alive">

<div class="ahhm-calendar">

@php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp
<a  class="year">{{ date('Y')-1 }}</a>    
@foreach ($months as $key => $value) 
<a href="{{url('/')}}/listpressreleases/month/{{$key}}/year/{{date('Y')-1}}" class="month">{{ $value }}</a>
@endforeach
  </div>
  <div class="ahhm-calendar present-year">

 <a class="year active">{{ date('Y') }}</a>
 @foreach ($months as $key => $value) 
 @if($key <= date('n'))

 <a href="{{url('/')}}/listpressreleases/month/{{$key}}/year/{{date('Y')}}" class="month">{{$value}}</a>
 @else
 <a href="javascript:void(0)" class="month">{{$value}}</a>
@endif
@endforeach  



  </div>
</div>
<!-- month  new code End -->  


@php
$tempmonth = '';
@endphp
@foreach($pressreleases as $val)

<div class="month-category scroll-margin-offset mt-4" id="may">


<div class="col-12">

<div class="card pb-3">

<div class="card-body mt-4">

<a href="{{ route('pressreleases.url',[$val->url])}}" title="{{$val->title_tag}}">

<span class="card-text">

<h3 class="card-title hyperlink">{{ $val->title}}</h3>

<span class="date"><img src="{{config('app.url')}}images/calendar.svg" class="calendar">{{ date('l, F d, Y ', strtotime($val->date)) }}</span>
<br>

{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...') }}

</span>

</a>


</div>

</div>

</div>
</div>

@endforeach











              @include('layouts/partials/_loadmorehtml')





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

<script type="text/javascript">

  var url = "{{ url('pressreleases/more') }}";

  @include('layouts/partials/_loadmorejs')

</script>

@endsection