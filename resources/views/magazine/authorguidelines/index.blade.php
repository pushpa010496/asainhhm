@extends('../layouts/app')

@section('style')


<style>
  .author-guidelines-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/author-guidelines-heroimage.jpg);
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
   .author-guidelines-heroimage h2 {
    max-width: 100% !important;
     }
}
.author-guidelines-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 50%;
  color: #fff !important;
  line-height: 3.5rem;
}
.author-guidelines-heroimage h2 span {
  font-size: 4.2rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 5rem;
}
@media screen and (max-width: 750px) {
  .author-guidelines-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }


    .author-guidelines-heroimage h2 {
   
    white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .author-guidelines-heroimage h2 {
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

<div class="container p-0 breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/magazine') }}" class="ahhm-breadcrumb-item">Magazine</a>
              <a href="" class="ahhm-breadcrumb-item">Author Guidelines</a>
          </div>
        </div>
      </div>
    </div>


      <div class="container">
        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD pl-2">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-1">

                  <h1 class="PF-Bshelf pt-2">Author Guidelines</h1>            

                </div>

              </div>



              @foreach($guideline as $val)

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <!-- <h2 class="pt-2 " >{{ $val->title }}</h2> -->
      <div class="row">
            <div class="col-12 p-0 m-0">
              <div class="author-guidelines-heroimage" id="bg-image">
                <h2>Asian Hospital & Healthcare Management provides<br><span>Cutting-edge content that offers both relevant information and knowledge.</span></h2>
              </div>
            </div>
      </div>
  <div class="pt-4"></div>

                {!!$val->description!!}                

                  <a href="{{url('/authorguidelines-download')}}" title="Download Author Guidelines">

                    <span class="download">

                      <img src="{{config('app.url')}}images/pdf-big.gif" alt="Download Author Guidelines">

                    </span>

                  </a>

              </div>             

              @endforeach

              <div class="mb-3"></div>

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



@endsection