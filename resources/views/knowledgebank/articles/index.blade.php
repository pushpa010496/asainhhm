@extends('../layouts/app')
@section('style')

<style>
  .articles-heroimage{
  background: url(https://industry.asianhhm.com/promotions/images/articles-heroimage.jpg);
  width: 100%;
  height: auto;
  min-height: 41rem;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 5rem;
  margin-top: 1rem;
  /* background-color: #60a9e0; */
  background-position: center right;
}
@media screen and (max-width: 755px) {
   .articles-heroimage h2 {
    max-width: 100% !important;
     }
}
.articles-heroimage h2 {
  font-family: "Montserrat", sans-serif;
  max-width: 65%;
  color: #fff !important;
  line-height: 3.5rem;
}
.articles-heroimage h2 span {
  font-size: 3.8rem;
  font-weight: 600;
  text-transform: initial;
  display: block;
  line-height: 4.5rem;
}
@media screen and (max-width: 750px) {
  .articles-heroimage h2 span {
    padding-top:10px;
    font-size:3rem;
    line-height:3rem;
     }
    }
    .articles-heroimage h2 {
   
    white-space: wrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
      -webkit-line-clamp: 6; 
      -webkit-box-orient: vertical;
  }

  @media (max-width: 768px) {
    .articles-heroimage h2 {
      white-space: wrap;
      max-height: 14.5em; 
      overflow: hidden;
      display: -webkit-box;
      -webkit-line-clamp: 8;
      -webkit-box-orient: vertical;
    }
  }
 
</style>
@endsection
@section('content')
<!-- <script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script> -->
      <div class="container-fluid breadcrumb-live">
            <div class="row">
              <div class="col-12">
                  <div class="ahhm-breadcrumb">
                    <a href="{{url('/knowledgebank')}}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
                    <a href="" class="ahhm-breadcrumb-item">{{trans('messages.articles_title')}}</a>
                </div>
              </div>
            </div>
          </div>

        <div class="row">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 pl-1">
            <div class="row">
        <div class="col-12 col-lg-12 ahhm-about">
          <div class="row">
            <div class="col-12">
              <h1 class="mt-0">{{trans('messages.articles_title')}}</h1>
             
      <div class="articles-heroimage" id="bg-image">
        <h2>Asian Hospital & Healthcare Management<br> <span>Current Global Trends, Futuristic Roadmaps, Technology Advances, Holistic Industry Scenario & much more.</span></h2>
      </div>
   <div class="pt-4"></div>
              <p class="mt-2">{{trans('messages.articles_text')}}</p>
            </div>
            @foreach($data as $val)
            <div class="col-12 mt-5">
              <div class="card pb-3">
                <div class="card-body mt-0">
                  <a href="{{ route('articles.url',[$val->url])}}" title="{{$val->title_tag}}">
                    <span class="card-text">
                      <h3 class="card-title hyperlink">{{ $val->title}}</h3><br>
                      @if( $val->sub_title!= null )
                      <i>{{ $val->sub_title }}</i><br>
                      @endif
                      {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
                        </span>
                      </a>
                </div>
              </div>
            </div>   
            @endforeach
            @include('layouts/partials/_loadmorehtml')
        </div>        
      </div>
</div>
              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">{{trans('messages.articles_title')}}</h1>            
                </div>
                <p>{{trans('messages.articles_text')}}</p>
              </div> -->
              <!-- @foreach($data as $val)
              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list mb-3">
                <h2 class="mb-2 PF-TXTBlk000">
                  <a href="{{ route('articles.url',[$val->url])}}" title="{{$val->title_tag}}" class="PF-TXTBlk000">{{ $val->title}}</a>
                </h2>
                <h5 class="PF-Caps text-muted">{{ $val->sub_title }}</h5>
                {{-- <h6 class="PF-Caps text-muted">{{ $val->designation }}</h6> --}}
                {!!$val->short_description!!}
                {{ \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...') }}
              </div> 
              @endforeach
              @include('layouts/partials/_loadmorehtml') -->
            </div>          
            <!-- // RIGHT SECTION // --> 
            <!--// RIGHT SECTION - Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
              <div class="bg-gray border-secondary">
                <div class="text-center">
                  {{-- <h3 class="adv-title">Advertisements</h3> --}}
                </div>
                 @include('layouts.partials._square_banner')
              </div>
            </div>
            <!-- RIGHT SECTION - Square Banners // --> 
        </div>
      </div>
@endsection
@section('scripts')
<script type="text/javascript">
  var url = "{{ url('articles/more') }}";
 @include('layouts/partials/_loadmorejs')
</script>
@endsection