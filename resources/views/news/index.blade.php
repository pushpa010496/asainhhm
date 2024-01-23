@extends('../layouts/app')

@section('style')

@endsection
@section('content')


<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/industryupdates')}}" class="ahhm-breadcrumb-item">Industry Update</a>
              <a href="" class="ahhm-breadcrumb-item">{{trans('messages.news_title')}}</a>
          </div>
        </div>
      </div>
    </div>



  <div class="container-fluid">

    <div class="row PF-WytBG">

      <!-- // LEFT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-1">

      <div class="row">

<div class="col-12 col-lg-12 ahhm-news">

  <div class="row">

    <div class="col-12">

      <h1 class="mt-0">Hospitals & Healthcare News</h1>

      <p class="mt-2">Healthcare management has huge demand these days as it really helps in managing a hospital or a medical office. The scope of Healthcare Management systems is increasing by each day and it is true for the entire world. Healthcare Management solutions are more than one factor that contributes to the increasing demand in the healthcare sector. Some of these solutions include improved awareness about Healthcare Management services, health policies and enhancement in the demand for world class health care facilities in Hospital management Asia. In an ever-changing world, healthcare management is essential to compete in the industry in providing better care to patients.</p>

    </div>

    <!-- month new code  start -->
    
    <div class="col-12 calendar-stay-alive">
    <div class="ahhm-calendar">
        @php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp
        <a class="year">{{ date('Y')-1 }}</a>
        @foreach ($months as $key => $value) 
            <a href="{{url('/')}}/listnews/month/{{$key}}/year/{{date('Y')-1}}" class="month">{{ $value }}</a>
        @endforeach
    </div>
    <div class="ahhm-calendar present-year">
        <a class="year active">{{ date('Y') }}</a>
        @foreach ($months as $key => $value) 
            @php $currentMonth = date('n'); @endphp
            <a href="{{url('/')}}/listnews/month/{{$key}}/year/{{date('Y')}}" class="month {{ ($key > $currentMonth) ? 'inactive' : (($key == $currentMonth) ? 'active' : '') }}">{{$value}}</a>
        @endforeach
    </div>
</div>


     <!-- month  new code End -->    

      @php
                     $tempmonth = '';
                  @endphp
    @foreach($news as $val)
 
    <div class="month-category scroll-margin-offset mt-4" id="may">

        <!-- <h2 class="mt-5">May</h2> -->

        <div class="col-12">

          <div class="card pb-3">

            <div class="card-body mt-4">

              <a href="{{ route('news.url',[$val->url])}}" title="{{$val->title_tag}}">

                <span class="card-text">

                  <h3 class="card-title hyperlink">{{ $val->title}}</h3>

                  <span class="date"><img src="{{config('app.url')}}images/calendar.svg" class="calendar">{{ date('l, F d, Y ', strtotime($val->date)) }}</span>

                  {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->home_description)))),$limit = 250, $end = '...') }}

                    </span>

                  </a>


            </div>

          </div>

        </div>
    </div>
   
@endforeach
 @include('layouts/partials/_loadmorehtml')
  </div>

  

</div>



</div>

        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

          <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

            <h1 class="PF-Bshelf pt-2">{{trans('messages.news_title')}}</h1>            

          </div>

          <p>{{trans('messages.news_text')}}</p>

        </div> -->

<!--href="{{url('/').'/listnews/year/'.date('Y') }}"-->



              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-P0">

                <nav>

                   @php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); @endphp



         

                  <ul class="pagination PF-M0 PF-PT10">

                    <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{ date('Y')-1 }}</span></a> </li>

                    

                    @foreach ($months as $key => $value) 



                    <li><a href="{{url('/')}}/listnews/month/{{$key}}/year/{{date('Y')-1}}" class="PF-BrdrRds0">{{ $value }}</a></li>



                    @endforeach

                  </ul>



                

                  <ul class="pagination PF-M0 PF-PT10">

                    <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle">{{ date('Y') }}</span></a> </li>

                    

                     @foreach ($months as $key => $value) 

                      @if($key <= date('n'))

                          <li><a href="{{url('/')}}/listnews/month/{{$key}}/year/{{date('Y')}}" class="PF-BrdrRds0">{{$value}}</a></li>

                      @else

                          <li><a href="javascript:void(0)" class="PF-BrdrRds0 PF-Bgeee">{{$value}}</a></li>

                      @endif

                    @endforeach                     

                  </ul>





                </nav>

              </div> -->



        

        <!-- @foreach($news as $val)

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

          <h2 class="mb-1 PF-TXTBlk000">

            <a href="{{ route('news.url',[$val->url])}}" title="Patient Experience" class="PF-TXTBlk000">{{ $val->title}}</a>

          </h2>

          <small class="PF-Caps text-muted">{{ date('l, F d, Y ', strtotime($val->date)) }}</small>

          {{-- <p class="PF-TXTBlk">{{$val->home_description}}</p>             --}}

           <p>{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->home_description)))),$limit = 250, $end = '...') }} </p>

        </div> 

        @endforeach

         @include('layouts/partials/_loadmorehtml') -->



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

<script type="text/javascript">

  var url = "{{ url('news/more') }}";

     @include('layouts/partials/_loadmorejs')

</script>

@endsection