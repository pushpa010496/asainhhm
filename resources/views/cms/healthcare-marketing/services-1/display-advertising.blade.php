@extends('../layouts/app')

@section('style')
<style>
.btn-style{
  padding:10px 30px;
  background-color:#ebebeb;
  color:#000;
  width:100%;
  border:none;
  font-size:14px;
  font-weight:bold;   
}
.btn-style:hover{
  background-color:#ef2947;
  color:#fff;
}
img{
  max-width:100%;
}

</style>



@endsection



@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="{{ url('/healthcare-marketing/display-advertising-solutions') }}" class="ahhm-breadcrumb-item"> Display Advertising Solutions</a>
              <a href="" class="ahhm-breadcrumb-item">Display Advertising</a>
          </div>
        </div>
      </div>
    </div>



    <div class="container-fluid">
        <!--about section-->
          <div class="row">

            <div class="col-12 col-lg-9 ahhm-about">   

            <div class="row">              
            <div class="col-12">
                      <h1 class="mt-0 mb-3">Display Advertising</h1>
                        <P>
                        AsianHHM offers a diverse selection of display advertising solutions,								
                providing various options for placements, share of voice (SOV), and 								
                banner sizes. It's an unbeatable choice for marketers seeking a 								
                highly targeted B2B audience across multiple geographical regions.								
                Our display advertising programs guarantee quantifiable branding,								
                behavioral insights, and comprehensive reporting with segmentation								
                capabilities. With us, you can confidently optimize your campaigns								
                and gain valuable insights into your audience's behavior.								
                        </P>


      </div>

    </div>  
    
    <div class="row">
      <div class="col-md-3">
       
      <button class="btn-style mb-2" onclick="changeImage1()">Primary Banner</button><br>
      <button class="btn-style mb-2" onclick="changeImage2()">Sky Tower Banner</button><br>
      <button class="btn-style mb-2" onclick="changeImage3()">Leader board Banner</button><br>
      <button class="btn-style mb-2" onclick="changeImage4()">Top/Full Banner</button><br>
      <button class="btn-style mb-2" onclick="changeImage6()">Square Banner</button>
      <button class="btn-style mb-2" onclick="changeImage5()">Base Banner</button><br>
      
      </div>
      <div class="col-md-9"><img id="image" src="https://industry.asianhhm.com/promotions/images/prime-banner.jpg" style=""></div>
      
    </div>    

  </div>



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

</div>

<!--/about section-->



<!--footer-->



<!--/footer-->



</div>

  





@endsection


@section('scripts')

@section('scripts')
<script>

var image = document.querySelector('#image');

function changeImage1() {
    image.src = 'https://industry.asianhhm.com/promotions/images/prime-banner.jpg';
}
 function changeImage2() {
    image.src = 'https://industry.asianhhm.com/promotions/images/sky-tower-banner.jpg';
}
function changeImage3() {
    image.src = 'https://industry.asianhhm.com/promotions/images/leader-baord-banner.jpg';
}
function changeImage4() {
    image.src = 'https://industry.asianhhm.com/promotions/images/top-full-banner.jpg';
}
function changeImage5() {
    image.src = 'https://industry.asianhhm.com/promotions/images/base-banner.jpg';
}
function changeImage6() {
    image.src = 'https://industry.asianhhm.com/promotions/images/square-banner.jpg';
}

</script>
@endsection


@endsection