@extends('../layouts/app')
@section('style')
@endsection
@section('content')

<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{ url('/advertise') }}" class="ahhm-breadcrumb-item">Advertise</a>
              <a href="" class="ahhm-breadcrumb-item">Tech Specs</a>
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid">
               <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12  p-1">
            <div class="row">
<div class="col-12 col-lg-12 ahhm-tech-specs">
  <div class="row">
    <div class="col-12">
      <h1 class="mt-0">Tech Specs</h1><br>
      <h2 class="mt-4">Magazine - Asian Hospital & Healthcare Management</h2>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12">
      <h3>Mechanical Details</h3>
      <img src="{{config('app.url')}}images/mechanical-details.svg" alt="Mechanical Details" class="mt-2">
    </div>
    <div class="col-12 mt-5rem">
      <div class="row m-0">
        <div class="col-12 col-sm-6 p-0 mmb-3rem">
            <h3>Double Page Spread</h3>
            <img src="{{config('app.url')}}images/double-page-spread.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Ad Size</th>
                    <th scope="col">Width</th>
                    <th scope="col">Height</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Page Type</td>
                    <td>340MM</td>
                    <td>240MM</td>
                  </tr>
                  <tr>
                    <td>Page Trim</td>
                    <td>406MM</td>
                    <td>273MM</td>
                  </tr>
                  <tr>
                    <td>Page Bleed</td>
                    <td>418MM</td>
                    <td>279MM</td>
                  </tr>
                </tbody>
              </table>
        </div>
        <div class="col-12 col-sm-6 p-0">
            <h3>Full Page and Covers</h3>
            <img src="{{config('app.url')}}images/full-page-covers.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Ad Size</th>
                    <th scope="col">Width</th>
                    <th scope="col">Height</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Page Type</td>
                    <td>170MM</td>
                    <td>240MM</td>
                  </tr>
                  <tr>
                    <td>Page Trim</td>
                    <td>203MM</td>
                    <td>273MM</td>
                  </tr>
                  <tr>
                    <td>Page Bleed</td>
                    <td>209MM</td>
                    <td>279MM</td>
                  </tr>
                </tbody>
            </table>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5rem">
        <div class="row m-0">
          <div class="col-12 col-sm-6 p-0 mmb-3rem">
              <h3>Half Page Horizontal</h3>
              <img src="{{config('app.url')}}images/half-page-horizontal.svg" alt="Double Page Spread" class="mt-2 ">
              <table class="table table-borderless">
                  <thead>
                    <tr>
                      <th scope="col">Width</th>
                      <th scope="col">Height</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>173MM</td>
                      <td>105MM</td>
                    </tr>
                  </tbody>
              </table>
          </div>
          <div class="col-12 col-sm-6 p-0">
              <h3>1/3rd Page Vertical Outer</h3>
              <img src="{{config('app.url')}}images/1-3-page-vertical-outer.svg" alt="Double Page Spread" class="mt-2 ">
              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Width</th>
                    <th scope="col">Height</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>53MM</td>
                    <td>221MM</td>
                  </tr>
                </tbody>
            </table>
          </div>
        </div>
    </div>
    <div class="col-12 mt-5rem">
      <div class="row m-0">
        <div class="col-12 col-sm-6 p-0 mmb-3rem">
            <h3>1/3rd Page Product Flash</h3>
            <img src="{{config('app.url')}}images/1-3-page-product-flash.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Width</th>
                    <th scope="col">Height</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>178MM</td>
                    <td>70MM</td>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-sm-6 p-0">
            <h3>Island</h3>
            <img src="{{config('app.url')}}images/island.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Width</th>
                  <th scope="col">Height</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>53MM</td>
                  <td>65MM</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col-12 mt-5rem">
      <div class="row m-0">
        <div class="col-12 col-sm-6 p-0 mmb-3rem">
            <h3>GateFold Cover 2-Pages</h3>
            <img src="{{config('app.url')}}images/gatefold-cover-2pages.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Ad Size</th>
                  <th scope="col">Width</th>
                  <th scope="col">Height</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Page Type</td>
                  <td>380MM</td>
                  <td>248MM</td>
                </tr>
                <tr>
                  <td>Page Trim</td>
                  <td>406MM</td>
                  <td>273MM</td>
                </tr>
                <tr>
                  <td>Page Bleed</td>
                  <td>412MM</td>
                  <td>279MM</td>
                </tr>
              </tbody>
          </table>
        </div>
        <div class="col-12 col-sm-6 p-0">
            <h3>GateFold Inner 2-Pages</h3>
            <img src="{{config('app.url')}}images/gatefold-inner-2pages.svg" alt="Double Page Spread" class="mt-2 ">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">Ad Size</th>
                  <th scope="col">Width</th>
                  <th scope="col">Height</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Page Type</td>
                  <td>380MM</td>
                  <td>248MM</td>
                </tr>
                <tr>
                  <td>Page Trim</td>
                  <td>406MM</td>
                  <td>273MM</td>
                </tr>
                <tr>
                  <td>Page Bleed</td>
                  <td>412MM</td>
                  <td>279MM</td>
                </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-12 mt-5">
      <h2>artwork</h2>
      <h3>Software</h3>
      <p class="mt-2">InDesign, Photoshop, Illustrator & High resolution PDF (file must have all images at 300dpi with fonts embedded)
        (Not Compatible: PageMaker, Coreldraw or any other software or files from the Internet)</p>
    </div>
    <div class="col-12 mt-4rem">
      <h3>Pictures Resolution</h3>
      <p class="mt-2">300dpi at 100% scaling for images, either as TIFF, JPG, EPS, or PDF</p>
    </div>
    <div class="col-12 mt-4rem">
      <h3>Colour</h3>
      <p class="mt-2">All colours to be CMYK breakdowns, including InDesign, Illustrator and Photoshop files</p>
    </div>
    <div class="col-12 mt-4rem">
      <h3>Fonts</h3>
      <p class="mt-2">Include all print and screen fonts</p>
    </div>
    <div class="col-12 mt-4rem">
      <h3>Note</h3>
      <ul class="ahhm-list">
        <li>Advertisers are provided with one copy of the publication only</li>
        <li>Requirement for extra copies needs to be indicated at the time of approving the advert. Such copies entail extra charges @ US$ 25 per copy, plus cost of delivery</li>
        <li>The above ad tariff is exclusive of the Ad agency commission</li>
        <li>Corporate Showcase (8-pages) option entails flash of your logo on the cover page bottom part (Size: 20 mm X 35 mm)</li>
        <li>Font "Adobe Garamond Pro" is not allowed for the contents of corporate showcase</li>
      </ul>
    </div>
    <div class="col-12 mt-4rem">
      <h3>To discuss advertising and sponsorship opportunities please contact</h3>
      <p class="mt-2">Email: <a href = "mailto: advertise@asianhhm.com">advertise@asianhhm.com</a></p>
      <p class="mt-2">Tel: +91 (0) 40 4961 4567</p>
      <p class="mt-2">Fax: +91 (0) 40 4961 5555</p>
      <p class="mt-2">Website: www.asianhhm.com</p>
    </div>
  </div>
</div>
</div>
              <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Tech Specs</h1> 
                </div>
               {!! $data->description !!}  
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