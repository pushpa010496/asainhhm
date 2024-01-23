@extends('../layouts/app')

@section('style')

<style type="text/css">


@media (min-width:1600px) {

.card-columns { column-count: 5 !important; }
.img{
  width:195px !important;
  height:270px;
}

}
  @media (min-width:1200px) {

    .card-columns { column-count: 4; }
    .img{
  width:195px !important;
  height:270px;
}

  }

  @media (min-width:992px) and (max-width:1200px) {

    .card-columns {column-count: 3;}	

  }

  @media (min-width:768px) and (max-width:991.98px) {

    .card-columns {column-count: 3;}	

  }

  @media (min-width:400px) and (max-width:767.98px) {

    .card-columns {column-count: 2;}	

  }

</style>

@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
            <div class="row">
              <div class="col-12">
                  <div class="ahhm-breadcrumb">
                    <a href="{{url('/knowledgebank')}}" class="ahhm-breadcrumb-item">Knowledge Bank</a>
                    <a href="" class="ahhm-breadcrumb-item">{{trans('messages.bookshelf_title')}}</a>
                </div>
              </div>
            </div>
          </div>


<!--content div-->

<div class="container-fluid">

<!--about section-->

<div class="row">

  <div class="col-12 col-lg-9 ahhm-bookshelf-screen">

    <div class="row">

      <div class="col-12">

        <h1 class="mt-0">Book Shelf</h1>

        <p class="mt-2">This section showcases the latest works by the leading authors in the healthcare industry.</p>

      </div>

    </div>



    <div class="row mt-5">

      <div class="col-12">
    
          <div class="bookshelf card-columns">
          @foreach($data as $val)
              <a href="{{route('bookshelf.url',$val->url)}}" class="book">

                  <img class="lazy img" data-src="{{ config('app.url').'knowledgebank/bookshelf/'. $val->bookshelf_image}}" alt="{{ $val->alt_tag}}" title="{{$val->title_tag}}">


                  <p>{{$val->title}}</p>

              </a>
              @endforeach
          </div>

      </div>

    </div>  



  </div>



  <!--advertise-->

  <div class="col-12 col-lg-3 text-center">
  @include('layouts.partials._square_banner')
  </div>

  <!--advertise-->





</div>

<!--/about section-->




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

           <img id="magazineSubscribeCoverpage" src="" class="lazy-bg">

           <h2 class="modal-title mt-3" id="exampleModalLabel">Issue 60</h2>

          </div>

          <div class="modal-footer">

            <div class="input-group mb-3">

              <input type="text" class="form-control" placeholder="Enter your eMail id" aria-label="Recipient's username" aria-describedby="button-addon2">

              <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>

            </div>

          </div>

        </div>

      </div>

    </div>




@endsection



@section('scripts')



@endsection