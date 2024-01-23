@extends('../layouts/app')

@section('style')
<style>
.list-style>ul{
    list-style-type:disc !important;
    padding-left:35px !important;
  }
  </style>

@endsection



@section('content')
@php
      $path = Request::url();
    
               
$shortdescription = $projects->short_description;
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $projects->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';

      @endphp
      <script type="application/ld+json">
       
       {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "url": "{{$path}}",
         "name": "{{$projects->title}}",
         "mainEntity": {
           "@type": "Article",
           "headline": "{{$projects->title}}",
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
           "datePublished": "{{$projects->created_at}}",
           "dateModified": "{{$projects->updated_at}}",
           "articleSection": "Projects",
           "keywords": [{!! json_encode($metakeywords) !!}],
           "mainEntity": {
             "@type": "Question",
             "name": "{{$projects->title}}",
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
               "name": "Knowledge Bank",
               "item": "{{ url('/knowledgebank') }}"
             },
             {
               "@type": "ListItem",
               "position": 2,
               "name": "Projects",
               "item": "{{url('projects')}}"
             },
             {
               "@type": "ListItem",
               "position": 3,
               "name": "{{$projects->title }}",
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
              <a href="{{ url('/knowledgebank') }}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
              <a href="{{ url('/projects') }}" style="color:#fff;font-size:1.2rem;">Projects</a>
          </div>
        </div>
      </div>
    </div>

  <div class="container">
    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

       

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list list-style">

          <h1 class="mb-3 mt-2 PF-TXTRED  ">{{ $projects->title}}</h1>          

          {!!$projects->description!!}

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