@extends('../layouts/app')

@section('style')

<style>
  .list-style>ul{
    padding-left:10%;
  }
  .list-style>ul>li{
    list-style-type: disc;
  }
  </style>

@endsection



@section('content')

@php
      $path = Request::url();
           
$full_description = $data->description;
$full_description = str_replace('"', '', $full_description);
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
    "description": "{{$full_description}}",
    "image": {
      "@type": "ImageObject",
      "url": "https://industry.asianhhm.com/images/logo.png"      
    },
    "author": {
    "@type": "Person",
    "name": "{{$data->author}}",
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
    "articleSection": "Book Shelf",
    "keywords": [{!! json_encode($metakeywords) !!}],
    "mainEntity": {
      "@type": "Question",
      "name": "{{$data->title}}",
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
        "name": "Book Shelf",
        "item": "{{url('bookshelf')}}"
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
              <a href="{{ url('/bookshelf') }}" style="color:#fff;font-size:1.2rem;">Book Shelf</a>
          </div>
        </div>
      </div>
    </div>




  <div class="container">

    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



        <div class="col-lg-12 pt-2 pb-2">

          <div class="col-lg-12 p-0">

            <h1 class="PF-TXTRED">{{ $data->title  }}</h1>

          </div>

        </div>



        <div class="col-lg-12">

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-12 pb-3"> 

              <img class="img-fluid" src="{{ config('app.url') .'knowledgebank/bookshelf/'. $data->bookshelf_image}}" alt="{{$data->alt_tag}}" title="{{$data->title_tag}}" width="100%"> 

              <div class="pl-2 pt-2 PF-BrdrDDD PF-BGf7f7f7">

                <p><strong>Pages:</strong> {{$data->no_pages}}</p>

                <p><strong>Publisher:</strong> {{$data->publisher}}</p>

                <p>Year of Publication:<strong> {{ date('Y', strtotime( $data->publisher_date)) }}</strong></p> 

              </div>

            </div>



            <div class="col-lg-9 col-md-9 col-sm-8 col-12 PF-PB20 list-style">

              <p><strong>Author(s) :</strong> {{$data->authors}}</p>

              <p><strong>Book Description:</strong></p>

               {!! $data->description !!}  

            </div> 

          </div>  

        </div>

      </div>

      <!-- // RIGHT SECTION // --> 



      <!--// RIGHT SECTION - Square Banners -->

      <div class="col-lg-3 col-md-3 d-none d-sm-block text-center">               

       

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