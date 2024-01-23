@extends('../layouts/app')

@section('style')



@endsection



@section('content')

@php
      $path = Request::url();
   
            
$shortdescription = $researchinsights->short_description;
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $researchinsights->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';
        
      @endphp
   
      <script type="application/ld+json">
       
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "{{$path}}",
  "name": "{{$researchinsights->title}}",
  "mainEntity": {
    "@type": "Article",
    "headline": "{{$researchinsights->title}}",
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
    "datePublished": "{{$researchinsights->created_at}}",
    "dateModified": "{{$researchinsights->updated_at}}",
    "articleSection": "Research Insights",
    "keywords": [{!! json_encode($metakeywords) !!}],
    "mainEntity": {
      "@type": "Question",
      "name": "{{$researchinsights->title}}",
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
        "name": "Articles",
        "item": "{{url('articles')}}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{$researchinsights->title }}",
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
              <a href="{{url('knowledgebank')}}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
              <a href="{{url('researchinsights')}}" style="color:#fff;font-size:1.2rem;">Research Insights</a>             
          </div>
        </div>
      </div>
    </div>



  <div class="container">
    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

       

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

          <h1 class="mb-2 mt-2 PF-TXTRED">{{ $researchinsights->title}}</h1>

          <h6 class="mt-3 mb-3 PF-TXTBlk">{!! $researchinsights->author_details!!}</h6>

          {!!$researchinsights->description!!}

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