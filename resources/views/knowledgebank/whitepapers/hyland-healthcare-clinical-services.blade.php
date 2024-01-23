@extends('../layouts/app')
@section('style')
<style type="text/css">
  .text-wrap{
    text-shadow: 0 0 8px #131010  ;
    color: transparent !important;
  }
  .img-wrap{
    -webkit-filter: blur(10px); /* Safari 6.0 - 9.0 */
    filter: blur(10px);
  }
  body {
  -webkit-user-select: none;
     -moz-user-select: -moz-none;
      -ms-user-select: none;
          user-select: none;
}
#reboot{
  cursor: pointer;
}
a#reboot:hover{
  text-decoration: underline;
}
</style>
@endsection

@section('content')
<script type="text/javascript">
   sessionStorage.setItem('advertOnce','true');
</script>

<div class="clearfix"></div>

  <div class="container">

    <div class="row PF-MobP030">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('/knowledgebank') }}">Knowledge Bank</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="{{url('whitepapers')}}">Whitepapers</a></li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // RIGHT SECTION --> 
      <div class="col-lg-9 col-xs-12 PF-BrdrDDD p-1">
       
        <div class="col-lg-12 col-xs-12">
          <h1 class="pt-2 PF-TXTRED">HEALTHCARE CONTENT SERVICES = A CLINICAL CONTENT STRATEGY THAT WORKS</h1>
        </div> 

        <!-- MAIN BODY -->
        <div class="col-lg-12">
          <h2 class="font-weight-bold">Challenge, meet opportunity</h2>
          <p>Clinical content isn’t easy to wrangle. With structured and unstructured information stored in disconnected data repositories across multiple departments, clinical content often creates information siloes.</p>
          <p>Between the sheer volume and variety of clinical information and the increasing demand for mobile access to it, the task of aggregating all of the relevant data seems nothing short of herculean. Lucky for you, utilizing a Healthcare Content Services approach to your clinical content strategy turns challenge into opportunity.</p>

          <p>Analysts from Merrill Lynch, Gartner and IBM have come to a general consensus that unstructured data<span style="color: rgb(0, 72, 102);">...<a href="http://promotions.asianhhm.com/hyland-healthcare-software-solutions" id="reboot" class="PF-TXTRED"><strong style="font-size: 18px">Read More</strong></a></span> <span class="text-wrap" onmousedown="return false">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </span></p>

          <span class="text-wrap" onmousedown="return false"> 

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>

            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>

            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
          </span>                  

        </div> 
        <!-- END MAIN BODY -->

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