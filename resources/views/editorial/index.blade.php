@extends('../layouts/app')
@section('style')

<style>
  .editorialsection-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/editorialsection-heroimage.jpg);
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
   .editorialsection-heroimage h2 {
    max-width: 100% !important;
     }
}
.editorialsection-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 65%;
  color: #fff !important;
  line-height: 3.5rem;
}
.editorialsection-heroimage h2 span {
  font-size: 3.75rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 4.5rem;
}
@media screen and (max-width: 750px) {
  .editorialsection-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }


    /* .editorialsection-heroimage h2 {
     white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .editorialsection-heroimage h2 {
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
    <!--breadcrumb-->
    <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/editorialsection') }}" class="ahhm-breadcrumb-item">{{trans('messages.editorialsection_title')}}</a>
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
      <h1 class="mt-0">{{trans('messages.editorialsection_title')}}</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="editorialsection-heroimage" id="bg-image">
        <h2>Asian Hospital & Healthcare Management<br><span>Latest Scientific Articles, Journals, Technological updates & Insights grouped in easy to follow sections.</span></h2>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p class="mt-5"> The magazine covers all the areas of the healthcare industry categorised broadly under the sections mentioned below. The magazine is a multitude of contemporary issues in each of these sections. They include:</p>
    </div>
      <div class="col-12">
            <div class="ahhm-offer-wrapper">
                <a href="{{url('healthcare-management')}}" class="ahhm-offer-categories">
                    <svg viewBox="0 0 64 64" style="enable-background:new 0 0 64 64">
                        <path d="m62.4 24.9-6.8-1.7c-.2-.6-.5-1.2-.8-1.8l3.6-6c.5-.8.4-1.8-.3-2.4l-7.2-7.2c-.7-.7-1.7-.8-2.4-.3l-6 3.6c-.6-.3-1.2-.5-1.8-.8L39 1.5C38.8.6 38 0 37.1 0H26.9C26 0 25.2.6 25 1.5l-1.7 6.8c-.6.2-1.2.5-1.8.8l-6-3.6c-.8-.5-1.8-.4-2.4.3L5.9 13c-.7.7-.8 1.7-.3 2.4l3.6 6c-.3.6-.5 1.2-.8 1.8l-6.8 1.7c-.9.2-1.5 1-1.5 1.9V37c0 .9.6 1.7 1.5 1.9l6.8 1.7c.2.6.5 1.2.8 1.8l-3.6 6c-.5.8-.4 1.8.3 2.4l7.2 7.2c.7.7 1.7.8 2.4.3l6-3.6c.6.3 1.2.5 1.8.8l1.7 6.8c.2.9 1 1.5 1.9 1.5h10.2c.9 0 1.7-.6 1.9-1.5l1.7-6.8c.6-.2 1.2-.5 1.8-.8l6 3.6c.8.5 1.8.4 2.4-.3l7.2-7.2c.7-.7.8-1.7.3-2.4l-3.6-6c.3-.6.5-1.2.8-1.8l6.8-1.7c.9-.2 1.5-1 1.5-1.9V26.8c.1-.9-.6-1.7-1.5-1.9zM60 35.5l-6.3 1.6c-.7.2-1.2.7-1.4 1.3-.4 1.1-.8 2.3-1.4 3.3-.3.6-.3 1.4.1 2l3.4 5.6-5 5-5.6-3.4c-.6-.4-1.3-.4-2-.1-1.1.6-2.2 1-3.3 1.4-.7.2-1.2.8-1.3 1.4l-1.6 6.3h-7.1l-1.6-6.3c-.2-.7-.7-1.2-1.3-1.4-1.1-.4-2.3-.8-3.3-1.4-.6-.3-1.4-.3-2 .1l-5.6 3.4-5-5 3.4-5.6c.4-.6.4-1.3.1-2-.6-1.1-1-2.2-1.4-3.3-.2-.7-.8-1.2-1.4-1.3l-6.3-1.6v-7.1l6.3-1.6c.7-.2 1.2-.7 1.4-1.3.4-1.1.8-2.3 1.4-3.3.3-.6.3-1.4-.1-2l-3.4-5.6 5-5 5.6 3.4c.6.4 1.3.4 2 .1 1.1-.6 2.2-1 3.3-1.4.7-.2 1.2-.8 1.3-1.4L28.5 4h7.1l1.6 6.3c.2.7.7 1.2 1.3 1.4 1.1.4 2.3.8 3.3 1.4.6.3 1.4.3 2-.1l5.6-3.4 5 5-3.4 5.6c-.4.6-.4 1.3-.1 2 .6 1.1 1 2.2 1.4 3.3.2.7.8 1.2 1.4 1.3l6.3 1.6v7.1zM32 16.2c-8.7 0-15.8 7.1-15.8 15.8S23.3 47.8 32 47.8c8.7 0 15.8-7.1 15.8-15.8S40.7 16.2 32 16.2zm0 27.5c-6.5 0-11.8-5.3-11.8-11.8S25.5 20.1 32 20.1c6.5 0 11.8 5.3 11.8 11.8S38.4 43.7 32 43.7z"/>
                        <path d="M36.9 29.9h-3v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3h-3c-1.1 0-2 .9-2 2s.9 2 2 2h3v3c0 1.1.9 2 2 2s2-.9 2-2v-3h3c1.1 0 2-.9 2-2s-.9-2-2-2z"/>
                      </svg>
                    <span>Healthcare Management</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('medical-sciences')}}">
                    <svg viewBox="0 0 64 64">
                        <path data-name="Path 682" d="M60.209 17.321a12.786 12.786 0 0 1-.45 3.227L43.293 4.281a12.889 12.889 0 0 1 3.385-.49L46.637 0a16.762 16.762 0 0 0-16.55 16.753L30.1 30.1l-13.344-.015H16.7A16.764 16.764 0 0 0 0 46.637l3.791.042a12.893 12.893 0 0 1 .446-3.229L20.7 59.715a12.789 12.789 0 0 1-3.382.493L17.363 64a16.816 16.816 0 0 0 16.55-16.753L33.9 33.9l13.354.015A16.815 16.815 0 0 0 64 17.363ZM33.893 30.106l-.008-7.5 7.6 7.506ZM16.7 33.879h.412l13.009 12.848v.52a12.869 12.869 0 0 1-.813 4.494L12.095 34.736a12.777 12.777 0 0 1 4.609-.857ZM24.367 58 5.9 39.758A13.076 13.076 0 0 1 8.683 36.7l18.708 18.48A13.139 13.139 0 0 1 24.367 58Zm5.748-16.614-7.6-7.506 7.59.009Zm16.77-11.27L33.879 17.274v-.529a12.769 12.769 0 0 1 .8-4.5l17.213 17.007a12.86 12.86 0 0 1-4.641.87Zm8.418-2.83L36.594 8.809a13.083 13.083 0 0 1 3.029-2.824l18.472 18.248a13.138 13.138 0 0 1-2.795 3.058Z"/>
                      </svg>
                    <span>Medical Sciences</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('surgical-speciality')}}">
                    <svg viewBox="0 0 64 64">
                        <defs>
                          <clipPath id="a">
                            <path d="M0 0h64v64H0Z" />
                          </clipPath>
                        </defs>
                        <g clip-path="url(#a)">
                          <path d="M0 30.249h64v11.25H0Zm60.25 3.75H3.75v3.75h56.5Z" />
                        </g>
                        <path d="M45.125 49h-26.25V37.749h26.25Zm-22.5-3.75h18.75V41.5h-18.75Z" />
                        <g clip-path="url(#a)">
                          <path d="M52.625 64h-41.25v-3.75h41.25Z" />
                          <path d="M37.625 62.125h-3.75V56.5h-3.75v5.625h-3.75V52.75h11.25Z" />
                        </g>
                        <path d="M33.875 54.625h-3.75v-7.5h3.75Z" />
                        <g clip-path="url(#a)">
                          <path d="M37.625 19H11.374v-5.75a9.449 9.449 0 0 1 9.375-9.5h7.5a9.449 9.449 0 0 1 9.375 9.5Zm-22.5-3.75h18.75v-2A5.765 5.765 0 0 0 28.25 7.5h-7.5a5.765 5.765 0 0 0-5.625 5.75Z" />
                          <path d="M18.875 22.75h-3.75v-5.625h3.75ZM26.375 22.75h-3.75v-5.625h3.75ZM33.875 22.75h-3.75v-5.625h3.75ZM26.375 5.625h-3.75V0h3.75ZM64 32.125h-3.75V26.5H54.5a5.631 5.631 0 0 0-5.625 5.625h-3.75A9.386 9.386 0 0 1 54.5 22.75H64Z" />
                        </g>
                      </svg>
                    <span>Surgical Speciality</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('diagnostics')}}">
                    <svg viewBox="0 0 54.225 64">
                        <g>
                          <path data-name="Path 685" d="m33.605 47.044-6.162-10.673a2.465 2.465 0 0 1 4.269-2.465l3.7 6.4 8.538-4.93-12.326-21.332-8.538 4.93 3.7 6.4a2.465 2.465 0 0 1-4.269 2.465l-6.162-10.673 17.076-9.859 17.253 29.884Z"/>
                          <path data-name="Line 34" d="m16.021 11.663-2.465-4.269L26.363 0l2.465 4.269Z"/>
                          <path data-name="Line 35" d="M26.124 16.834a2.464 2.464 0 0 1-2.137-1.233l-4.93-8.538a2.465 2.465 0 0 1 .9-3.367 2.465 2.465 0 0 1 3.367.9l4.93 8.538a2.465 2.465 0 0 1-.9 3.367 2.454 2.454 0 0 1-1.23.333Z"/>
                          <path data-name="Path 686" d="M16.73 55.383a2.482 2.482 0 0 1-.391-.031 13.557 13.557 0 0 1 2.15-26.942h3.7a2.465 2.465 0 1 1 0 4.93h-3.7a8.628 8.628 0 0 0-1.373 17.145 2.465 2.465 0 0 1-.385 4.9Z"/>
                          <path data-name="Line 36" d="M49.295 55.522H26.311v-4.93h22.984Z"/>
                          <path data-name="Path 688" d="M54.225 64H0v-4.93h54.225Z"/>
                          <path data-name="Ellipse 30" d="M27.112 23.48a7.4 7.4 0 0 1 7.394 7.394 7.4 7.4 0 0 1-7.394 7.394 7.4 7.4 0 0 1-7.394-7.394 7.4 7.4 0 0 1 7.394-7.394Zm0 9.859a2.468 2.468 0 0 0 2.465-2.465 2.468 2.468 0 0 0-2.465-2.465 2.468 2.468 0 0 0-2.465 2.465 2.468 2.468 0 0 0 2.465 2.465Z"/>
                          <path data-name="Path 687" d="M29.839 62.641c-3.654-7.274-6.335-10.325-7.657-11.524-1.322 1.2-4 4.249-7.657 11.524l-4.405-2.213c6.125-12.194 10.205-14.3 11.31-14.649a2.465 2.465 0 0 1 1.5 0c1.1.354 5.185 2.455 11.31 14.649Z"/>
                        </g>
                      </svg>
                    <span>Diagnostics</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('technology-equipment')}}">
                    <svg viewBox="0 0 64.012 63.001">
                        <path data-name="Union 7" d="M13.041 63.001v-4h6.937a36.611 36.611 0 0 1-7.791-4.866 37.188 37.188 0 0 1-7.607-8.341A31.682 31.682 0 0 1 .056 35.427a3.831 3.831 0 0 1-.014-1.372v-3.554h7.6a25.17 25.17 0 0 1-.606-5.5 25 25 0 0 1 25-25 25 25 0 0 1 24.886 22.6h7.014v.057h.071v6.032a31.616 31.616 0 0 1-2.673 12.647 34.965 34.965 0 0 1-7.083 10.519 34.485 34.485 0 0 1-10 7.146h6.779v4Zm12.275-6.24a23.028 23.028 0 0 0 6.7 1.042 24.246 24.246 0 0 0 6.741-.972l1.567-9.423h-16.56Zm19.182-10.089-1.411 8.477c9.677-4.741 16.925-15.23 16.925-26.46v-2.088h-3.021A25.12 25.12 0 0 1 44.5 46.672ZM4.008 34.758c2.052 8.527 8.933 16.3 16.965 20.272l-1.391-8.354c-.088-.049-.18-.1-.273-.154A24.635 24.635 0 0 1 8.9 34.501H4.023c-.007.1-.012.185-.015.257Zm14.133 4.649a2 2 0 0 0 2 2h24a2 2 0 0 0 2-2v-2.406h-28Zm-.949-29.255a20.86 20.86 0 0 0-6.152 14.849 21.128 21.128 0 0 0 2.876 10.653c.073.126.148.25.224.374v-3.027h10.757a9.968 9.968 0 0 1-2.857-7 10 10 0 0 1 10-10 10 10 0 0 1 10 10 9.967 9.967 0 0 1-2.858 7h10.959v2.619a20.813 20.813 0 0 0 2.899-10.619 20.859 20.859 0 0 0-6.15-14.849 20.863 20.863 0 0 0-14.849-6.151 20.856 20.856 0 0 0-14.849 6.151Zm8.848 15.849a6.006 6.006 0 0 0 6 6 6.006 6.006 0 0 0 6-6 6.005 6.005 0 0 0-6-6 6.006 6.006 0 0 0-6 6Zm2.5-13.406v-4h7.5v4Z"/>
                      </svg>
                    <span>Technology, Equipment and Devices</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('facilities-operations')}}">
                    <svg viewBox="0 0 64 64">
                        <defs>
                          <clipPath id="a">
                            <path d="M0 0h64v64H0Z"/>
                          </clipPath>
                        </defs>
                        <g clip-path="url(#a)">
                          <path d="M60.125 63.969H3.875V38.375A1.875 1.875 0 0 1 5.75 36.5h52.5a1.875 1.875 0 0 1 1.875 1.875Zm-52.5-3.719h48.75v-20H7.625ZM18.25 17.5a13.14 13.14 0 0 1 13.125 13.125A1.875 1.875 0 0 1 29.5 32.5H7a1.875 1.875 0 0 1-1.875-1.875A13.14 13.14 0 0 1 18.25 17.5Zm9.187 11.25a9.392 9.392 0 0 0-9.187-7.5 9.392 9.392 0 0 0-9.187 7.5Z"/>
                          <path d="M18.25 6.25a7.508 7.508 0 0 1 7.5 7.5 7.508 7.508 0 0 1-7.5 7.5 7.508 7.508 0 0 1-7.5-7.5 7.508 7.508 0 0 1 7.5-7.5Zm0 11.25A3.754 3.754 0 0 0 22 13.75 3.754 3.754 0 0 0 18.25 10a3.754 3.754 0 0 0-3.75 3.75 3.754 3.754 0 0 0 3.75 3.75Z"/>
                          <path d="M22.228 11.648a1.869 1.869 0 0 1-1.326-.549 1.875 1.875 0 0 1 0-2.652l2.967-2.967a9.914 9.914 0 0 0-5.618-1.73 9.914 9.914 0 0 0-5.619 1.73l2.967 2.967a1.875 1.875 0 0 1 0 2.652 1.875 1.875 0 0 1-2.652 0L8.532 6.683a1.875 1.875 0 0 1 0-2.652A13.657 13.657 0 0 1 18.251 0a13.657 13.657 0 0 1 9.719 4.031 1.875 1.875 0 0 1 0 2.652l-4.415 4.416a1.869 1.869 0 0 1-1.327.549ZM-.125 28.749h64.25v11.5H-.125Zm60.375 3.75H3.75v4h56.5ZM59.75 25.75H36.001V7h23.75Zm-20-3.75h16.251V10.75h-16.25Z"/>
                          <path d="M47.875 32.5A1.875 1.875 0 0 1 46 30.625v-6.25a1.875 1.875 0 0 1 1.875-1.875 1.875 1.875 0 0 1 1.875 1.875v6.25a1.875 1.875 0 0 1-1.875 1.875Z"/>
                          <path data-name="Rectangle 114" d="M45 14h6v4h-6z"/>
                          <path data-name="Union 2" d="M30.286 57v-4.285H26v-3.429h4.287V45h3.428v4.285H38v3.429h-4.286V57Z"/>
                        </g>
                      </svg>
                    <span>Facilities & Operations Management</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('information-technology')}}">
                    <svg viewBox="0 0 70.183 64">
                        <g>
                          <path d="M70.183 52.516V0H0v52.516h33.028v7.357H8.246V64h53.691v-4.127H37.155v-7.357ZM4.127 4.128h61.929v44.261H4.127Z"/>
                          <path d="M16.626 11.096h-4.13v3.327H9.172v4.127h3.324v3.327h4.13V18.55h3.327v-4.127h-3.327ZM52.43 26.133l-4.443-18.89-6.676 14.821-4.242-5.035-6.808 6.808h-3.822v4.127h5.532l4.839-4.839 5.571 6.613 4.374-9.711 3.4 14.446 6.231-6.5 5.255.177.031-4.127-7.034-.19ZM26.484 39.337h6.511v4.127h-6.511ZM38.085 39.337h6.511v4.127h-6.511ZM49.686 39.337h6.508v4.127h-6.511ZM9.747 36.888h9.629v4.127H9.747ZM9.747 27.415h9.629v4.127H9.747Z"/>
                        </g>
                      </svg>
                    <span>Information Technology</span>
                </a>
                <a class="ahhm-offer-categories" href="{{url('advertorials')}}">
                    <svg viewBox="0 0 63.584 64.936">
                        <path data-name="Union 12" d="M40.043 53.965 34.8 58.21l-1.082-14.362H8.001V20.182H44.92v19.857l8.883 2.782-4.528 3.669 8.882 10.971-9.232 7.475Zm9.328 6.741 4.555-3.69-8.882-10.971 2.507-2.03-11.065-3.466.882 11.71 3.119-2.525Zm-37.37-20.858h21.417l-.265-3.494 7.764 2.432v-14.6H12.001Zm-12 19.833V0h63.584v47.427h-4V16.181H4.001v39.5h25.667v4Zm4-47.5h55.583V4.435L4.001 4.029Zm23.452 24.067v-9.8h4.832a6.687 6.687 0 0 1 2.891.595 4.527 4.527 0 0 1 1.947 1.7 4.821 4.821 0 0 1 .692 2.6 4.823 4.823 0 0 1-.692 2.6 4.514 4.514 0 0 1-1.947 1.7 6.665 6.665 0 0 1-2.891.595Zm3.305-2.576h1.387a2.355 2.355 0 0 0 1.7-.608 2.255 2.255 0 0 0 .638-1.716 2.254 2.254 0 0 0-.638-1.714 2.349 2.349 0 0 0-1.7-.61h-1.387Zm-7.251 2.576-.658-1.708h-3.724l-.658 1.708h-3.359l4.282-9.8h3.25l4.284 9.8Zm-3.473-4.088h1.9l-.951-2.464Zm26.967 4.02v-4h10v4Zm0-6v-4h10v4Zm0-6v-4h10v4Zm-14-14v-4h23v4Zm-13-2a2 2 0 0 1 2-2 2 2 0 0 1 2 2 2 2 0 0 1-2 2 2 2 0 0 1-2-1.999Zm-6 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2 2 2 0 0 1-2 2 2 2 0 0 1-2-1.999Zm-6 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2 2 2 0 0 1-2 2 2 2 0 0 1-2-1.999Z"/>
                      </svg>
                    <span>Advertorials</span>
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