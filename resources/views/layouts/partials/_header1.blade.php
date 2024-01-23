<nav class="navbar-expand-lg ahhm-branding mt-5" class="nav-responsivie1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7 col-6"> <a class="navbar-brand logo" href="{{url('/')}}"> <img src="{{config('app.url')}}images/ahhm-logo.png" alt="asianHHM Logo"> </a> </div>
            <div class="col-md-3 col-6 p-0">
                 {{Form::open(['url' => 'search'])}}
                <div class="input-group ahhm-search" id="main-search"> <input type="text" class="form-control" name="q" placeholder="" id="autoComplete" aria-label="Recipient's username" aria-describedby="button-addon2"> <!-- <span style="padding-left:50px;">&nbsp;</span> --> <button class="btn js-search" type="button"> <img src="{{config('app.url')}}images/search.svg" alt="search-icon"> </button> 
            </div> {{Form::close()}}
            </div>
            <div class="col-md-2">
                <div class="navbar-nav secondary-nav"> <button class="primary-navbar-toggler" type="button"> <span class="primary-navbar-toggler-icon"></span> </button>
                    <ul style="list-style-type:none;margin:0px;padding:0px;">
                  
                        <li class="nav-item"> <a class="nav-link" href="{{url('/mediapacks')}}">Media Pack</a> </li>
                        <!-- <li class="nav-item"> <a class="nav-link" href="{{url('/login')}}">Login</a> </li> -->
                    </ul> 
                    <!-- <a href="{{url('/register')}}" class="btn btn-ahhmblk btn-ahhmblk-sm" style="color:#fff;">Register</a> -->
                </div>
            </div>
        </div>
    </div>
</nav>
<!--/secondary Navbar-->


<div class="mt-3 mb-3" align="center">

@foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 12 and $pcount->id == 1)
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


<!--header container-->
<header>
    <nav class="ahhm-navbar navbar yamm ahhm-branding navbar-expand-lg" style="z-index:1000;">
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav" style="padding-left:15%;">
                <li class=""> <a href="/">Home</a> </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/editorialsection')}}" class="dropdown-toggle"> Editorial Section </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/healthcare-management')}}"> Healthcare Management <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/medical-sciences')}}"> Medical Sciences <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/surgical-speciality')}}"> Surgical Speciality <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/diagnostics')}}"> Diagnostics <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/technology-equipment')}}"> Technology, Equipment & Devices <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/facilities-operations')}}"> Facilities & Operations <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/information-technology')}}"> Information Technology <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/advertorials')}}"> Advertorials <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10 col-xl-10 col-xxl-10">
                                            <div class="tab-pane active" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                         @php 
                                                         $data = App\Models\Editorialarticle::with('category')->where('active_flag',1)->where('category_id','1')->orderBy('id', 'desc')->get()->take(4); 
                                                         @endphp
                                                          @foreach($data as $val) 
                                                          <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/healthcare-management') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}" 
                                                                > </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/healthcare-management') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         @endforeach
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                         @php 
                                                         $data_medical = App\Models\Editorialarticle::where('category_id', 2)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); 
                                                         @endphp
                                                          @foreach($data_medical as $val) 
                                                          <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/medical-sciences') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/medical-sciences') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li> @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                         @php 
                                                         $data_surgical = App\Models\Editorialarticle::where('category_id', 3)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); 
                                                         @endphp
                                                          @foreach($data_surgical as $val) 
                                                          <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/surgical-speciality') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/surgical-speciality') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style"> @php $data_diagno = App\Models\Editorialarticle::where('category_id', 4)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); @endphp @foreach($data_diagno as $val) <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/diagnostics') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/diagnostics') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li> @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style"> @php $data_tech = App\Models\Editorialarticle::where('category_id', 5)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); @endphp @foreach($data_tech as $val) <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/technology-equipment') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/technology-equipment') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li> @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style"> @php $data_facilities = App\Models\Editorialarticle::where('category_id', 6)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); @endphp @foreach($data_facilities as $val) <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/facilities-operations') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/facilities-operations') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li> @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style"> 
                                                        @php
                                                         $data_info = App\Models\Editorialarticle::where('category_id', 7)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4);
                                                          @endphp
                                                           @foreach($data_info as $val) 
                                                           <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/information-technology') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/information-technology') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li> @endforeach 
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style"> 
                                                        @php $data_advertorials = App\Models\Editorialarticle::where('category_id', 9)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); @endphp 
                                                        @foreach($data_advertorials as $val)
                                                         <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/advertorials') . '/' . $val->url }}"> <img alt=""  src="{{ config('app.url').'editorialarticle/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/advertorials') . '/' . $val->url }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         @endforeach 
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/magazinesection')}}" class="dropdown-toggle"> Magazine </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/magazine')}}"> Current Issue&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/archives')}}"> Previous Issue <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/forthcoming-issue')}}"> Forthcoming Issue <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/e-book')}}"> e-Book Archives <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/foreword')}}"> Foreword&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/author-guidelines')}}"> Author Guidelines <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/advisory-board')}}"> Advisory Board <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/editorial-calendar')}}"> Editorial Calendar <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/testimonials')}}"> Testimonials <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10 col-xl-10 col-xxl-10">
                                            <div class="tab-pane active" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/magazine')}}"> <img alt="current issue" src="{{ config('app.url')}}images/issues/current-issue-62.jpg"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/magazine')}}" class="name">Current Issue </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/archives')}}"> <img alt="previous issue"  src="{{ config('app.url')}}images/issues/current-issue-61.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/archives')}}" class="name"> Previous Issue </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/forthcoming-issue')}}"> <img alt=""  src="{{ config('app.url')}}images/issues/forthcoming-issue.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/forthcoming-issue')}}" class="name">Forthcoming Issue </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/e-book')}}"> <img alt=""  src="{{ config('app.url')}}images/issues/ebook-archivers.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/e-book')}}" class="name"> e-Book Archives</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_foreward = App\Models\Editorialarticle::where('category_id', 8)->where('active_flag', 1)->orderBy('id','desc')->select('url','title','image')->get()->take(4); 
                                                         @endphp
                                                          @foreach($data_foreward as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{ url('/foreword') . '/' . $val->url }}"> <img alt="src"  src="{{ config('app.url').'editorialarticle/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{ url('/foreword') . '/' . $val->url }}" class="name"> {{ $val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                            @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php
                                                    $data_authorguildline = App\Models\Authorguideline::where('active_flag', 1)->orderBy('id', 'desc')->select('title')->get()->take(4);
                                                    @endphp
                                                    @foreach($data_authorguildline as $val)
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/author-guidelines')}}"> <img alt=""  src="{{ config('app.url')}}images/issues/author-guidelines.jpg"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/author-guidelines')}}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php
                                                    $data_advisoryboard = App\Models\AdvaisoryBoard::where('active_flag', 1)->orderBy('id', 'desc')->select('title','image')->get()->take(4);
                                                    @endphp
                                                    @foreach($data_advisoryboard as $val)
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('advisory-board')}}"> <img alt=""  src="{{ config('app.url').'advisoryboard/'.$val->image}}" > </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('advisory-board')}}" class="name">{{$val->title}}</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                         @endforeach
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('editorial-calendar')}}"> <img alt=""  src="{{ config('app.url')}}images/issues/editorial-calendar.jpg" data-src=""> </a> </div>
                                                                <div class="details">
                                                                 <a href="{{url('editorial-calendar')}}" class="name"> Editorial Calendar </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php
                                                    $data_testimonials = App\Models\Testimonial::where('active_flag', 1)->orderBy('id', 'desc')->select('name','image')->get()->take(4);
                                                    @endphp
                                                    @foreach($data_testimonials as $val)
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('testimonials')}}"> <img alt="src"  src="{{ config('app.url').'magazine/testimonials/'.$val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('testimonials')}}" class="name"> {{$val->name}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/knowledgebank')}}" class="dropdown-toggle"> Knowledge Bank </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/articles')}}"> Articles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/interviews')}}"> Interviews &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/technotrends')}}"> Techno Trends &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/projects')}}"> Projects &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/healthcare-reports')}}"> Industry Reports <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/researchinsights')}}"> Research Insights<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/bookshelf')}}"> Book Shelf &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/casestudies')}}"> Case Studies &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/whitepapers')}}"> White Papers&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10 col-xl-10 col-xxl-10">
                                            <div class="tab-pane active" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_article = App\Models\Article::with('authors')->where('home_articles',1)->where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_article as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('articles')  . '/' . $val->url }}"> <img alt="" loading="" src="{{ config('app.url').'knowledgebank/article/'. $val->image}}"> </a>
 </div>
                                                                <div class="details">
                                                                    <a href="{{url('articles')  . '/' . $val->url }}" class="name"> {{$val->title}}</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_interview = App\Models\Interview::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_interview as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('interviews')  . '/' . $val->url  }}"> <img alt=""  
                                                                src="{{ config('app.url').'knowledgebank/interview/'. @$val->photo}}" 
                                                              > </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('interviews')  . '/' . $val->url  }}" class="name">  {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_technotrend = App\Models\TechnoTrend::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_technotrend as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('technotrends')  . '/' . $val->url  }}"> <img alt=""  
                                                                src="{{ config('app.url').'knowledgebank/technotrends/'. $val->top_image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('technotrends')  . '/' . $val->url  }}" class="name">{{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_project = App\Models\Project::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_project as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('projects')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'knowledgebank/project/'. $val->image}}" > </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('projects')  . '/' . $val->url  }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_industryreport = App\Models\IndustryReport::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_industryreport as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('healthcare-reports')  . '/' . $val->url  }}"> <img alt="" 
                                                                 src="{{ config('app.url').'knowledgebank/reports/'. $val->image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('healthcare-reports')  . '/' . $val->url  }}" class="name"> {{$val->title1}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                              @endforeach
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_researchinsites = App\Models\ReaserchInsites::where('active_flag', 1)->orderBy('id','desc','image')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_researchinsites as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('researchinsights')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'knowledgebank/research-insights/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('researchinsights')  . '/' . $val->url  }}" class="name"> {{$val->title}}</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                 @endforeach
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_bokkshelf = App\Models\BookShelf::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_bokkshelf as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('bookshelf')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'knowledgebank/bookshelf/'. $val->bookshelf_image}}" > </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('bookshelf')  . '/' . $val->url  }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_casestudies = App\Models\CaseStudy::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_casestudies as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('casestudies')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'knowledgebank/casestudies/'. $val->image}}" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('casestudies')  . '/' . $val->url  }}" class="name">{{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_whitepaper = App\Models\WhitePaper::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_whitepaper as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('whitepapers')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'knowledgebank/whitepaper/'. $val->image}}"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('whitepapers')  . '/' . $val->url  }}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/industryupdates')}}" class="dropdown-toggle"> Industry Updates </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/news')}}"> News&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/pressreleases')}}"> Press Releases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/events')}}"> Events&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/webinars')}}"> Webinars&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10 col-xl-10 col-xxl-10">
                                            <div class="tab-pane active" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_news = App\Models\News::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_news as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <!-- <div class="widget-thumbnail"> <a href="{{url('news')  . '/' . $val->url  }}"> <img alt=""  src="{{ config('app.url').'news/'. $val->news_image}}" data-src=""> </a> </div> -->
                                                                <div class="details">
                                                                    <a href="{{url('news')  . '/' . $val->url  }}" class="name">{{$val->title}}</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                         $data_pressreleases = App\Models\Pressrelease::where('active_flag', 1)->orderBy('id','desc')->take(4)->get();
                                                         @endphp
                                                          @foreach($data_pressreleases as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> 
                                                                    <!-- <a href="{{url('pressreleases')  . '/' . $val->url  }}"> <img alt=""  
                                                                src="{{ config('app.url').'pressreleases/'. @$val->image}}"></a> -->
                                                               </div>
                                                                <div class="details">
                                                                     <a href="{{url('pressreleases')  . '/' . $val->url  }}" class="name">{{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display: none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php 
                                                    $time = time();
                                                         $data_events =  App\Models\Event::where('active_flag', '=', 1)
                                                                ->where('end_date', '>=', date('Y-m-d'))
                                                                ->orderByRaw("CASE WHEN start_date >= CURDATE() THEN start_date END ASC, start_date DESC")
                                                                ->select('start_date', 'end_date', 'title','web_link')
                                                                ->limit(4)
                                                                ->get();
                                                         @endphp
                                                          @foreach($data_events as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{$val->web_link}}"> <img alt=""  src="" data-src=""> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{$val->web_link}}" class="name">{{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        @endforeach
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display:none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                    @php
                                                         $time = \Carbon\Carbon::now()->format('Y-m-d');
                                                         $data_ondemandwebinar = App\Models\Webinar::where('active_flag',1)->where('webinar_date', '<=' , $time)->orderBy('webinar_date','desc')->get()->take(4);
                                                          @endphp
                                                           @foreach($data_ondemandwebinar as $val) 
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url($val->url)}}"> <img alt="{{$val->title}}"  src="{{ config('app.url')}}webinars/{{$val->image}}" > </a> </div>
                                                                <div class="details">
                                                                    <a href="{{url($val->url)}}" class="name"> {{$val->title}} </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                      @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/advertise')}}" class="dropdown-toggle"> Advertise </a>
                    <ul class="dropdown-menu ">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                    <ul style="display:flex !important;column-gap:241px !important;" class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2">
                                            <li class=""> &nbsp; </li>
                                        </ul>
                                        <div class="tab-content col-md-10">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="pl-5" style="list-style-type:none;">
                                                    <li> <a href="{{ url('healthcare-marketing/b2b-display-advertising') }}">Dispaly Advertising</a>
                                                    <ul  style="padding-left:25px !important;list-style-type:none;">
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/display-banner-advertising') }}">Banner Advertising</a></li>
                                                    <li><a class="chitti"  href="{{ url('healthcare-marketing/services/geo-targeted-display') }}">Targeted Display Ads</a></li>
                                                </ul>
                                                </li>
                                                </ul>
                                            </div>

                                            <div class="col-md-4">
                                              <ul style="list-style-type:none;">
                                                    <li> <a href="{{ url('healthcare-marketing/services/content-syndication') }}">Content Syndication</a></li>
                                                    <ul style="padding-left:25px !important;list-style-type:none;">
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/account-based-marketing') }}">Account Based Marketing</a></li>
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/b2b-surveys-assessments') }}">Surveys & Assessments</a></li>
                                                    <li><a class="chitti"  href="{{ url('healthcare-marketing/services/b2b-microsites') }}">Microsites</a></li>
                                                    </ul>
                                                    </li>
                                             </ul>
                                             </div>  

                                            <div class="col-md-4">
                                                <ul style="list-style-type:none;">
                                                    <li><a href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">Print Advertising</a>
                                                    <ul style="padding-left:25px !important;list-style-type:none;">
                                                    <li> <a class="chitti" href="{{ url('healthcare-marketing/services/ebook-advertising') }}">E-Book</a></li>
                                                    <li> <a class="chitti" href="{{ url('healthcare-marketing/services/print-media-advertising') }}">Print Media</a></li>
                                                    <li><a class="chitti" href="{{ url('healthcare-marketing/services/b2b-print-advertorial') }}">Advertorials</a></li>
                                                      </ul>
                                                    </li>
                                                </ul>
                                        </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-4">
                                                    <ul style="list-style-type:none;">
                                                        <li> <a href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">Targeted Mail Marketing</a>
                                                        <ul style="padding-left:25px !important;list-style-type:none;">
                                                        <li> <a class="chitti" href="{{ url('healthcare-marketing/services/newsletter-sponsorship') }}">Newsletters</a></li>
                                                        <li> <a class="chitti" href="{{ url('healthcare-marketing/services/b2b-email-marketing') }}">Electronic Direct Mail</a></li>
                                                    <ul>
                                                        </li>
                                                    <ul>
                                            </div>
                                            <div class="col-md-4">
                                                 <ul style="list-style-type:none;">
                                                   <li > <a href="{{ url('healthcare-marketing/services/webinars') }}">Webinars</a>
                                                   <ul style="padding-left:25px !important;list-style-type:none;">
                                                  <li> <a class="chitti" href="{{ url('healthcare-marketing/services/sponsored-webinar-series') }}">Sponsored Webinar Series</a></li>
                                                  <ul>
                                                </li>
                                                </ul>
                                          </div>
                                            <div class="col-md-4">
                                                <ul style="list-style-type:none;">
                                                    <li > <a href="{{ url('mediapacks') }}">Media Pack</a></li>
                                                    <li > <a  href="{{ url('clients') }}">Clientele</a></li>
                                                </ul>
                                            </div>
                                        </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
              
                   <li class="dropdown yamm-fw nav-li-virtual-events  done title" > <a href="{{url('/subscribe')}}" class="dropdown-toggle"> Subscribe </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="nav-megamenu">
                                        <ul class="nav nav-pills nav-stacked col-md-2 col-xl-2 col-xxl-2" style="display:flex !important;column-gap:241px !important;">
                                            <li class="active"> <a href="{{url('/e-newsletter-subscribe')}}"> e-Newsletter Subscription <i class="fa fa-chevron-right"></i> </a> </li>
                                            <li class=""> <a href="{{url('/subscribe')}}"> Magazine Subscription <i class="fa fa-chevron-right"></i> </a> </li>
                                        </ul>
                                        <div class="tab-content col-md-10 col-xl-10 col-xxl-10">
                                            <div class="tab-pane active" style="display:block;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/e-newsletter-subscribe')}}"> <img alt="The Power of Plexing: 3rd Annual TMT Symposium"  src="{{ config('app.url')}}images/subscribe/e-Newsletter-subscription.jpg" data-src="https://d3bkbkx82g74b8.cloudfront.net/eyJidWNrZXQiOiJsYWJyb290cy1pbWFnZXMiLCJrZXkiOiJ2aXJ0dWFsX2V2ZW50X3Byb2ZpbGVfaW1hZ2VfYzUzOWIwZjhkMDc3NjMzZmY1OTU2OWVjZTU4YTc2YTQzZWQ1NDI4N183MDYucG5nIiwiZWRpdHMiOnsidG9Gb3JtYXQiOiJqcGciLCJyZXNpemUiOnsid2lkdGgiOjEzMCwiaGVpZ2h0Ijo2NSwiZml0IjoiY292ZXIiLCJwb3NpdGlvbiI6ImNlbnRlciIsImJhY2tncm91bmQiOiIjZmZmIn0sImZsYXR0ZW4iOnsiYmFja2dyb3VuZCI6IiNmZmYifX19"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/e-newsletter-subscribe')}}" class="name">  e-Newsletter Subscription</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                      
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" style="display:none;">
                                                <div class="widget">
                                                    <ul class="megamenu-item-style">
                                                        <li>
                                                            <div class="item">
                                                                <div class="widget-thumbnail"> <a href="{{url('/subscribe')}}"> <img alt="The Power of Plexing: 3rd Annual TMT Symposium"  src="{{ config('app.url')}}images/subscribe/magazine-subscription.jpg" data-src="https://d3bkbkx82g74b8.cloudfront.net/eyJidWNrZXQiOiJsYWJyb290cy1pbWFnZXMiLCJrZXkiOiJ2aXJ0dWFsX2V2ZW50X3Byb2ZpbGVfaW1hZ2VfYzUzOWIwZjhkMDc3NjMzZmY1OTU2OWVjZTU4YTc2YTQzZWQ1NDI4N183MDYucG5nIiwiZWRpdHMiOnsidG9Gb3JtYXQiOiJqcGciLCJyZXNpemUiOnsid2lkdGgiOjEzMCwiaGVpZ2h0Ijo2NSwiZml0IjoiY292ZXIiLCJwb3NpdGlvbiI6ImNlbnRlciIsImJhY2tncm91bmQiOiIjZmZmIn0sImZsYXR0ZW4iOnsiYmFja2dyb3VuZCI6IiNmZmYifX19"> </a> </div>
                                                                <div class="details">
                                                                     <a href="{{url('/subscribe')}}" class="name"> Magazine Subscription </a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Mobile Responsive navbar -->

    
      <!--primary Nav-->


      <nav class="navbar navbar-expand-lg ahhm-primary-nav" id="navbar" class="nav-responsivie2">
<div class="container w-auto">
  <div class="collapse navbar-collapse show" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/editorialsection')}}" id="button1"  data-bs-toggle="dropdown" aria-expanded="false" >
          Editorial Section
        </a>
        <ul class="dropdown-menu" aria-labelledby="button1">
          <li><a class="dropdown-item" href="{{url('/healthcare-management')}}">Healthcare Management</a></li>
          <li><a class="dropdown-item" href="{{url('/medical-sciences')}}">Medical Sciences</a></li>
          <li><a class="dropdown-item" href="{{url('/surgical-speciality')}}">Surgical Speciality</a></li>
          <li><a class="dropdown-item" href="{{url('/diagnostics')}}">Diagnostics</a></li>
          <li><a class="dropdown-item" href="{{url('/technology-equipment')}}">Technology, Equipment & Devices</a></li>
          <li><a class="dropdown-item" href="{{url('/facilities-operations')}}">Facilities & Operations</a></li>
          <li><a class="dropdown-item" href="{{url('/information-technology')}}">Information Technology</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/magazinesection')}}"  id="button2"  data-bs-toggle="dropdown" aria-expanded="false">
          Magazine
        </a>
        <ul class="dropdown-menu" aria-labelledby="button2">
          <li><a class="dropdown-item" href="{{url('/magazine')}}">Current Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/archives')}}">Previous Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/forthcoming-issue')}}">Forthcoming Issue</a></li>
          <li><a class="dropdown-item" href="{{url('/e-book')}}">e-Book Archives</a></li>
          <li><a class="dropdown-item" href="{{url('/foreword')}}">Foreword</a></li>
          <li><a class="dropdown-item" href="{{url('/author-guidelines')}}">Author Guidelines</a></li>
          <li><a class="dropdown-item" href="{{url('/advisory-board')}}">Advisory Board</a></li>
         <li><a class="dropdown-item" href="{{url('/editorial-calendar')}}">Editorial Calendar</a></li>
          <li><a class="dropdown-item" href="{{url('/testimonials')}}">Testimonials</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/knowledgebank')}}" id="button3"  data-bs-toggle="dropdown" aria-expanded="false">
          Knowledge Bank
        </a>
        <ul class="dropdown-menu" aria-labelledby="button3">
          <li><a class="dropdown-item" href="{{url('/articles')}}">Articles</a></li>
          <li><a class="dropdown-item" href="{{url('/interviews')}}">Interviews</a></li>
          <li><a class="dropdown-item" href="{{url('/technotrends')}}">Techno Trends</a></li>
          <li><a class="dropdown-item" href="{{url('/projects')}}">Projects</a></li>
          <li><a class="dropdown-item" href="{{url('/healthcare-reports')}}">Industry Reports</a></li>
          <li><a class="dropdown-item" href="{{url('/researchinsights')}}">Research Insights</a></li>
          <li><a class="dropdown-item" href="{{url('/bookshelf')}}">Book Shelf</a></li>
          <li><a class="dropdown-item" href="{{url('/casestudies')}}">Case Studies</a></li>
          <li><a class="dropdown-item" href="{{url('/whitepapers')}}">White Papers</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/industryupdates')}}" id="button4"  data-bs-toggle="dropdown" aria-expanded="false">
         Industry Update
        </a>
        <ul class="dropdown-menu" aria-labelledby="button4">
        <li><a class="dropdown-item" href="{{url('/news')}}">News</a></li>
        <li><a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a></li>
        <li><a class="dropdown-item" href="{{url('/events')}}">Events</a></li>
        <li><a class="dropdown-item" href="{{url('/webinars')}}">Webinars</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{url('/advertise')}}" id="button5"  data-bs-toggle="dropdown" aria-expanded="false">
          Advertise
        </a>
        <ul class="dropdown-menu" aria-labelledby="button5">
        <li><a class="dropdown-item" href="{{ url('healthcare-marketing/b2b-display-advertising') }}"><b>Dispaly Advertising</b></a>
                <ul style="padding-left:20px;">
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/display-banner-advertising') }}">Banner Advertising</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/geo-targeted-display') }}">Targeted Display Ads</a></li>
                </ul>
         </li>
         <li>
            <a class="dropdown-item" href="{{ url('healthcare-marketing/services/content-syndication') }}">
                <b>Content Syndication</b></a>
                <ul style="padding-left:20px;">
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/account-based-marketing') }}">
                        Account Based Marketing</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-surveys-assessments') }}">
                        Surveys & Assessments</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-microsites') }}">
                        Microsites</a></li>
                </ul>
         </li>
         <li>
            <a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">
                <b>Print Advertising</b></a>
                <ul style="padding-left:20px;">
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/ebook-advertising') }}">
                    E-Book</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/print-media-advertising') }}">
                    Print Media</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-print-advertorial') }}">
                    Advertorials</a></li>
                </ul>
         </li>
         <li>
            <a class="dropdown-item" href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">
                <b>Targeted Mail Marketing</b></a>
                <ul style="padding-left:20px;">
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/newsletter-sponsorship') }}">
                    Newsletters</a></li>
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/b2b-email-marketing') }}">
                    Electronic Direct Mail</a></li>
                </ul>
         </li>
         <li>
            <a class="dropdown-item" href="{{ url('healthcare-marketing/services/webinars') }}">
                <b>Webinars</b></a>
                <ul style="padding-left:20px;">
                    <li><a class="dropdown-item" href="{{ url('healthcare-marketing/services/sponsored-webinar-series') }}">
                    Sponsored Webinar Series</a></li>
                  
                </ul>
         </li>

         <li>
         <a class="dropdown-item" href="{{ url('mediapacks') }}">
                <b>Media Pack</b></a>
         </li>
         <li>
         <a class="dropdown-item" href="{{ url('clients') }}">
                <b>Clientele</b></a>
         </li>
     
      
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="{{url('/subscribe')}}" id="button7"  data-bs-toggle="dropdown" aria-expanded="false">Subscribe</a>
        <ul class="dropdown-menu" aria-labelledby="button7">
            <li><a class="dropdown-item" href="{{url('/e-newsletter-subscribe')}}"> e-Newsletter Subscription </a></li>
            <li><a class="dropdown-item" href="{{url('/subscribe')}}"> Magazine Subscription </a></li>
        </ul>
    </li>
    </ul>
  </div>
</div>
</nav>
<!-- 
<div class="mt-3 mb-3" align="center">

<a href="https://servedby.flashtalking.com/click/2/216765;7605467;50126;211;0/?ft_width=1&ft_height=1&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&url=36929703">
  <img src="https://industry.asianhhm.com/images/images/hhm-siemens-healthineers-banner.gif" alt="HHM-Siemens">
</a>
<img style="width:1px; height:1px;" src=https://servedby.flashtalking.com/imp/2/216765;7605467;201;pixel;asianhhmcom;wwwwshsMKdirectWWCompanyMKValuePromisesRelaunchFY2310482consasianhhmhdm728x90displaywwhc232095/?gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&cachebuster=[CACHEBUSTER]/>
</div> -->


<!--/primary Nav-->

 <!-- Mobile Responsive navbar -->

 <!-- <div id="mypopup" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content p-0">           
          <div class="modal-body p-0">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <a href="https://www.asianhhm.com/magazine" target="_blank">
                  <img src="https://industry.asianhhm.com/images/pop-up/issue-61.jpg" alt="Popup" class="img-fluid rounded border border-white">
                </a>
          </div>          
        </div>
      </div>
    </div>  -->

<div class="mt-3 mb-3" align="center">

@foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
      @if($homebanner12->positions[0]->id == 3 and $pcount->id == 1)
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