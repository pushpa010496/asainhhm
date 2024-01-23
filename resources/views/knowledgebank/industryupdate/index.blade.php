@extends('../layouts/app')
@section('style')
<style>
  .industryupdates-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/industryupdates-heroimage.jpg);
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
   .industryupdates-heroimage h2 {
    max-width: 100% !important;
     }
}
.industryupdates-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 50%;
  color: #fff !important;
  line-height: 3.5rem;
}
.industryupdates-heroimage h2 span {
  font-size: 4.2rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 5rem;
}
@media screen and (max-width: 750px) {
  .industryupdates-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }


    .industryupdates-heroimage h2 {
   
    white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .industryupdates-heroimage h2 {
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
    <!--breadcrumb-->

    <div class="container-fluid breadcrumb-live">

      <div class="row">

        <div class="col-12">

            <div class="ahhm-breadcrumb">

              <a href="{{ url('/industryupdates') }}" class="ahhm-breadcrumb-item">Industry Updates</a>

          </div>

        </div>

      </div>

    </div>

    <!--/breadcrumb-->
      <div class="container-fluid">     
      
          <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-1">
            <div class="row">
<div class="col-12 col-lg-12 ahhm-about">
  <div class="row">
    <div class="col-12">
      <h1 class="mt-0">Industry Updates</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="industryupdates-heroimage" >
        <h2>Asian Hospital & Healthcare Management provides<br> <span>Cutting-edge content that offers both relevant information and knowledge.</span></h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p class="mt-5"> The magazine covers all the areas of the healthcare industry categorised broadly under the sections mentioned below. The magazine is a multitude of contemporary issues in each of these sections. They include:</p>
    </div>
      <div class="col-12">
            <div class="ahhm-offer-wrapper">
                <a href="{{url('news')}}" class="ahhm-offer-categories">
                    <svg viewBox="0 0 64 64" style="enable-background:new 0 0 64 64">
                        <path d="m62.4 24.9-6.8-1.7c-.2-.6-.5-1.2-.8-1.8l3.6-6c.5-.8.4-1.8-.3-2.4l-7.2-7.2c-.7-.7-1.7-.8-2.4-.3l-6 3.6c-.6-.3-1.2-.5-1.8-.8L39 1.5C38.8.6 38 0 37.1 0H26.9C26 0 25.2.6 25 1.5l-1.7 6.8c-.6.2-1.2.5-1.8.8l-6-3.6c-.8-.5-1.8-.4-2.4.3L5.9 13c-.7.7-.8 1.7-.3 2.4l3.6 6c-.3.6-.5 1.2-.8 1.8l-6.8 1.7c-.9.2-1.5 1-1.5 1.9V37c0 .9.6 1.7 1.5 1.9l6.8 1.7c.2.6.5 1.2.8 1.8l-3.6 6c-.5.8-.4 1.8.3 2.4l7.2 7.2c.7.7 1.7.8 2.4.3l6-3.6c.6.3 1.2.5 1.8.8l1.7 6.8c.2.9 1 1.5 1.9 1.5h10.2c.9 0 1.7-.6 1.9-1.5l1.7-6.8c.6-.2 1.2-.5 1.8-.8l6 3.6c.8.5 1.8.4 2.4-.3l7.2-7.2c.7-.7.8-1.7.3-2.4l-3.6-6c.3-.6.5-1.2.8-1.8l6.8-1.7c.9-.2 1.5-1 1.5-1.9V26.8c.1-.9-.6-1.7-1.5-1.9zM60 35.5l-6.3 1.6c-.7.2-1.2.7-1.4 1.3-.4 1.1-.8 2.3-1.4 3.3-.3.6-.3 1.4.1 2l3.4 5.6-5 5-5.6-3.4c-.6-.4-1.3-.4-2-.1-1.1.6-2.2 1-3.3 1.4-.7.2-1.2.8-1.3 1.4l-1.6 6.3h-7.1l-1.6-6.3c-.2-.7-.7-1.2-1.3-1.4-1.1-.4-2.3-.8-3.3-1.4-.6-.3-1.4-.3-2 .1l-5.6 3.4-5-5 3.4-5.6c.4-.6.4-1.3.1-2-.6-1.1-1-2.2-1.4-3.3-.2-.7-.8-1.2-1.4-1.3l-6.3-1.6v-7.1l6.3-1.6c.7-.2 1.2-.7 1.4-1.3.4-1.1.8-2.3 1.4-3.3.3-.6.3-1.4-.1-2l-3.4-5.6 5-5 5.6 3.4c.6.4 1.3.4 2 .1 1.1-.6 2.2-1 3.3-1.4.7-.2 1.2-.8 1.3-1.4L28.5 4h7.1l1.6 6.3c.2.7.7 1.2 1.3 1.4 1.1.4 2.3.8 3.3 1.4.6.3 1.4.3 2-.1l5.6-3.4 5 5-3.4 5.6c-.4.6-.4 1.3-.1 2 .6 1.1 1 2.2 1.4 3.3.2.7.8 1.2 1.4 1.3l6.3 1.6v7.1zM32 16.2c-8.7 0-15.8 7.1-15.8 15.8S23.3 47.8 32 47.8c8.7 0 15.8-7.1 15.8-15.8S40.7 16.2 32 16.2zm0 27.5c-6.5 0-11.8-5.3-11.8-11.8S25.5 20.1 32 20.1c6.5 0 11.8 5.3 11.8 11.8S38.4 43.7 32 43.7z"/>
                        <path d="M36.9 29.9h-3v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3h-3c-1.1 0-2 .9-2 2s.9 2 2 2h3v3c0 1.1.9 2 2 2s2-.9 2-2v-3h3c1.1 0 2-.9 2-2s-.9-2-2-2z"/>
                      </svg>
                    <span>NEWS</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('pressreleases')}}">
                    <svg viewBox="0 0 64 64">
                        <path data-name="Path 682" d="M60.209 17.321a12.786 12.786 0 0 1-.45 3.227L43.293 4.281a12.889 12.889 0 0 1 3.385-.49L46.637 0a16.762 16.762 0 0 0-16.55 16.753L30.1 30.1l-13.344-.015H16.7A16.764 16.764 0 0 0 0 46.637l3.791.042a12.893 12.893 0 0 1 .446-3.229L20.7 59.715a12.789 12.789 0 0 1-3.382.493L17.363 64a16.816 16.816 0 0 0 16.55-16.753L33.9 33.9l13.354.015A16.815 16.815 0 0 0 64 17.363ZM33.893 30.106l-.008-7.5 7.6 7.506ZM16.7 33.879h.412l13.009 12.848v.52a12.869 12.869 0 0 1-.813 4.494L12.095 34.736a12.777 12.777 0 0 1 4.609-.857ZM24.367 58 5.9 39.758A13.076 13.076 0 0 1 8.683 36.7l18.708 18.48A13.139 13.139 0 0 1 24.367 58Zm5.748-16.614-7.6-7.506 7.59.009Zm16.77-11.27L33.879 17.274v-.529a12.769 12.769 0 0 1 .8-4.5l17.213 17.007a12.86 12.86 0 0 1-4.641.87Zm8.418-2.83L36.594 8.809a13.083 13.083 0 0 1 3.029-2.824l18.472 18.248a13.138 13.138 0 0 1-2.795 3.058Z"/>
                      </svg>
                    <span>PRESS RELEASES</span>
                </a>
            
               
                <a class="ahhm-offer-categories" href="{{url('events')}}">
                    <svg viewBox="0 0 64.012 63.001">
                        <path data-name="Union 7" d="M13.041 63.001v-4h6.937a36.611 36.611 0 0 1-7.791-4.866 37.188 37.188 0 0 1-7.607-8.341A31.682 31.682 0 0 1 .056 35.427a3.831 3.831 0 0 1-.014-1.372v-3.554h7.6a25.17 25.17 0 0 1-.606-5.5 25 25 0 0 1 25-25 25 25 0 0 1 24.886 22.6h7.014v.057h.071v6.032a31.616 31.616 0 0 1-2.673 12.647 34.965 34.965 0 0 1-7.083 10.519 34.485 34.485 0 0 1-10 7.146h6.779v4Zm12.275-6.24a23.028 23.028 0 0 0 6.7 1.042 24.246 24.246 0 0 0 6.741-.972l1.567-9.423h-16.56Zm19.182-10.089-1.411 8.477c9.677-4.741 16.925-15.23 16.925-26.46v-2.088h-3.021A25.12 25.12 0 0 1 44.5 46.672ZM4.008 34.758c2.052 8.527 8.933 16.3 16.965 20.272l-1.391-8.354c-.088-.049-.18-.1-.273-.154A24.635 24.635 0 0 1 8.9 34.501H4.023c-.007.1-.012.185-.015.257Zm14.133 4.649a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2v-2.406h-28Zm-.949-29.255a20.86 20.86 0 0 0-6.152 14.849 21.128 21.128 0 0 0 2.876 10.653c.073.126.148.25.224.374v-3.027h10.757a9.968 9.968 0 0 1-2.857-7 10 10 0 0 1 10-10 10 10 0 0 1 10 10 9.967 9.967 0 0 1-2.858 7h10.959v2.619a20.813 20.813 0 0 0 2.899-10.619 20.859 20.859 0 0 0-6.15-14.849 20.863 20.863 0 0 0-14.849-6.151 20.856 20.856 0 0 0-14.849 6.151Zm8.848 15.849a6.006 6.006 0 0 0 6 6 6.006 6.006 0 0 0 6-6 6.005 6.005 0 0 0-6-6 6.006 6.006 0 0 0-6 6Zm2.5-13.406v-4h7.5v4Z"/>
                      </svg>
                    <span>EVENTS</span>
                </a>               
            </div>
      </div>
  </div>
</div>
</div>
              
            </div>
            <!--// Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <!-- Square Banner -->
                @include('layouts.partials._square_banner')
              <!-- End Square Banner -->
           </div>
            <!-- Square Banners // --> 
        </div>
      </div>
@endsection
@section('scripts')
@endsection