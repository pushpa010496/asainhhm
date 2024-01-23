@extends('../layouts/app')
@section('style')
<style>
  .casestudies-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/casestudies-heroimage.jpg);
  width: 100%;
  height: auto;
  min-height: 41rem;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 5rem;
  margin-top: 1rem;
  /* background-color: #60a9e0; */
  background-position: center right;
}
@media screen and (max-width: 755px) {
   .casestudies-heroimage h2 {
    max-width: 100% !important;
     }
}
.casestudies-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 65%;
  color: #000 !important;
  line-height: 3.5rem;
}
.casestudies-heroimage h2 span {
  font-size: 3.6rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 4.2rem;
  padding-top:7px;
}
@media screen and (max-width: 750px) {
  .casestudies-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }
    /* .casestudies-heroimage h2 {
   
    white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .casestudies-heroimage h2 {
      white-space: wrap;
      max-height: 14.5em; 
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 8;
      -webkit-box-orient: vertical;
    }
  } */
 
</style>
@endsection
@section('content')
        <div class="container-fluid breadcrumb-live">
            <div class="row">
              <div class="col-12">
                  <div class="ahhm-breadcrumb">
                    <a href="{{url('/knowledgebank')}}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
                    <a href="" class="ahhm-breadcrumb-item">{{trans('messages.casestudies_title')}}</a>
                </div>
              </div>
            </div>
          </div>

        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12">
            <div class="row">
        <div class="col-12 col-lg-12 ahhm-about">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0">{{trans('messages.casestudies_title')}}</h1>
              <div class="casestudies-heroimage" id="bg-image">
          <h2>Asian Hospital & Healthcare Management<br> <span>Carefully Picked, Premium Industrial Scenarios. A Gold Mine with Practical Insights & Reviews. Reporting things as they happened.</span></h2>
            </div>
              <div class="pt-4"></div>
              <p class="mt-2">{{trans('messages.casestudies_text')}}</p>
            </div>
            @foreach($casestudies as $val)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{ route('casestudies.url',[$val->url])}}" title="{{$val->title_tag}}" title="{{$val->title_tag}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{!! $val->title!!}</h3><br>
                      <!-- <i>HOW TO IMPROVE YOUR MENTAL HEALTH WHILE SITTING AT THE WORKPLACE</i><br> -->
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>   

            @endforeach
            @include('layouts/partials/_loadmorehtml') 
        </div>        
      </div>
</div>            

              <!-- @include('layouts/partials/_loadmorehtml')  -->

            </div>

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

  var url = "{{ url('casestudies/more') }}";

 @include('layouts/partials/_loadmorejs')

</script>

@endsection