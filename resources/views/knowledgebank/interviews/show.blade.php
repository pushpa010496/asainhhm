@extends('../layouts/app')
@section('style')
@endsection
@section('content')

@php
      $path = Request::url();
           
$full_description = $interviews->description;
$full_description = str_replace('"', '', $full_description);
$keywords= $interviews->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';
     
      @endphp
      <script type="application/ld+json">
       
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "{{$path}}",
  "name": "{{$interviews->title}}",
  "mainEntity": {
    "@type": "Article",
    "headline": "{{$interviews->title}}",
    "description": "{{$full_description}}",
    "image": {
      "@type": "ImageObject",
      "url": "https://industry.asianhhm.com/images/logo.png"      
    },
    "author": {
    "@type": "Person",
    "name": "{{$interviews->name}}",
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
    "datePublished": "{{$interviews->created_at}}",
    "dateModified": "{{$interviews->updated_at}}",
    "articleSection": "Interviews",
    "keywords": [{!! json_encode($metakeywords) !!}],
    "mainEntity": {
      "@type": "Question",
      "name": "{{$interviews->title}}",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "{{$full_description}}"
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
        "name": "Interviews",
        "item": "{{url('interviews')}}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{$interviews->title }}",
        "item": "{{$path}}"
      }
    ]
  },
  "about": {
    "@type": "Organization",
    "name": "Asian Hospital & Healthcare Management",
    "url": "https://www.asianhhm.com",
    "description": "{{$full_description}}",
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
              <a href="{{ url('/interviews') }}" style="color:#fff;font-size:1.2rem;">Interviews</a>
          </div>
        </div>
      </div>
    </div>
  <div class="container">
        <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="pt-2 PF-TXTRED">{{ $interviews->title}}</h1>        
        </div> 
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2 pb-3"> 
          <div class="media PF-BGf7f7f7 PF-BrdrDDD mb-3 author-brdr">
            <div class="row">
              @if($interviews->photo)
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 pr-0" align="text-center">
                <img src="{{ config('app.url').'knowledgebank/interview/'.$interviews->photo }}" alt="{{ $interviews->alt_tag }}" width="100%">
              </div>
              @else
              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 pr-0" align="text-center">
               <img class="img-fluid shadow-sm" src="{{ config('app.url').'contributors/' }}/1421757887-img-contributer.jpg" style="min-width: 110px;" />
              </div>
              @endif
              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <h3 class="PF-TXTRED display-5">{{ $interviews->name}} ,&nbsp;
                  <small class="PF-TXTBlk">{{ $interviews->designation}}</small>
                </h3>
                <p class="mb-0">{!!$interviews->description!!}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          {!!$interviews->quest_answer!!}
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