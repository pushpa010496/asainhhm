@extends('../layouts/app')

@section('style')



@endsection

@section('content')

   <!--breadcrumb-->
   <div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/magazinesection') }}" class="ahhm-breadcrumb-item">Magazine Section</a>
              <a href="" class="ahhm-breadcrumb-item">Current Issue</a>
          </div>
        </div>
      </div>
    </div>
<!--/breadcrumb-->


<div class="container-fluid">
  
  <div class="row">

    <!-- // RIGHT SECTION --> 

    <div class="col-lg-9 col-md-9 col-sm-9 col-12  p-1">


    <div class="row">

<div class="col-12 col-lg-12 ahhm-ebook-archives">

  <div class="row">

    <div class="col-12">

      <h1 class="mt-0">Current Issue - {{ ucfirst($ebook->issue->issue_no)}}</h1>

      <p class="mt-2">This Healthcare Magazine is the source for a plethora of unique Healthcare articles. Several notable figures in the medical industry, from top med schools and hospitals are featured in the Medical Sciences section, with their expert knowledge of the field.</p>

    </div>

  </div>

 

  <div class="row mt-2">

    <div class="col-12">

      <div class="current-issue">

        <div class="row m-0">

            <div class="col-12 d-flex p-0">

              <div class="magazine-cover">

                <img class="lazy-bg" src="{{ config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->magazine_image }}" alt="ahhm-current-issue">

              </div>

                

                <div class="current-issue-details p-0">

                @php  

                  $categori = $categories->whereIn('id',explode(',',$ebook->issue->category));

                  @endphp
                  <h2 class="mmt-2rem">{{$ebook->title}}</h2>

                  <ul class="focused-points">
                  @foreach($ebook->issue->categories as $category)
                      <li>{{ $category->name }}</li>

                      <!-- <li>Healthcare Management</li>

                      <li>Medical Sciences</li>

                      <li>Surgical Speciality</li>

                      <li>Diagnostics</li>

                      <li>Technology, Equipment & Devices</li>

                      <li>Information Technology</li>

                      <li>Advertorials</li> -->
                     
                      @endforeach
                    
                      <!-- <form action="{{ route('ebook.post') }}" method="post" accept-charset="utf-8">
                                              
                          @csrf
                          <input type="hidden"  name="title" value="">

                          <input type="hidden"  name="ebook_id" value="{{ $ebook->id }}">

                          <input type="hidden"  name="issue_id" value="{{ $ebook->issue->id }}">
                          <input type="hidden" value="ebook" name="page">
                          
 <button type="submit" class="btn btn-ahhmred mt-3" target="_blank">Go to Digital Magazine</button>
                      
 </form>   -->
 <a href="{{url('/latest-ebook')}}"><button type="submit" class="btn btn-ahhmred mt-3" target="_blank">Go to Digital Magazine</button></a>
                       
                  </ul>
                 
                  

              </div>

            </div>

            

            <div class="current-issue-stamp">

                <h1>{{ ucfirst($ebook->issue->issue_no)}}</h1>

                <h2>CURRENT ISSUE</h2>

            </div>

        </div>

      </div>

    </div>

  </div>








            <div class="row mt-5">

                      <div class="col-12">
                              @foreach($ebook->issue->categories as $category)   
                                  <a href="{{url($category->url)}}"><h2>{{ $category->name }}</h2></a>
                                  {{-- Article loop --}}
                                 
                          @foreach($articles as $article)

                          @if($article->category_id ==  $category->id)
                          <div class="card pb-3">
                    <div class="card-body mt-0">
                    <span class="card-text">
                          <h3 class="mb-1 card-title hyperlink">

                          


                           
                            @if($current_issue->id === $article->issue->id)
                           
                            <a href="{{url('/') .'/'.$category->url.'/'. $article->url}}" title="{{$article->title_tag }}">{{$article->title}}</a>
                           
                           
                            @endif
                          </h3>
                         
                          <h4 class="text-muted small mb-1 mt-2"><i>{{$article->sub_title}}</i></h4>

                          <p class="PF-TXTBlk">

                            {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($article->short_description)))),$limit = 350, $end = '...') }}



                          </p>

                          </span>
                          </div>

</div>
                          @endif



                          @endforeach 

                         
                          {{-- End Article loop --}}
                          @endforeach
                              </div>



 

  </div>



  



</div>

  

</div>

      <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

          <h1 class="PF-Bshelf pt-2">{{trans('messages.magazine_title')}}</h1>            

        </div>



        <p>{{trans('messages.magazine_text')}}</p>

      </div> -->
      <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12">                                  

        

          <div class="text-center">  

            <img src="{{ config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->magazine_image }}" alt="{{ $ebook->alt_tag }}" title="{{ $ebook->title_tag }}" class="img-fluid" />

          </div>

          <div class="PF-IMGCap">

            <div class="row">

              <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                <h2 class="PF-TXTRED font-weight-bold pl-3">{{ ucfirst($ebook->issue->issue_no)}}</h2>

              </div>

              <div class="col-lg-8 col-md-8 col-sm-12 col-12">

                <div class="row">

                  @php  



                  $categori = $categories->whereIn('id',explode(',',$ebook->issue->category));



                  @endphp

                  @foreach($ebook->issue->categories as $category)

                  <div class="col-lg-6 col-md-6 col-sm-8 col-12">

                    <li class="ml-3"><a href="#{{$category->name}}">{{ $category->name }}</a></li>

                  </div>

                  @endforeach



                  {{--  @foreach($categori as $category)                         

                    <div class="col-lg-6 col-md-6 col-sm-8 col-12">

                      <li class="ml-3"><a href="#{{$category->name}}">{{ $category->name }}</a></li>

                    </div>

                    @endforeach --}}



                </div>

              </div>

            </div>

          </div>

      </div> -->
      <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">



        @foreach($ebook->issue->categories as $category)                                         

        <div class="pt-4">

          <h2 class="PF-Caps PF-TXTRED" id="{{ $category->name }}">

            <a id="Healthcare Management" href="{{url($category->url)}}">{{ $category->name }}

            </a>

          </h2>

          {{-- Article loop --}}

          @foreach($articles as $article)

          @if($article->category_id ==  $category->id)

          <h3 class="mb-1">

            {{--   <a href="{{url('/latest-ebook')}}" title="Patient Experience" class="PF-TXTBlk000 font-weight-bold">{{$article->title}}</a>--}}



            @if($current_issue->id === $article->issue->id)

            <a href="{{url('latest-ebook')}}" title="{{$article->title_tag }}" class="PF-TXTBlk000">{{$article->title}}</a>

            @else

            <a href="{{url('/') .'/'.$category->url.'/'. $article->url}}" title="{{$article->title_tag }}" class="PF-TXTBlk000">{{$article->title}}</a>

            @endif    

          </h3>

          <h4 class="text-muted small mb-1 mt-2">{{$article->sub_title}}</h4>

          <p class="PF-TXTBlk">

            {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($article->short_description)))),$limit = 350, $end = '...') }}



          </p>



          @endif



          @endforeach 

          {{-- End Article loop --}}

        </div>

        @endforeach

      </div> -->


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