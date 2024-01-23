@extends('../layouts/app')

@section('style')

<style>
  .list-style>ul{
    padding-left:10% !important;
  } 
  .list-style>ul>li{
    list-style-type:disc !important;   
  }
  </style>

@endsection



@section('content')
@php
      $path = Request::url();
              
$shortdescription = $pressreleases->short_description;
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $pressreleases->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';
     
      @endphp
   
      <script type="application/ld+json">
       
       {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "url": "{{$path}}",
         "name": "{{$pressreleases->title}}",
         "mainEntity": {
           "@type": "Article",
           "headline": "{{$pressreleases->title}}",
           "description": "{{$shortdescription}}",
           "image": {
             "@type": "ImageObject",
             "url": "https://industry.asianhhm.com/images/logo.png"      
           },
           "author": {
           "@type": "Organization",
           "name": "Asian Hospital & Healthcare Management",
           "url": "{{$path}}"
         },
           "publisher": {
             "@type": "Organization",
             "name": "Asian Hospital & Healthcare Management",
             "logo": {
               "@type": "ImageObject",
               "url": "https://industry.asianhhm.com/images/logo.png"     
             }
           },
           "datePublished": "{{$pressreleases->created_at}}",
           "dateModified": "{{$pressreleases->updated_at}}",
           "articleSection": "Pressreleases",
           "keywords": [{!! json_encode($metakeywords) !!}],
           "mainEntity": {
             "@type": "Question",
             "name": "{{$pressreleases->title}}",
             "acceptedAnswer": {
               "@type": "Answer",
               "text": "{{$shortdescription}}"
             }
           }
         },
         "breadcrumb": {
           "@type": "BreadcrumbList",
           "itemListElement": [
             {
               "@type": "ListItem",
               "position": 1,
               "name": "Industry Updates",
               "item": "{{ url('/industryupdates') }}"
             },
             {
               "@type": "ListItem",
               "position": 2,
               "name": "Pressreleases",
               "item": "{{url('pressreleases')}}"
             },
             {
               "@type": "ListItem",
               "position": 3,
               "name": "{{$pressreleases->title }}",
               "item": "{{$path}}"
             }
           ]
         },
         "about": {
           "@type": "Organization",
           "name": "Asian Hospital & Healthcare Management",
           "url": "https://www.asianhhm.com",
           "description": "{{$shortdescription}}",
           "logo": {
             "@type": "ImageObject",
             "url": "https://industry.asianhhm.com/images/logo.png"     
           }
         }
       }
       </script>

      <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('/industryupdates')}}" class="ahhm-breadcrumb-item">Industry Updates</a>
              <a href="" class="ahhm-breadcrumb-item">Hospitals & Healthcare Pressreleases</a>
          </div>
        </div>
      </div>
    </div>



  <div class="container">



    
    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1" style="word-wrap: break-word;">       

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

          <h1 class="mb-3 mt-2 PF-TXTRED ">{!! $pressreleases->title!!}</h1>

          <p class="small PF-Caps text-muted mb-2 mt-2">{{ date('l, F d, Y ', strtotime($pressreleases->date)) }}</p>

        <span class="list-style">{!! $pressreleases->description !!}</span>

        </div> 

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