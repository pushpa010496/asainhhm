@extends('../layouts/app')

@section('style')



@endsection



@section('content')
@php
      $path = Request::url();
    
               
$shortdescription = $whitepapers->short_description;
$shortdescription = str_replace('"', '', $shortdescription);
$keywords= $whitepapers->meta_keywords;

$metakeywords='"' . str_replace(',', '","', $keywords) . '"';

      @endphp
      <script type="application/ld+json">
       
       {
         "@context": "https://schema.org",
         "@type": "WebPage",
         "url": "{{$path}}",
         "name": "{{$whitepapers->title}}",
         "mainEntity": {
           "@type": "Article",
           "headline": "{{$whitepapers->title}}",
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
           "datePublished": "{{$whitepapers->created_at}}",
           "dateModified": "{{$whitepapers->updated_at}}",
           "articleSection": "Whitepapers",
           "keywords": [{!! json_encode($metakeywords) !!}],
           "mainEntity": {
             "@type": "Question",
             "name": "{{$whitepapers->title}}",
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
               "name": "Whitepapers",
               "item": "{{url('whitepapers')}}"
             },
             {
               "@type": "ListItem",
               "position": 3,
               "name": "{{$whitepapers->title }}",
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
              <a href="{{url('whitepapers')}}" style="color:#fff;font-size:1.2rem;">Whitepapers</a>             
          </div>
        </div>
      </div>
    </div>


      <div class="container">
              <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

                <h1 class="mb-1 mt-2 PF-TXTRED">{{ $whitepapers->title}}</h1>               

                <p>{!!$whitepapers->description!!}</p> 

                  @if(@$whitepapers->pdf)

                   <h2 class="mb-1 mt-2 PF-TXTRED">Download '.pdf' Format of the whitepaper.</h2> 

                    <a href="{{ route('whitepapersform.download',[$whitepapers->url])}}" title="Download Whitepapers">

                      <span class="download">

                        <img src="{{config('app.url')}}images/pdf-big.gif" alt="Download Whitepapers">

                      </span>

                    </a>  

                  @endif           

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