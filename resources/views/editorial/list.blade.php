@extends('../layouts/app')
@section('style')
@endsection
@section('content')
     <!--breadcrumb-->

     <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/editorialsection') }}" class="ahhm-breadcrumb-item">Editorial Section</a>
              <a href="" class="ahhm-breadcrumb-item">{!! $healthcarectg[0]->category->name !!}</a>
          </div>
        </div>
      </div>
    </div>
<!--/breadcrumb-->
      <div class="container-fluid">
               <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-1">
            <div class="row">
        <div class="col-12 col-lg-12 ahhm-about">
        
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0">{!! $healthcarectg[0]->category->name !!}</h1>
            
              @php
    $currentUrl = request()->url();
@endphp

@if ($currentUrl != "https://www.asianhhm.com/foreword")
    <div>
        <!-- <h2>Asian Hospital & Healthcare Management<br><span>{!! $healthcarectg[0]->category->title_description !!}</span></h2> -->
        <img src="{{ config('app.url') }}categories/{{ $healthcarectg[0]->category->image }}"  />
    </div>
@endif
              <div class="">&nbsp;</div>
              @if($healthcarectg->count() == 0)
              <p >Description for Category</p>
              @else
              {!! $healthcarectg[0]->category->description !!}
              @endif 
                            
            </div>

            <!-- list -->
            @foreach($healthcarectg as $healthcareinfo)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{url(Request::segment(count(Request::segments())) .'/'. $healthcareinfo->url)}}" title="{{$healthcareinfo->title}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{{$healthcareinfo->title}}</h3><br>
                      @if($healthcareinfo->sub_title != null)
                      <i>{{$healthcareinfo->sub_title}}</i><br>
                      @endif
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($healthcareinfo->short_description)))),$limit = 350, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>
@endforeach
<div  id="main_content"></div>

<div class="clearfix"></div>

<h3 class="text-center PF-ArrowAnimation" >

  <span id="loader" style="cursor:pointer;">

    <img src=" {{ config('app.url').'/images/ajax-loader.gif' }}">

  </span>

</h3>
          </div>
        </div>        
      </div>
           
            </div>
            <!-- // RIGHT SECTION // --> 
            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3  text-center">               
              @include('layouts.partials._square_banner')
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>
      </div>
      
@endsection
@section('scripts')

<script type="text/javascript">
    @include('layouts/partials/_loadmorejs')
    var is_loading = false; 
    var num_messages = {{ $data_count }};
    var loaded_messages = 0;
    var intervals = 0;
    setInterval(function(){    
     if(loaded_messages <= num_messages){
      loadmore();    
    }
    console.log(intervals);
    intervals += 1;
  },2000);
  function loadmore(){
    var url = "{{ url('editorialloadmore') }}";
  var slug = "{{ Request::segment(1) }}";
    if (is_loading == false) { 
            is_loading = true;
            $('#loader').show();
             loaded_messages += 10;
            $.ajax({
              url: url + '/' + slug +'/'+ loaded_messages,
              type: 'get',              
              success:function(data){
               $('#main_content').append(data);
               is_loading = false;              
             }
           });
            if(loaded_messages >= num_messages - 1)
            {
                is_loading = true;
              $('#loader').hide();                           
            }
           }
         }
</script>
@endsection