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
              <a href="" class="ahhm-breadcrumb-item">{{trans('messages.archives_title')}}</a>
          </div>
        </div>
      </div>
    </div>


<!--/breadcrumb-->



<!--content div-->

<div class="container-fluid">

<!--about section-->

<div class="row">

  <div class="col-12 col-lg-9 ahhm-ebook-archives">
    <div class="row">
      <div class="col-12">
        <h1 class="mt-0">Magazine Archives</h1>
        <p class="mt-2">The e-Book version of Asian Hospital & Healthcare Management provides you the feel of print edition in digital format. Loaded with a host of user friendly features, Asian Hospital & Healthcare Management e-Book provides a whole new experience and makes reading the magazine a pleasure to treasure on industry know-how. The inbuilt tools provide easy manoeuvring through the e-Book.</p>
      </div>
    </div>
    <div class="row mt-2"> 
      <div class="col-12">

        <div class="current-issue">

          <div class="row m-0">
          @foreach($ebook as $book)
          @if($book->id == $book->latest()->first()->id)
              <div class="col-12 d-flex p-0">
                <div class="magazine-cover">
                <img class="lazy-bg" src="{{ config('app.url').'ebooks/'. Str::slug($book->issue->issue_no).'/'.$book->magazine_image }}" alt="ahhm-current-issue">
                </div>
                  <div class="current-issue-details p-0">

                  <h2 class="mmt-2rem">{{$book->title}}</h2>
                      <ul class="focused-points">
                      @foreach($book->issue->categories as $category)
                        <li>{{ $category->name }}</li>

                          @endforeach
                      </ul>
                      <a href="{{url('archives-magazine/'.$book->id)}}">
                    <button  class="btn btn-ahhmred mt-3" target="_blank">Go to Digital Magazine</button>
</a>
                </div>
              </div>
              @endif
              @endforeach
              <div class="current-issue-stamp">
              @foreach($ebook as $book)
          @if($book->id == $book->latest()->first()->id)
                  <h1>{{$book->issue->issue_no}}</h1>
                  @endif
              @endforeach
                  <h2>CURRENT ISSUE</h2>
              </div>
          </div>
        </div>
        <div class="divider"></div>
      </div>
    </div>


   
    <div class="row">
      <div class="col-12">
          <div class="archives">
          @foreach($ebook as $book)
        @if($book->id != $book->latest()->first()->id)
              <a href="{{url('archives-magazine/'.$book->id)}}" class="archive-magazine">
                  <img class="" src="{{ config('app.url').'ebooks/'. Str::slug($book->issue->issue_no).'/'.$book->magazine_image }} " alt="{{ $book->issue->issue_no}}" title="{{ $book->issue->issue_no}}">
                  <p>{{ $book->issue->issue_no}}</p>
              </a>
             @endif
              @endforeach
          </div>

      </div>

    </div>

   

    



  </div>

    

    



  <!--advertise-->

  <div class="col-12 col-lg-3 ahhm-advertise">

  @include('layouts.partials._square_banner')

  </div>

  <!--advertise-->

</div>






</div>

<!--/content div-->


 <!-- Modal -->

 <div class="modal fade" id="magazineSubscribe" tabindex="-1" aria-labelledby="exampleModalLabel" >

<div class="modal-dialog">

  <div class="modal-content">

    <div class="modal-header">

      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

    </div>

    <div class="modal-body">

     <img id="magazineSubscribeCoverpage" src="{{config('app.url').'ebooks/'. Str::slug($book->issue->issue_no).'/'.$book->magazine_image }}" class="">

     <h2 class="modal-title mt-3" id="exampleModalLabel">{{ old('title') }}</h2>

    </div>

    <div class="modal-footer">

      <div class="input-group mb-3">

        <input type="text" class="form-control" placeholder="Enter your eMail id" aria-label="Recipient's username" aria-describedby="button-addon2">

        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Subscribe</button>

      </div>

    </div>

  </div>

</div>

</div>



@endsection



@section('scripts')
@if($errors->any())    
<script>

      $(document).ready(function(){ 

        $('#modal_confirm').modal('show');   

      });                  
</script>
  @endif

<script>

$(function () {

  $('body').on('hidden.bs.modal', '.modal', function () {

    $(this).removeData('bs.modal');

  });

});

var $url_path = '{!! url('/') !!}';



$('body').on('click','#show_confirm', function (event) {



  var ebook_id = $(this).data("eid");

  var issue_id = $(this).data("id");

  var script = $(this).data("script");

  

  var action = "{{ url('archives-magazine') }}" +'/' + ebook_id;

  $('.modal-title').text($(this).data("title"));

  // $("form").attr('action',action);

  $("[name=title]").val($(this).data("title"));

  $("[name=issue_id]").val(issue_id);

  $("[name=ebook_id]").val(ebook_id); 

  $("[name=ebook_script]").val(script);   



});

</script>

@endsection