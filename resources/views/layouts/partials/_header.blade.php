@php 
     $page_id =  getpage(Request::segment(1));
     @endphp
   <!-- Prime Banner -->
   <!-- for inner pages -->
@if($page_id !='1')
  
@endif
@if($page_id =='1')
@endif
   <!-- Prime Banner -->
   @if(@$banners)
    <div align="center" class="mt-2 mb-2 hidden-xs">
     @foreach($banners as $k=>$homebanner12)   
         @foreach($homebanner12->pagesCount as $j=>$pcount)
         @if($homebanner12->positions[0]->id == 1 and $pcount->id == $page)
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
   @endif
    <!-- End Prime Banner -->
<!-- Top Banner -->
@if(@$banners) 
<div class="container" align="center">
    @foreach($banners as $k=>$homebanner12)   
      @foreach($homebanner12->pagesCount as $j=>$pcount)
        @if($homebanner12->positions[0]->id == 12 and $pcount->id == 1)
          @if($homebanner12->type == 'script')
               {!! $homebanner12->script !!}
            @else
              <a href="javascript:void(0)" onclick="trackOutboundLink('{{$homebanner12->url}}'); return false;" target="_blank" title="{{$homebanner12->img_alt}}">
                <img class="img-fluid border mt-2" src="{{config('app.url')}}ensign/{{$homebanner12->image}}" alt="{{$homebanner12->img_alt}}" />
              </a>
            @endif
          @else
        @endif  
      @endforeach
    @endforeach 
</div>
@endif
<!-- Top Banner End -->

 
 <!--header container-->

 <div class="container-fluid p-0 on-scroll" id="header">

<header>

  <!-- secondary Navbar-->

  <nav class="navbar navbar-expand-lg ahhm-branding">

      <div class="container-fluid">

        <a class="navbar-brand logo" href="{{url('/')}}">

          <img src="{{config('app.url')}}images/ahhm-logo.png" alt="asianHHM Logo">

        </a>

        <div class="input-group ahhm-search">

          <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">

          <button class="btn js-search" type="button" ><img src="{{config('app.url')}}images/search.svg" alt="search-icon"></button>

        </div>

        <div class="navbar-nav secondary-nav">

          <button class="primary-navbar-toggler" type="button">

            <span class="primary-navbar-toggler-icon"></span>

          </button>

          <ul>

              <li class="nav-item">

                <a class="nav-link" href="{{url('/mediapacks')}}">Media Pack</a>

              </li>

             <!-- <li class="nav-item">

                <a class="nav-link" href="#">Login</a>

              </li>-->

          </ul>

          <a href="{{url('/new-subscribe')}}" class="btn btn-ahhmblk btn-ahhmblk-sm" style="color:#fff;" >Subscribe</a>

        </div>

      </div>

    </nav>

  <!--/secondary Navbar-->





  <!--primary Nav-->

  <nav class="navbar navbar-expand-lg ahhm-primary-nav" id="navbar">

      <div class="container w-auto">

        <div class="collapse navbar-collapse show" id="navbarNavDropdown">

          <ul class="navbar-nav">

            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>

            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="{{url('/editorialsection')}}">

                Editorial Section

              </a>

              <ul class="dropdown-menu">

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

              <a class="nav-link dropdown-toggle" href="{{url('/magazinesection')}}" >

                Magazine

              </a>

              <ul class="dropdown-menu">

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

              <a class="nav-link dropdown-toggle" href="{{url('/knowledgebank')}}" >

                Knowledge Bank

              </a>

              <ul class="dropdown-menu">

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

              <a class="nav-link dropdown-toggle" href="{{url('/industryupdates')}}" >

               Industry Update

              </a>

              <ul class="dropdown-menu">

              <li><a class="dropdown-item" href="{{url('/news')}}">News</a></li>
              <li><a class="dropdown-item" href="{{url('/pressreleases')}}">Press Releases</a></li>
              <li><a class="dropdown-item" href="{{url('/events')}}">Events</a></li>
                 <!--  <li><a class="dropdown-item" href="{{url('/reports')}}">Reports</a></li> -->

              </ul>

            </li>

            <li class="nav-item dropdown">

              <a class="nav-link dropdown-toggle" href="{{url('/advertisesection')}}" >

                Advertise

              </a>

              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="{{url('/advertise')}}">Advertise</a></li>

                <li><a class="dropdown-item" href="{{url('/print')}}">Print</a></li>

                <li><a class="dropdown-item" href="{{url('/online')}}">Online</a></li>

                <li><a class="dropdown-item" href="{{url('/target-market')}}">Target Market</a></li>

                <li><a class="dropdown-item" href="{{url('/target-audience')}}">Target Audience</a></li>

                <li><a class="dropdown-item" href="{{url('/tech-specs')}}">Tech Specs</a></li>

                <li><a class="dropdown-item" href="{{url('/mediapacks')}}">Mediapack</a></li>

                <li><a class="dropdown-item" href="{{url('/terms')}}">Terms</a></li>

                <li><a class="dropdown-item" href="{{url('/clients')}}">Clientele</a></li>
                <li><a class="dropdown-item" href="{{url('/advertorials')}}">Advertorials</a></li>

              </ul>

            </li>

            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="{{url('/webinars')}}">Webinars</a>

            </li>

          </ul>

        </div>

      </div>

  </nav>

  <!--/primary Nav-->

</header>

</div>

<!--/header container-->