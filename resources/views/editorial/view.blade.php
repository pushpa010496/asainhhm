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
      if($data->authors->count() != 0){
            foreach($data->authors as $val)  {

      if($val->title !="No Author")       {      
      $author=$val->title;


            }else{
              $author="Noauthor";      
                }
          }
        }else{
          $author="";
        }
                  
            
$shortdescription = $data->abstract;
$full_description = $data->main_body;
$full_description = str_replace('"', '', $full_description);
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $data->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';
      @endphp

      <script type="application/ld+json">
       
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "{{$path}}",
  "name": "{{$data->title}}",
  "mainEntity": {
    "@type": "Article",
    "headline": "{{$data->title}}",
    "description": "{{$shortdescription}}",
    "image": {
      "@type": "ImageObject",
      "url": "https://industry.asianhhm.com/images/logo.png"      
    },
    "author": {
    "@type": "Person",
    "name": "{{$author}}",
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
    "datePublished": "2023-06-23",
    "dateModified": "2023-06-23",
    "articleSection": "Article",
    "keywords": [{!! json_encode($metakeywords) !!}],
    "mainEntity": {
      "@type": "Question",
      "name": "{{$data->title}}",
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
        "name": "Editorial Section",
        "item": "{{ url('/editorialsection') }}"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "{{$data->category->name}}",
        "item": "{{url(Request::segment(1))}}"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "{{$data->title}}",
        "item": "{{Request::url();}}"
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
              <a href="{{ url('/editorialsection') }}" class="ahhm-breadcrumb-item">Editorial Section</a>
              <a href="{{ url()->previous() }}" style="color:#fff;font-size:12px;">{{$data->category->name}}</a>
             
          </div>
        </div>
      </div>
    </div>
      <div class="container-fluid">
     
        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 p-1">
            <div class="row">
<div class="col-12 col-lg-12 ahhm-article">
  <div class="row">
    <div class="col-12">
      <h2 class="mt-0">{{ $data->title}}</h2>
      <h3 class="mt-2">{{ $data->sub_title }}</h3>
     
    </div>
    <div class="col-12 mt-3 author-wrapper">
    @if($data->authors->count() != 0)
    @foreach($data->authors as $val)
        <div class="author">
            <img src="{{ config('app.url').'contributors/'. $val->image }}" alt="{{ $val->alt_tag }}" class="lazy-bg author-img" alt="article-author">
            <div class="author-details">
                <label>Author</label>
                <h3>{{ $val->title }}</h3>
                <!-- <i>CEO & Mental Health Practitioner</i> -->
                <a href="javascript:void()">More about Author</a>
                <p class="author-details-toggle">
                    {!! strip_tags(html_entity_decode(ucfirst($val->authorbio))) !!}
                </p>
            </div>
        </div>
    @endforeach
@endif

      
    </div>
    @if($data->abstract)
    <div class="col-12 mt-5">
    <p class="mt-4"> {!! $data->abstract !!}</p>
      <!-- <img data-src="https://images.unsplash.com/photo-1600433771301-148570d0e6d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="lazy lazy-bg article-img"> -->
    </div>
    @endif
    <div class="col-12 mt-5 list-style" style="word-wrap: break-word;">
    {!! $data->description !!}
  </div>
  </div>
</div>
</div>
            </div>    
            <!-- // RIGHT SECTION // --> 
            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
             <!-- Square Banner -->
                @include('layouts.partials._square_banner')
             <!-- End Square Banner -->
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>
      </div>
@endsection
@section('scripts')
@endsection