@extends('../layouts/app')
@section('style')
@endsection
@section('content')
        <!--breadcrumb-->
    <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="" class="ahhm-breadcrumb-item">Magazine</a>
              <a href="" class="ahhm-breadcrumb-item">Advisory Board</a>
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
        <h1 class="mt-0">Advisory Board</h1>
        <p class="mt-2">The e-Book version of Asian Hospital & Healthcare Management provides you the feel of print edition in digital format. Loaded with a host of user friendly features, Asian Hospital & Healthcare Management e-Book provides a whole new experience and makes reading the magazine a pleasure to treasure on industry know-how. The inbuilt tools provide easy manoeuvring through the e-Book.</p>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-12">
        <div class="ahhm-webinars">
        @foreach($advisoryboard as $val)
          <div class="webinar-card ahhm-advisory-board-screen">
            <img src="{{ config('app.url').'advisoryboard/'.$val->image}}" title="{{ $val->title_tag }}" alt="{{ $val->title }}" class="advisory-board-mem" >
            <div class="card">
              <div class="card-body mt-0">
                  <span class="card-text">
                    <h3 class="card-title">{{ $val->title }}</h3><br>
                    <p class="mb-0"><i>{!! $val->home_description !!}</i></p><br>
                    <p class="mb-0">{!!$val->description!!}</p>
                  </span>
              </div>
            </div>
          </div>
        @endforeach
        @include('layouts/partials/_loadmorehtml')
        </div>
      </div>
    </div>
  </div>
   <!--advertise square banner-->
   <div class="col-12 col-lg-3 ahhm-advertise">
   @include('layouts.partials._square_banner')
    </div>
    <!--advertise banner end-->
</div>
<!--/advertise section-->
</div>
<!--/content div-->
@endsection
@section('scripts')
<script type="text/javascript">
   var url = "{{ url('advisory-board/more') }}";
     @include('layouts/partials/_loadmorejs')
</script>
@endsection