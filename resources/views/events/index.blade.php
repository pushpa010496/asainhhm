@extends('../layouts/app')
@section('style')

@endsection
@section('content')
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/industryupdates')}}" class="ahhm-breadcrumb-item">Industry Update</a>
              <a href="" class="ahhm-breadcrumb-item">{{trans('messages.events_title')}}</a>
          </div>
        </div>
      </div>
    </div>
      <div class="container-fluid">
               <div class="row">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-1">
            <div class="row">
<div class="col-12 col-lg-12 ahhm-events-detailed">
  <div class="row">
    <div class="col-12">
      <h1 class="mt-0">Healthcare Events and Exhibitions</h1>
      <p class="mt-2">The Events and Exhibitions page is your reference guide to all upcoming and current events in the healthcare industry. It is a monthly almanac of industry-specific tradeshows, exhibitions and events. A value-add for procurement executives and event managers, this section lets them keep their calendar updated with those all-important industry events. In case you want to submit your events and exhibition on Asian Hospital & Healthcare Management website, fill in the options available on this page.</p>
    </div>
     <!-- month new code  start -->
     <div class="col-12 calendar-stay-alive">

<div class="ahhm-calendar">

@php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp
<a  class="year">{{ date('Y') }}</a>    
@foreach ($months as $key => $value) 
@if($key >= date('n'))

<a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')}}" class="month">{{ $value }}</a>
@else
 <a href="javascript:void(0)" class="month">{{$value}}</a>
@endif
@endforeach
  </div>
  <div class="ahhm-calendar present-year">

 <a class="year active">{{ date('Y')+1 }}</a>
 @foreach ($months as $key => $value) 

 <a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')+1}}" class="month">{{$value}}</a>
 
@endforeach  



  </div>
</div>        
     
<!-- month  new code End -->  
    @php
                     $tempmonth = '';
                  @endphp
    @foreach($data as $val)
    @php $dd=date('F Y', strtotime($val -> start_date)); @endphp
                    @if($tempmonth !=$dd)
                  
                      <h2 class="text-uppercase PF-BrdrBbbbdc2 pb-1 PF-TXTRED">{{ $dd }}<span class="PF-IntigerStyle"></span></h2>
                      @php $tempmonth = $dd;  @endphp
                    @endif
    <div class="month-category scroll-margin-offset may" id="may">
 
        <!-- <h2 class="mt-5">{{ date('M', strtotime($val->start_date))}}</h2> -->
        <a href="{{$val->web_link}}" target="_blank" class="event-click">
          <div class="date">
            <span class="from">{{ date('d', strtotime($val->start_date))}}</span>
            <span class="timeline"></span>
            <span class="to">{{ date('d', strtotime($val->end_date))}}</span>
          </div>
          <div class="card event-card">
            <div class="card-body mt-0">
                <span class="card-text">
                  <h3 class="card-title hyperlink">{{ $val->title }}</h3>
                  <p class="position-relative">
                    <i>{{$val->email}}</i>
                    <span class="copy"></span>
                    </p>
                  <p>{{$val->web_link}}</p>
                  <p><img src="{{config('app.url')}}images/location-pin-black.svg" class="location" alt="location-icon">{{$val->venue}}</p>
                </span>
            </div>
          </div>
        </a>
    
    </div>
@endforeach
@include('layouts/partials/_loadmorehtml')
  </div>
</div>
</div>
            <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                  <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                    <h1 class="PF-Bshelf pt-2">{{trans('messages.events_title')}}</h1>            
                  </div>
                  <p>{{trans('messages.events_text')}}</p>
                  <p>Please <a href="{{ url('post-event') }}">click here</a> to post Events and Exhibitions</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
                  <nav>
                    @php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp
                    @if($currentyear>0)
                    <ul class="pagination PF-M0">
                      <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{ date('Y') }}</span></a> </li>
                      @foreach ($months as $key => $value) 
                      @if ($key >= date('n')) 
                      <li><a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')}}" class="PF-BrdrRds0">{{ $value }}</a></li>
                      @else
                      <li><a href="#" class="PF-BrdrRds0 PF-Bgeee">{{$value}}</a></li>
                      @endif
                      @endforeach
                    </ul>
                    @endif
                   Callender Ends Here & New Calander Starts Here -->
                    <!-- Next Year Archives -->
                    <!-- @if($nextyear>0)
                    <ul class="pagination PF-M0 PF-PT10">
                      <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{date('Y')+1 }}</span></a> </li>
                      @foreach ($months as $key => $value) 
                      <li><a href="{{url('/')}}/events/month/{{$key}}/year/{{date('Y')+1}}" class="PF-BrdrRds0">{{$value}}</a></li>
                      @endforeach
                    </ul>
                    @endif -->
                    <!-- End Of Next Year Archives -->
                  <!-- </nav>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">  
                <ul class="media-list col-md-12 p-0" id="main_content">               
                  @php
                     $tempmonth = '';
                  @endphp
                  @foreach($data as $val)
                    @php $dd=date('F Y', strtotime($val -> start_date)); @endphp
                    @if($tempmonth !=$dd)
                      <h2 class="text-uppercase PF-BrdrBbbbdc2 pb-1 PF-TXTRED">{{ $dd }}<span class="PF-IntigerStyle"></span></h2>
                      @php $tempmonth = $dd;  @endphp
                    @endif
                 EVENT -->
                  <!-- <li class="media PF-Brdrnone mb-2" data-date='{{ $dd }}'>
                    <div class="media-left">
                      <div class="PF-BrdrDDD text-center PF-P5">
                       <h3>{{ date('d', strtotime($val->start_date)) .' - '.date('d', strtotime($val->end_date))  }} </h3>
                        <div class="clearfix"></div>
                         <div class="text-uppercase pt-2">{{  date('M Y', strtotime($val->start_date)) }}</div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="media-body pl-2 pt-1">
                      <h3 class="media-heading font-weight-bold">{{ $val->title }}</h3>                    
                      <h5 class="mb-1">{{$val->venue}}</h5>
                      <h5 class="mb-1">{{$val->event_organiser}}</h5>
                      <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="mailto:{{$val->email}}">{{$val->email}}</a></h5>
                      <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="{{$val->web_link}}" target="_blank" rel="nofollow">{{$val->web_link}}</a></h5>
                    </div>
                  </li> -->
                  <!-- END EVENT -->
<!-- 
                  @endforeach
                </ul>
                 
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
<script type="text/javascript">
  var url = "{{ url('events/more') }}";
    var is_loading = false; 
    var num_messages = {{ $data_count }};
    var loaded_messages = 50;
 var intervals = 0;
    setInterval(function(){    
     if(loaded_messages <= num_messages){
      loadmore();    
    }
    console.log(intervals);
    intervals += 1;
  },4000);
      function loadmore(){
         if (is_loading == false) { 
          is_loading = true;
          loaded_messages += 50;
          $('#loader').show();
          var date = $("li.media:last-child").attr('data-date');
          console.log(date);
          $.ajax({
            url: url + '/' + loaded_messages +'/'+ date,
            type: 'get',
            success:function(data){
             $('#main_content').append(data);
             is_loading = false;
           }
         });
          if(loaded_messages >= num_messages - 1)
          {
            $('#loader').hide();                           
          }
        }
      }
</script>
@endsection