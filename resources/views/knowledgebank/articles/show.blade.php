@extends('../layouts/app')
@section('style')
<style>
  .list-style>ul{
  padding-left:6%;
  list-style-type: disc;
  } 
  h3{
    line-height:40px !important;
  }
  .p-style{
    font-family: 'Lato', sans-serif !important;
    /* font-size: 14px !important; */
    color:#000 !important;
    
  }
  </style>
@endsection
@section('content')
<!-- <script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script> -->
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
    "datePublished": "{{$data->created_at}}",
    "dateModified": "{{$data->updated_at}}",
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
        "name": "{{$data->title }}",
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
      </script>
      <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/knowledgebank') }}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
              <a href="{{ url('/articles') }}" style="color:#fff;font-size:1.2rem;">Healthcare Articles</a>
          </div>
        </div>
      </div>
    </div>
  <div class="container-fluid">
    <div class="row PF-WytBG" style="word-wrap: break-word;">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-xs-12  p-1" >
      <div class="row">
<div class="col-12 col-lg-12 ahhm-article">
  <div class="row">
    <div class="col-12">
      <h3 class="mt-0" style="font-size:20px !important;">{{ $data->title}}</h3>
      <h2 class="mt-2">{{ $data->sub_title }}</h2>
        </div>
    <div class="col-12 mt-3 author-wrapper">
    @if($data->authors->count() != 0)
    @foreach($data->authors as $val)
      <div class="author">
        <img src="{{ config('app.url').'/contributors/'.$val->image }}" class="lazy-bg author-img" alt="article-author">
        <div class="author-details">
          <label>Author</label>
          <h4><strong>{{ $val->title }}</strong></h4>
          <!-- <i>CEO & Mental Health Practitioner</i> -->
          <a href="javascript:void()">More about Author</a>
          <p class="author-details-toggle p-style">
          {{strip_tags(html_entity_decode(ucfirst($val->details))) }}
          </p>
        </div>
      </div>
@endforeach
      @endif
      <div class="article-subject">
      </div>
    </div>
    @if($data->abstract)
    <div class="col-12 mt-5 ">
    <p class="mt-4"><div class="p-style"> {!! $data->abstract !!}</div></p>
      <!-- <img data-src="https://images.unsplash.com/photo-1600433771301-148570d0e6d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="lazy lazy-bg article-img"> -->
    </div>
    @endif
   <div class="col-12 list-style p-style">
    {!!$data->main_body!!}
   </div>
  </div>
</div>
</div>
                </div>
        <!-- // RIGHT SECTION // --> 
      <!--// RIGHT SECTION - Square Banners -->
      <div class="col-lg-3 col-xs-12 text-center"> 
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