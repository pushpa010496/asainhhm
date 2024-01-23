@extends('../layouts/app')

@section('style')



@endsection



@section('content')
@php
      $path = Request::url();
    
               
$shortdescription = $industryreports->short_description;
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $industryreports->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';

      @endphp
      <script type="application/ld+json">
       
       {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "url": "{{$path}}",
         "name": "{{$industryreports->title1}}",
         "mainEntity": {
           "@type": "Article",
           "headline": "{{$industryreports->title1}}",
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
           "datePublished": "{{$industryreports->created_at}}",
           "dateModified": "{{$industryreports->updated_at}}",
           "articleSection": "Industry Reports",
           "keywords": [{!! json_encode($metakeywords) !!}],
           "mainEntity": {
             "@type": "Question",
             "name": "{{$industryreports->title1}}",
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
               "name": "Industry Reports",
               "item": "{{url('industryreports')}}"
             },
             {
               "@type": "ListItem",
               "position": 3,
               "name": "{{$industryreports->title1 }}",
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
              <a href="{{url('healthcare-reports')}}" style="color:#fff;font-size:1.2rem;">Healthcare Reports</a>
             
          </div>
        </div>
      </div>
    </div>



  <div class="container">
    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">       

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list">

          <h1 class="mt-2 mb-3 PF-TXTRED">{{ $industryreports->title1}}</h1>     

          <h1 class="mt-2 mb-3 PF-TXTRED">{{ $industryreports->title2}}</h1>      

          {!!$industryreports->full_report!!}

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