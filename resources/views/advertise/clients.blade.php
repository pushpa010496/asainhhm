@extends('../layouts/app')

@section('style')


<style>
  /* Styles for large screens */
  @media only screen and (min-width: 768px) {
  .navbar-small {
    display: none !important;
  }
}

/* Styles for small screens */
@media only screen and (max-width: 767px) {
  .navbar-large {
    display: none !important;
  }
}
  /* Custom CSS for active tab color */
  .nav-link.active {
      background-color: #ED1A3B !important;
      color: #fff !important;
    }
    .nav-tabs {
    border:none;
    }
    a{
        color:#000;
    }
    .nav-main-item{
      width:14%;      
      background-color:#f5f5f7 !important;
      border:1px solid #f5f5f7 ;
    }
    .nav-main-item>a:hover{
        background-color: #fff!important;   
        color:#000 !important;
        height:100%;
    }
    .nav-mini-item{
      background-color: #ddd !important;   
        color:#000 !important;
    }
    .nav-mini-item>a:hover{
      background-color: #ED1A3B !important;   
        color:#fff !important;
    }
    .main-tab-menu {
      flex: 0 0 20px;
     
    }
    .nav-tabs .nav-link {
    border:none;
    }
    .mini-subtab-menu .nav-link {
    margin-bottom: 0px !important;
    }

    .tab-content-wrapper {
      display: flex;
    }   

    .mini-subtab-menu {
      display: flex;
      flex-direction: column;
      margin-top: 10px;
    }

    .mini-subtab-menu .nav-link {
      margin-bottom: 5px;
    }

    .subtab-content {
      flex: 1;
      padding-left: 0px;
    }

    .subtab-content h3 {
      margin-top: 10px !important;
    }

    .subtab-content-container {
      display: flex;
    }

    .subtab-menu {
      flex: 0 0 200px;
    }

    .subtab-content-area {
      flex: 1;
      margin-top:6px;
      padding-left: 20px;
    }
  </style>

@endsection



@section('content')


 <!--breadcrumb-->

 <div class="container-fluid breadcrumb-live">

<div class="row">

  <div class="col-12">

      <div class="ahhm-breadcrumb">

        <a href="" class="ahhm-breadcrumb-item">Advertise</a>

        <a href="" class="ahhm-breadcrumb-item">Clientele</a>

    </div>

  </div>

</div>

</div>

<!--/breadcrumb-->



<!--content div-->

<div class="container-fluid">

<!--about section-->

<div class="row">

  <div class="col-12 col-lg-12 ahhm-advertise-services">

  <div class="container-fluid mb-5">
    <div class="">
    <nav class="navbar-large">
    <ul class="nav nav-tabs main-tab-menu" id="mainTabs">
    <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('healthcare-marketing/b2b-display-advertising') }}">
          <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise" ><br>
         Display Advertising</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('healthcare-marketing/services/webinars') }}">
        <img  class="mb-2" src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise"><br>
          Webinars</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
        <a class="nav-link " href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/email-marketing-icon.png" alt="document-advertise"><br>
         Email Marketing</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('healthcare-marketing/services/content-syndication') }}">
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise"><br>
          Content Syndication</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">
        <img  class="mb-2" src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise"><br>
         Print Advertising</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
        <a class="nav-link" href="{{ url('mediapacks') }}">
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise"><br>
          Media Pack</a>
        </li>
        <li class="nav-item nav-main-item active" align="center">
        <a class="nav-link" href="{{ url('clients') }}">
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/clientes-icon.png" alt="document-advertise"><br>
        Clientele</a>
        </li>
      </ul>
  </nav>
  <!-- Mobile Responsive start -->
 <nav class="navbar-small">
        <div class="container p-0 m-0" id="tab-menu">
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <!-- <thead>
        <tr>
          <th class="text-center">Service</th>
          <th class="text-center">Icon</th>
        </tr>
      </thead> -->
      <tbody>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/document-advertise.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('healthcare-marketing/b2b-display-advertising') }}">Display Advertising</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('healthcare-marketing/services/webinars') }}">Webinars</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/email-marketing-icon.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('healthcare-marketing/services/outbound-email-marketing') }}">Email Marketing</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/content-syndication-icon.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('healthcare-marketing/services/content-syndication') }}">Content Syndication</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('healthcare-marketing/services/b2b-print-advertising') }}">Print Advertising</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('mediapacks') }}">Media Pack</a>
          </td>
        </tr>
        <tr>
          <td class="text-center">
            <img src="https://industry.asianhhm.com/promotions/images/clientes-icon.png" alt="document-advertise">
          </td>
          <td class="text-center">
            <a href="{{ url('clients') }}">Clientele</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
</nav>
<!-- Mobile Responsive End -->
      </div>
      </div>

    <div class="row">
      <div class="col-12">
        <h1 class="mt-0">Clients</h1>
      </div>
      <div class="col-12 mt-4">
      <div class="container">
  <div class="row">
    @php $counter = 0; @endphp
    @foreach($data as $val)
      <div class="col-md-2 col-sm-6 col-6">
        <img src="{{ config('app.url').'/advertisers/'.$val->image }}" alt="{{$val->alt_tag}}" style="width:69%; height:auto;">
      </div>
      @php $counter++; @endphp

      @if ($counter % 6 == 0)
        </div><div class="row">
      @endif
    @endforeach
  </div>
</div>
        </div>
    </div>
  </div>
</div>
</div>

<!--/content div-->


@endsection



@section('scripts')



@endsection