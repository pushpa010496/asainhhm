@extends('../layouts/app')

@section('style')

<style>
  .testimonials-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/testimonials-heroimage.jpg);
  width: 100%;
  height: auto;
  min-height: 40rem;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 5rem;
  margin-top: 1rem;
  /* background-color: #60a9e0; */
  background-position: center right;
}
@media screen and (max-width: 755px) {
   .testimonials-heroimage h2 {
    max-width: 100% !important;
     }
}
.testimonials-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 50%;
  color: #fff !important;
  line-height: 3.5rem;
}
.testimonials-heroimage h2 span {
  font-size: 4.2rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 5rem;
}
@media screen and (max-width: 750px) {
  .testimonials-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }


    .testimonials-heroimage h2 {
   
    white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .testimonials-heroimage h2 {
      white-space: wrap;
      max-height: 14.5em; 
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 8;
      -webkit-box-orient: vertical;
    }
  }
 
</style>
@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/magazine') }}" class="ahhm-breadcrumb-item">Magazine</a>
              <a href="" class="ahhm-breadcrumb-item">{{ucwords(Request::segment(count(Request::segments())))}}</a>
          </div>
        </div>
      </div>
    </div>



      <div class="container-fluid">

        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-1">

            <div class="col-12 col-lg-12 ahhm-testimonials">

<div class="row">

  <div class="col-12">

    <h1 class="mt-0">Testimonials</h1>
    <div class="row">
            <div class="col-12 p-0 m-0">
              <div class="testimonials-heroimage" id="bg-image">
                <h2>Asian Hospital & Healthcare Management provides<br><span>Cutting-edge content that offers both relevant information and knowledge.</span></h2>
              </div>
            </div>
      </div>
      <div class="pt-4"></div>
    <p class="mt-2 ">List of Healthcare testimonals given, This is great, to the point and informative. The layout is also very clear unlike some that are so different icons everywhere.</p>

  </div>

</div>



<div class="row mt-3">
@foreach($testimonials as $val)
  <div class="col-12">

    <div class="testimonial-each">

      <div class="testimonial">

          <img src="{{config('app.url')}}images/left-quote.svg" alt="quotation-marks" class="quotation-marks">{{ preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))) }}<img src="{{config('app.url')}}images/right-quote.svg" alt="quotation-marks" class="quotation-marks quotation-marks-right">

        </div>

        <div class="attestant">

          <img src="{{ config('app.url').'magazine/testimonials/'.$val->image}}" alt="attestant-img">

          <p class="attestant-name">{{$val->name}} - <br><i>{{$val->designation}},{{$val->company}}</i></p>

        </div>

    </div>

    

  </div>

@endforeach

  

</div>





</div>







            

              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">{{trans('messages.testimonials_title')}}</h1> 

                </div>
                <p class="mb-0">{{trans('messages.testimonials_text')}}</p>            
              </div> -->
              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
              @foreach($testimonials as $val)

                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-BrdrBEEE mt-4">

                  <div class="row">

                    <p class="col-lg-8 col-md-8 col-sm-9 col-xs-12 pt-3">

                      <span>

                        <img src="{{config('app.url')}}images/Left_quote_14.png" class="mr-2 PF-MTN10" alt="quotes">

                      </span> -->

                      <!-- {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))),$limit = 400, $end = '...') }} -->

                      <!-- {{ preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))) }}

                      <span>

                        <img src="{{config('app.url')}}images/right_quote_14.png" class="ml-2 PF-MTN10" alt="quotes">

                      </span>

                    </p>

                    <h2 class="col-lg-4 col-md-4 col-sm-3 col-xs-12 PF-BGf7f7f7 mb-0 p-3"><span class="PF-TXTRED">{{$val->name}}</span><br>

                     <p class="small mb-0">{{$val->designation}}, {{$val->company}}</p>

                    </h2>

                  </div>

                </div>

              @endforeach
                 @include('layouts/partials/_loadmorehtml')             

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

  var url = "{{ url('testimonials/more') }}";

    @include('layouts/partials/_loadmorejs')

</script>

@endsection