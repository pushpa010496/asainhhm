@extends('../layouts/app')
@section('style')
 <style>
/* Scroll bar Style  */
    .ScrollStyle
{
    max-height: 100%;
    overflow-y: scroll !important;
    scrollbar-color:green !important; 
    width:100%;          
    background-color:#231f20 !important;
    padding-right:10px;  
}
/* Style the scrollbar background */
::-webkit-scrollbar {
  background: white;
  width:5px !important; 
}

/* Style the scrollbar handle */
::-webkit-scrollbar-thumb {
  background:#ed1a3b;
  width: 8px;
}
.ahhm-advisory-board .advisory-board-height {
    overflow: hidden;
    width: 90% !important;
}

  .ahhm-kb-section {
    padding:0px !important;
}

.img-height{
  height:29rem !important;
}
a {
    color: $ahhm-red;
    &:link{
        text-decoration: none;
        cursor: pointer !important;
        outline: none;
        transition: all ease 0.3s;
        color: $ahhm-red;
        position: none !important;
    }
}
.responsive-image {
    max-width: 100% !important;
    height: auto;
  }

  </style>
@endsection
@section('content')


<div class="container-fluid">
<div class="row">

<div class="col-12 col-lg-9 col-xl-9 p-0">

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"  id="responsive" >
  <div class="carousel-indicators">
    <?php $i = 0; ?>
    @foreach($sliders as $key => $homesliders)
    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-current="{{ $i == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $i + 1 }}"></button>
    <?php $i++; ?>
    @endforeach
  </div>

  <div class="carousel-inner">
    <?php $i = 0; ?>
    @foreach($sliders as $key => $homesliders)
    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}" data-bs-interval="5000">
    <a href="{{$homesliders->url}}" target="_blank" title="{{$homesliders->title}}">
      <img src="{{ config('app.url') }}slider/{{ $homesliders->image }}" class="d-block w-100 lazy-bg img-fluid" alt="...">
    </a>
   
      <div class="carousel-caption d-md-block">
      <a href="{{$homesliders->url}}" target="_blank">
      <p style="color:#fff !important; font-size:18px !important;">
    <i>
        <span>
            @if ($homesliders->issue_id)
                {{ $homesliders->category }} - {{ $homesliders->issue_id }}
            @else
                {{ $homesliders->category }}
            @endif
        </span>
    </i>
</p>
      
        <h6 style="color:#fff !important;fot-size:2rem !important;font-family:Montserrat, sans-serif;font-weight:700;" >{{ $homesliders->title }}</h6>
</a>
      </div>
    </div>
    <?php $i++; ?>
    @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>

<div class="col-12 col-lg-3 col-xl-3 ahhm-latest-ebook text-center">

  <img src="https://industry.asianhhm.com/promotions/images/magazine-issue-62.jpg" class="lazy-bg" alt="ahhm latest e-bbok">

  <a class="btn btn-ahhmred w-100" href="{{'/latest-ebook'}}"  aling="center" style="color:#fff !important;">Get Instant Latest E-Book</a>

</div>

</div>
</div>  
{{-- Top/Full Banner banner --}}
 <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  @foreach($banners as $k=>$homebanner12)   
  @foreach($homebanner12->pagesCount as $j=>$pcount)
  @if($homebanner12->positions[0]->id == 4 and $pcount->id == 1)
  @if($homebanner12->type == 'script')
  {!! $homebanner12->script !!}
  @else
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;"  target="_blank" title="{{$homebanner12->title}}">
    <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" title="{{$homebanner12->img_title}}" />
  </a>
  @endif
  @else
  @endif  
  @endforeach
  @endforeach
</div> 
{{-- End Top/Full Banner banner --}}
<div class="container-fluid">
  <div class="row  bg-white">
    <!-- // LEFT Section -->
    <div class="col-lg-9 col-xl-9">
    <section class="ahhm-kb-section">
<div class="row">
    <div class="col-12 ">
        <h1>Knowledge Bank</h1>
    </div>
</div>
<!--top Articles-->

<section class="row top-articles-wrapper">
    <div class="col-12 pt-4">
        <a href="{{url('articles')}}"><h2>top articles</h2></a>
    </div>
    @foreach($articles as  $key => $val)
    <div class="col-6 col-sm-3 col-md-3 col-lg-3 col-xl-3">
       <div class="card top-articles">
          <img src="{{ config('app.url').'knowledgebank/article/'. $val->image}}" class="card-img-top" title="{{$val->title_tag}}" alt="asianHHM Top Articles">
             <div class="card-body">
                <a href="{{url('articles').'/'.$val->url}}" title="{{$val->title_tag}}">
                  <span class="card-text ">
                    <h3 class="card-title hyperlink">{{$val->title}}</h3>
                      <p>{{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 200, $end = '...') }}</p>
                  </span>
                </a>
            </div>
       </div>              
    </div>
    @endforeach
    <div class="col-12">
        <div class="divider"></div>
    </div>
</section>
<!--/top Articles-->
<!--interviews, Bookshelf, Case Studies, White Papers-->
<section class="row mt-2">
    <div class="col-12 col-md-6 col-md-6 col-lg-6 col-xl-6">
        <a href="{{url('interviews')}}"><h2>Interviews</h2></a>
        @foreach($interviews as $interviews)
          <div class="card">
            <img src="{{ config('app.url').'knowledgebank/interview/'. $interviews->photo}}" title="{{$interviews->title_tag}}" alt="{{$interviews->alt_tag}}" class="ahhm-interviews img-fluid" >
            <div class="card-body">
              <a href="{{ route('interviews.url',[$interviews->url])}}">
              <span class="card-text">
                <h3 class="card-title hyperlink">{{$interviews->title}}</h3><br>
                  <i>{{$interviews->name}} - {{$interviews->designation}}</i><br>
                  {!! \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst( $interviews->description)))),$limit = 850, $end = '...')  !!}
                </span>
              </a>
            </div>
          </div>
          @endforeach
      </div>
  <!-- bookshelf section start -->
      <div class="col-12 col-md-3 col-lg-3 col-xl-3 ahhm-bookshelf">
        <a href="{{url('bookshelf')}}"><h2>book shelf</h2></a>
        @foreach($bookshelfs as $bookshelf)
          <div class="card col-12">
            <img src="{{ config('app.url').'knowledgebank/bookshelf/'. $bookshelf->bookshelf_image}}" class="img-fluid" title="{{$bookshelf->title_tag}}" alt="{{$bookshelf->alt_tag}}" style="width:170px !important;">
            <!-- <div class="book-info">
              <div><img src="{{config('app.url')}}images/pages.svg" alt="pages-icon"><span>{{$bookshelf->no_pages}}</span></div>
              <div><img src="{{config('app.url')}}images/calendar.svg" alt="calendar-icon"><span>2022</span></div>
              <div><img src="{{config('app.url')}}images/publisher.svg" alt="publish-icon"><span>Elsevier</span></div>
            </div> -->
            <div class="card-body">
                <h3 class="card-title mt-2">{{$bookshelf->title}}</h3><br>
                <span class="card-text">
                  <i>Author(s) :{{$bookshelf->authors}}</i><br>
                  {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$bookshelf->description )))),$limit = 270, $end = '...') }}
                </span>
            </div>

            <a  href="{{url('bookshelf')}}" class="btn btn-ahhmred mt-5 w-100" style="color:#fff !important;">Go to Book</a>
            
            
          </div>
          @endforeach
      </div>
<!-- bookshelf end -->
<!-- case studies section start -->
      <div class="col-12 col-md-3 col-xl-3 ahhm-cs-wp">
        <div class="ahhm-cs">
        <a href="{{url('casestudies')}}"><h2>case studies</h2></a>
        @foreach($casestudy as $casestudy)
          <div class="card">
            <div class="card-body mt-0">
              <a href="">
                <span class="card-text">
                <a href="{{ route('casestudies.url',[$casestudy->url]) }}">
                  <h3 class="card-title hyperlink" title="{{$casestudy->title_tag}}">{{$casestudy->title}}</h3><br>
                  </a>
                  {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$casestudy->short_description )))),$limit = 100, $end = '...') }}
                    </span>
                  </a>
            </div>
            
          </div>
         
        

          @endforeach
        </div>
 <!-- case studies section end -->
        <div class="divider"></div>
        <div class="ahhm-wp">
          <a href="{{url('whitepapers')}}"><h2>White Papers</h2></a>
          @foreach($whitepaper as $whitepaper)
            <div class="card">
              <div class="card-body mt-0">
                <a href="">
                  <span class="card-text">
                  <a href="{{ route('whitepapers.url',[$whitepaper->url]) }}">
                    <h3 class="card-title hyperlink"  title="{{$whitepaper->title_tag}}">{{$whitepaper->title}}</h3><br>
                  </a>
                    {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$whitepaper->short_description )))),$limit = 100, $end = '...') }}
                    </span>
                  </a>
              </div>
            </div>
            @endforeach
          
          </div>
      </div>
</section>
<div class="pt-5"></div>
  <!--Editorial & Advisory Board section-->
  <section class="ahhm-ed-bg">
<div class="row m-0">
    <!--Editorial Section-->
    <div class="col-12 col-lg-6 col-xl-6 col-xxl-6 p-0">
        <section class="ahhm-ed-section">
            <div class="row">
                    <div class="col-12">
                        <h1>Editorial Section</h1>
                    </div>
                    <div class="col-12 mt-5 pe-0">
                        <a href="{{url('technology-equipment')}}"><h2>Technology-Equipment</h2></a>
                        @foreach($techno_equipment as $techno_equipment)
                        <div class="card mb-3">
                           <div class="row g-0">
                            <div class="col-md-4 col-xl-3 col-6 p-0">
                              <img src="{{ config('app.url').'editorialarticle/'. @$techno_equipment->image}}" title="{{@$techno_equipment->title_tag}}" class="img-fluid rounded-start " title="{{@$techno_equipment->alt_tag}}">
                              </div>
                            <div class="col-md-8 col-xl-9 mp-0">
                                <div class="card-body dmt-0 tmt-0">
                                    <a href="{{url('technology-equipment').'/'.@$techno_equipment->url }}" title="{{@$techno_equipment->title_tag}}">
                                    <span class="card-text">
                                        <h3 class="card-title hyperlink">{{ @$techno_equipment->title}}</h3><br>
                                        {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$techno_equipment->short_description )))),$limit =320, $end = '...') }}
                                        </span>
                                    </a>
                                 </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="col-12 mt-5 pe-0">
                        <a href="{{url('surgical-speciality')}}"><h2>Surgical Speciality</h2></a>
                        @foreach($surgical_speciality as $surgical_speciality)
                        <div class="card mb-3">
                            <div class="row g-0">
                                    <div class="col-md-4 col-xl-3 col-6 p-0">
                                    <img src="{{ config('app.url').'editorialarticle/'. @$surgical_speciality->image}}" title="{{@$surgical_speciality->title_tag}}" class="img-fluid rounded-start " alt="{{@$surgical_speciality->alt_tag}}">
                                   </div>
                              <div class="col-md-8 col-xl-9 mp-0">
                                    <div class="card-body dmt-0 tmt-0">
                                      <a href="{{url('surgical-speciality').'/'.@$surgical_speciality->url }}" title="{{@$surgical_speciality->title_tag}}">
                                          <h3 class="card-title hyperlink">{{@$surgical_speciality->title}}</h3><br>
                                          {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$surgical_speciality->short_description )))),$limit = 270, $end = '...') }}
                                      </a>
                                  </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 mt-5 pe-0">
                        <a href="{{url('information-technology')}}"><h2>INFORMATION TECHNOLOGY</h2></a>
                        @foreach($information_technology as $information_technology)
                        <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 col-xl-3 col-6 p-0">
                            <img src="{{ config('app.url').'editorialarticle/'. @$information_technology->image}}" title="{{@$information_technology->title_tag}}" class="img-fluid rounded-start " alt="{{@$information_technology->alt_tag}}">
                            </div>
                            <div class="col-md-8 col-xl-9 mp-0">
                            <div class="card-body dmt-0 tmt-0">
                                <a href="{{url('information-technology').'/'.@$information_technology->url }}" >
                                    <h3 class="card-title hyperlink" title="{{@$information_technology->title_tag}}"> {{@$information_technology->title}}</h3><br>
                                    {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$information_technology->short_description )))),$limit = 270, $end = '...') }}
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-12 mt-5 pe-0">
                        <a href="{{url('medical-sciences')}}"><h2>MEDICAL SCIENCES</h2></a>
                        @foreach($medical_science as $medical_science)
                        <div class="card mb-3">
                           <div class="row g-0">
                              <div class="col-md-4 col-xl-3 col-6 p-0">
                              <img src="{{ config('app.url').'editorialarticle/'. @$medical_science->image}}" title="{{@$medical_science->title_tag}}" class="img-fluid rounded-start " alt="{{@$medical_science->alt_tag}}">
                              </div>
                                  <div class="col-md-8  col-xl-9 mp-0">
                                     <div class="card-body dmt-0 tmt-0">
                                        <a href="{{url('medical-sciences').'/'.@$medical_science->url }}" title="{{@$medical_science->title_tag}}">
                                            <h3 class="card-title hyperlink" title="{{@$medical_science->title_tag}}">{{@$medical_science->title}}</h3><br>
                                            {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$medical_science->short_description )))),$limit = 270, $end = '...') }}
                                        </a>
                                     </div>
                                 </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="col-12 mt-5 pe-0">
                        <a href="{{url('diagnostics')}}"><h2>Diagnostics</h2></a>
                        @foreach($diagnostics as $diagnostics)
                        <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4 col-xl-3 col-6 p-0">
                            <img src="{{ config('app.url').'editorialarticle/'. @$diagnostics->image}}" title="{{@$diagnostics->title_tag}}" class="img-fluid rounded-start " alt="{{@$diagnostics->alt_tag}}">
                            </div>
                            <div class="col-md-8 col-xl-9 mp-0">
                            <div class="card-body dmt-0 tmt-0">
                                <a href="{{url('diagnostics').'/'.@$diagnostics->url }}">
                                    <h3 class="card-title hyperlink" title="{{@$diagnostics->title_tag}}">{{@$diagnostics->title}}</h3><br>
                                   {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$diagnostics->short_description )))),$limit =320, $end = '...') }}
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </section>
    </div>
    <!--/Editorial Section-->
    <!--Advisory Board-->
    <div class="col-12 col-lg-6 col-xxl-5 ahhm-advisory-board">
    <section class="">
    <h1>Magazine</h1>
    <a href="{{url('advisory-board')}}"><h2>Advisory Board</h2></a>
        <div class="">
       
            <div class="advisory-board-height"> <!-- <div class="advisory-board-height"> -->
                <div class="ScrollStyle">
                    @for ($i = 0; $i < count($advaisoryboard); $i += 2)
                        <div class="card-group card-group-active">
                            <div class="card">
                                <img src="{{ config('app.url').'advisoryboard/'.$advaisoryboard[$i]->image }}" title="{{@$advaisoryboard[$i]->title_tag}}" class="ahhm-advisory img-fluid" alt="{{@$advaisoryboard[$i]->alt_tag}}">
                                <div class="card-body">
                                    <a href="https://www.asianhhm.com/advisory-board">
                                        <h3 class="card-title hyperlink" title="{{@$advaisoryboard[$i]->title_tag}}">{{ $advaisoryboard[$i]->title }}</h3>
                                        <p style="font-size:12px;line-height:15px;"><i>{{ $advaisoryboard[$i]->home_description }} </i></p>
                                    </a>
                                </div>
                            </div>

                            @if ($i + 1 < count($advaisoryboard))
                                <div class="card">
                                    <img src="{{ config('app.url').'advisoryboard/'.$advaisoryboard[$i+1]->image }}" title="{{@$advaisoryboard[$i+1]->title_tag}}" class=" ahhm-advisory img-fluid" alt="{{@$advaisoryboard[$i+1]->alt_tag}}">
                                    <div class="card-body">
                                        <a href="https://www.asianhhm.com/advisory-board">
                                            <h3 class="card-title hyperlink" title="{{@$advaisoryboard[$i+1]->title_tag}}">{{ $advaisoryboard[$i+1]->title }}</h3>
                                            <p style="font-size:12px;line-height:15px;"><i>{{ $advaisoryboard[$i+1]->home_description }} </i></p>
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endfor
                </div>
            </div>
        <!-- <div class="board-navigators">
                    <svg class="js-board-arrow-up disabled" width="45.827" height="79.667" viewBox="0 0 45.827 79.667">
                        <g id="advisory-baord-arrow-up" transform="translate(-1493.086 -3162.667)">
                        <path id="Path_36" data-name="Path 36" d="M2767,3192h-77" transform="translate(4708.5 474.333) rotate(90)" fill="none" stroke="#4f4c4d" stroke-linecap="round" stroke-width="2"/>
                        <path id="Path_37" data-name="Path 37" d="M2767.667,3173,2745,3193.925,2767.667,3216" transform="translate(4710.5 418.667) rotate(90)" fill="none" stroke="#4f4c4d" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                    </svg>
                    <svg class="js-board-arrow-down" width="45.827" height="79.667" viewBox="0 0 45.827 79.667">
                        <g id="advisory-baord-arrow-down" transform="translate(3225.414 -1676.167) rotate(90)">
                        <path id="Path_34" data-name="Path 34" d="M2690,3192h77" transform="translate(-1012.833 10)" fill="none" stroke="#ed1a3b" stroke-linecap="round" stroke-width="2"/>
                        <path id="Path_35" data-name="Path 35" d="M2745,3173l22.667,20.925L2745,3216" transform="translate(-1012.833 8)" fill="none" stroke="#ed1a3b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </g>
                    </svg>
                    </div> -->
    </div>
</section>

    </div>
    <!--/Advisory Board-->
</div>
</section>
<!--/Editorial & Advisory Board section-->

            <!--Latest News-->
            <section class="ahhm-latestnews">
    <div class="row">
        <!-- Display Record with display_img_home == 1 -->
        @foreach($news as $val)
            @if($val->display_img_home == 1)
                <div class="col-12 col-md-7 col-xl-7">
                    <h1 class="mb-4">Latest News</h1>
                    <div class="card ahhm-featurednews">
                        <img src="{{ config('app.url').'news/'. @$val->big_image}}" title="{{@$val->img_title}}" class="ahhm-interviews img-fluid" alt="{{@$val->news_img_alt}}">
                        <div class="card-body">
                            <a href="{{route('news.url',[$val->url])}}">
                                <span class="date"><img src="{{config('app.url')}}images/calendar.svg" class="calendar">{{ date('d M Y', strtotime($val->date)) }}</span>
                                <h3 class="card-title hyperlink" title="{{@$val->img_title}}">{{ $val->home_title }}</h3><br>
                                {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))), $limit = 300, $end = '...') }}
                            </a>
                        </div>
                    </div>
                </div>
                @break
            @endif
        @endforeach
        <!-- /Display Record with display_img_home == 1 -->

        <!-- More News Section -->
        <div class="col-12 col-md-5 col-xl-5 ahhm-latestnews-more brdr-l-1-solid pt-0 mmt-3rem">
            @foreach($news as $key => $val)
                @if($key >= 0 && $key <= 4  && $val->display_img_home !== null && $val->display_img_home != 1)
                    <div class="card mb-3 brdr-b-1-solid pb-4">
                        <div class="row g-0">
                            <div class="col-md-6 col-xl-5 p-0 ">
                                <img src="{{ config('app.url').'news/'. @$val->news_image}}" title="{{@$val->img_title}}" class="img-fluid rounded-start " alt="{{@$val->news_img_alt}}">
                            </div>
                            <div class="col-md-6 col-xl-7 mp-0">
                                <div class="card-body dmt-0 tmt-0">
                                    <span class="date"><img src="{{config('app.url')}}images/calendar.svg" class="calendar" alt="calendar-icon">{{ date('d M Y', strtotime($val->date)) }}</span>
                                    <a href="{{route('news.url',[$val->url])}}">
                                        <h3 class="card-title hyperlink" title="{{@$val->img_title}}">{{ $val->home_title }}</h3><br>
                                        {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))), $limit = 300, $end = '...') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="col-12 p-0 mt-3"><a href="{{url('news')}}" class="more">More News</a></div>
        </div>
        <!-- /More News Section -->
    </div>
</section>
            <!--/Latest News-->
            <!--Press Releases-->
            <section class="ahhm-latestnews ahhm-pr">
    <div class="row">
        <!-- Display Record with display_img_home == 1 -->
        @foreach($pressreleases as $val)
            @if($val->display_img_home == 1)
                <div class="col-12 col-md-7 col-xl-7">
                    <h1 class="mb-4">Press Releases</h1>
                    <div class="card ahhm-featurednews">
                        <img src="{{ config('app.url').'pressreleases/'. @$val->big_image}}" title="{{@$val->img_title}}" class=" ahhm-interviews img-fluid" alt="{{@$val->img_alt}}">
                        <div class="card-body">
                            <a href="{{route('pressreleases.url',[$val->url])}}">
                                <h3 class="card-title hyperlink" title="{{@$val->img_title}}">{{ $val->home_title }}</h3>
                                <span class="date">
                                    <img src="{{config('app.url')}}images/calendar.svg" class="calendar" alt="calendar-icon">{{ date('d M Y', strtotime($val->date)) }}
                                </span><br>
                                {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))), $limit = 300, $end = '...') }}
                            </a>
                        </div>
                    </div>
                </div>
                @break
            @endif
        @endforeach
        <!-- /Display Record with display_img_home == 1 -->

        <!-- Right Side Releases Section -->
        <div class="col-12 col-md-5 col-xl-5 ahhm-latestnews-more brdr-l-1-solid pt-0 mmt-3rem">
            @foreach($pressreleases as $key => $val)
                @if($key >= 0 && $key <= 4  && $val->image !== null && $val->display_img_home != 1)
                    <div class="card mb-3 brdr-b-1-solid pb-4">
                        <div class="row g-0">
                            <div class="col-md-6 col-xl-5 p-0">
                                <img src="{{ config('app.url').'pressreleases/'. @$val->image}}" title="{{@$val->img_title}}" class="img-fluid rounded-start " alt="{{@$val->img_alt}}">
                            </div>
                            <div class="col-md-6 col-xl-7 mp-0">
                                <div class="card-body dmt-0 tmt-0">
                                    <span class="date">
                                        <img src="{{config('app.url')}}images/calendar.svg" class="calendar" alt="calendar-icon">{{ date('d M Y', strtotime($val->date)) }}
                                    </span>
                                    <a href="{{route('pressreleases.url',[$val->url])}}" title="{{ $val->img_alt}}">
                                        <h3 class="card-title hyperlink" title="{{@$val->img_title}}">{{ $val->home_title }}</h3><br>
                                        {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))), $limit = 300, $end = '...') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="col-12 p-0 mt-3"><a href="{{url('pressreleases')}}" class="more">More Press Releases</a></div>
        </div>
        <!-- /Right Side Releases Section -->
    </div>
</section>



            
            <!--/Press Releases-->
<!--/interviews, Bookshelf, Case Studies, White Papers-->
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
      @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 7 and $pcount->id == 1)
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
      @else
      @endif  
      @endforeach
      @endforeach
    </div>       
  {{-- Bottom banner  below events --}}
  <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 11 and $pcount->id == 1)
    @if($homebanner12->type == 'script')
    {!! $homebanner12->script !!}
    @else
    <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
    @endif
    @else
    @endif  
    @endforeach
    @endforeach
  </div>
  {{-- End Bottom banner --}}
</div>
<!-- LEFT Section // -->
<!-- // Right Section -->
<div class="col-lg-3 col-xl-3 text-center pb-2">
  <div class="pt-2"></div>
  <div class="bg-gray border-secondary text-center">
      <!-- @include('layouts.partials._square_banner') -->
      {{-- Sky tower banner --}}
    @foreach($banners as $k=>$homebanner12)   
    @foreach($homebanner12->pagesCount as $j=>$pcount)
    @if($homebanner12->positions[0]->id == 2 and $pcount->id == 1)
    <div class="mt-2">
      @if($homebanner12->type == 'script')
      {!! $homebanner12->script !!}
      @else
      <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}">
        <img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" />
      </a>
      @endif
    </div>
    @else
    @endif  
    @endforeach
    @endforeach
    {{-- End Sky tower banner --}}
          </div>
        </div>
        <!-- Right Section // -->
      </div>
    </div>
    <div class="container">
    {{-- Bottom One banner --}}
      <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        @foreach($banners as $k=>$homebanner12)   
        @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 8 and $pcount->id == 1)
        @if($homebanner12->type == 'script')
        {!! $homebanner12->script !!}
        @else
        <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
        @endif
        @else
        @endif  
        @endforeach
        @endforeach
      </div>
      {{-- End Bottom One banner --}}
      <div class="container">
        {{-- Bottom Two banner --}}
       <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
          @foreach($banners as $k=>$homebanner12)   
          @foreach($homebanner12->pagesCount as $j=>$pcount)
          @if($homebanner12->positions[0]->id == 9 and $pcount->id == 1)
          @if($homebanner12->type == 'script')
          {!! $homebanner12->script !!}
          @else
          <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}') return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
          @endif
          @else
          @endif  
          @endforeach
          @endforeach
        </div> 
        {{-- End Bottom Two banner --}}
</div>
</div>
{{-- Base banner --}}
 <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  @foreach($banners as $k=>$homebanner12)   
  @foreach($homebanner12->pagesCount as $j=>$pcount)
  @if($homebanner12->positions[0]->id == 5 and $pcount->id == 1)
  @if($homebanner12->type == 'script')
  {!! $homebanner12->script !!}
  @else
  <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}') return false;" target="_blank" title="{{$homebanner12->title}}"><img class="img-fluid border" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->title}}" /></a>
  @endif
  @else
  @endif  
  @endforeach
  @endforeach
</div> 
{{-- End Base banner --}}

<!-- events section start -->

<section class="ahhm-events" id="bg-image">

<h1 class="mt-5">Healthcare Events & Exhibitions</h1>

<div class="event-details">

        <div class="event-date">

          <img src="{{config('app.url')}}images/calendar.svg" alt="calendar-icon">&nbsp;

          <span>{{ date('d', strtotime($events[0]->start_date)) }} - {{ date('d M Y', strtotime($events[0]->end_date)) }}</span>

        </div><br>

        <h2>{{$events[0]->home_title}}</h2> 
        <p class="mt-2 location"><img src="{{config('app.url')}}images/location-pin.svg" alt="location-icon">{!!$events[0]->event_organiser != '' ? $events[0]->event_organiser .'<br>': '' !!}{{$events[0]->venue}}</p>
        <i>{{$events[0]->email}}</i>
        <a href="{{url('/events')}}" class="btn btn-ahhmred mt-5 w-100" style="color:#fff !important;">Go to Event</a>
</div>
<div class="upcoming-events">
        <a href="#"><h2>Upcoming events</h2></a>
        @foreach($events as $key => $val)
        @if($key > 0)
        <div class="col-12 mt-4 p-0">
          <div class="card mb-3 brdr-b-1-solid pb-4">
                <div class="card-body mt-0">
                  <span class="date"><img src="{{config('app.url')}}images/calendar-lighter.svg" class="calendar" alt="calendar-icon">{{ date('d M Y', strtotime($val->start_date)) }}</span>
                  <a href="{{url('/events')}}">
                      <h3 class="card-title hyperlink mt-3">{{$val->home_title}}</h3><br>
                      <span class="mt-2 location"><img src="{{config('app.url')}}images/location-pin.svg" alt="location-icon">{!!$val->event_organiser != '' ? $val->event_organiser .'<br>': '' !!}{{$val->venue}}</span>
                    </a>
                </div>
          </div>
        </div>
        @endif
        @endforeach
</div>

</section>

<!-- events section end -->

@endsection

@section('scripts')

@endsection