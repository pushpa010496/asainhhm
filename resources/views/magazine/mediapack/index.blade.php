@extends('../layouts/app')

@section('style')

  <link rel="stylesheet" href="{{ config('app.url') }}css/advertise.css">

  <meta property="og:image" content="https://industry.asianhhm.com/images/ahhm-advertise-og.jpg" />

  <style type="text/css">
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

.text-gray{
  color:#c5c2c3 !important;
  line-height:2;
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


<script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>


<style>
  /* multicheck box drop downcode */
  .multiselect {
  width: 100%;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#mySelectOptions {
  display: none;
  border: 0.5px #7c7c7c solid;
  background-color: #ffffff;
  max-height: 150px;
  overflow-y: scroll;
}
#mySelectOptions label {
  display: block;
  font-weight: normal;
  white-space: nowrap;
  min-height: 1.2em;
  background-color: #ffffff00;
  padding: 0 2.25rem 0 .75rem;
  /* padding: .375rem 2.25rem .375rem .75rem; */
}
#mySelectOptions label:hover {
  background-color: #1e90ff;
}

  </style>

@endsection



@section('content')



<div class="container-fluid breadcrumb-live">

      <div class="row">

        <div class="col-12">

            <div class="ahhm-breadcrumb">

              <a href="" class="ahhm-breadcrumb-item">Mediapack</a>

          </div>

        </div>

      </div>

    </div>


    <div class="container-fluid">

<!--advertise section-->

<div class="row">

  <div class="col-12 ahhm-advertise-services">

    <div class="row">
    <div class="container mb-5">
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
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/webinar-icon.webp" alt="document-advertise"><br>
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
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/display-add-icon.png" alt="document-advertise"><br>
         Print Advertising</a>
        </li>
        <li class="nav-item nav-main-item  active" align="center">
        <a class="nav-link" href="{{ url('mediapacks') }}">
        <img class="mb-2" src="https://industry.asianhhm.com/promotions/images/mediapack-icon.png" alt="document-advertise"><br>
          Media Pack</a>
        </li>
        <li class="nav-item nav-main-item" align="center">
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
      <div class="col-12">

        <h1 class="mt-0">Unleash Your Healthcare Advertising Potential with Our Media Pack!</h1>

      </div>

    </div>

   

    <div class="row mt-3">

      <div class="col-12">

        <div class="services-wrapper">
          <div class="row">
          <div class="col-md-5">
                           <div class="services">

                                      <h1 style="font-size:40px;line-height: 5rem;">Welcome to our Healthcare Media Pack!</h1>
                                        <p class="text-gray">Our Healthcare Media Pack is your comprehensive resource for all things related to advertising and media opportunities in the healthcare industry. Whether you are a brand, organization, or healthcare provider, our media pack offers valuable insights and options to help you effectively reach your target audience and achieve your marketing goals.</p>
                                      <h3>Inside our Media Pack, you will discover:</h3>

                                      <ul class="ahhm-list ahhm-list-dotted">

                                        <li>Media Channels</li>

                                        <li>Advertising Options</li>

                                        <li>Audience Reach</li>
                                        <li>Partnership Opportunities</li>

                                      </ul>
                                      <p class="text-gray">We invite you to download our Media Pack and explore the possibilities that await you. Reach out to our team to discuss how we can work together to create a customized media plan that aligns with your goals and maximizes your brand's visibility in the healthcare sector.</p>
                            </div>
          </div>

          <div class="col-md-7">
                <div class="download-form">
                <form  method="post" route="{{route('mediapacks.post')}}" method="post" id="writemessage" onsubmit="return validateForm()" class="form_count" accept-charset="utf-8"> 

              @csrf
              <input type="hidden" name="name" value="asianhhm-mediapacks">
              <input type="hidden" name="" class="action_url" value="{{url('mediapacks')}}">
              <input type="hidden" name="name" value="mediapacks">

                            <h3>Register to Learn More & Download Media Pack</h3>

                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" name="firstname" placeholder="First Name*" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" name="lastname" placeholder="Last Name*" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" name="company" placeholder="Company Name*" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" name="cf_leads_jobtitle" placeholder="Job Title *" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3">

                                <input type="email" class="form-control" name="email" placeholder="Business Email ID*" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3">

                                <input type="text" class="form-control" name="mobile" placeholder="Telephone Number*" aria-label="Username" required>

                            </div>

                            <div class="input-group mb-3 mt-3 arrow">

                      <!-- <select class="form-select mb-3" id="whom" name="whom" aria-label=".form-select-lg example" required multiple>
                                    <option value="Print Advertisement">Print Advertisement</option>
                                    <option value="Banner Advertisement">Banner Advertisement</option>
                                    <option value="E-Newsletter Sponsorship">E-Newsletter Sponsorship</option>
                                    <option value="Email Direct Marketing">Email Direct Marketing</option>
                                    <option value="Content Syndication – Lead Generation">Content Syndication – Lead Generation</option>
                                    <option value="Microsite – Lead Generation">Microsite – Lead Generation</option>
                                    <option value="Webinars">Webinars</option>
                                    <option value="Survey & Assessment Program">Survey & Assessment Program</option>
                                    <option value="Content Creation">Content Creation</option>
                                    <option value="Advertorial">Advertorial</option>
                              </select> -->
                              <div id="myMultiselect" class="multiselect">

<div id="mySelectLabel" class="selectBox" onclick="toggleCheckboxArea()">

  <select class="form-select arrow" style='color: #a9a9a9 !important;' name="service[]" required>

    <option>Select Service</option>

  </select>

  <div class="overSelect"></div>

</div>

<div id="mySelectOptions" >
<label for="Print Advertisement"><input type="checkbox" id="one"  onchange="checkboxStatusChange()" value="Print Advertisement" /> Print Advertisement</label>

<label for="E-Newsletter Sponsorship"><input type="checkbox" id="two"  onchange="checkboxStatusChange()" value="E-Newsletter Sponsorship" /> E-Newsletter Sponsorship</label>

<label for="Banner Advertisement"><input type="checkbox" id="three" onchange="checkboxStatusChange()" value="Banner Advertisement" /> Banner Advertisement</label>

<label for="Webinars"><input type="checkbox" id="four"  onchange="checkboxStatusChange()" value="Webinars" /> Webinars</label>

<label for="Content Syndication – Lead Generation"><input type="checkbox"  id="five" onchange="checkboxStatusChange()" value="Content Syndication – Lead Generation" /> Content Syndication – Lead Generation</label>

<label for="Microsite – Lead Generation"><input type="checkbox" id="six"  onchange="checkboxStatusChange()" value="Microsite – Lead Generation" /> Microsite – Lead Generation</label>

<label for="Survey & Assessment Program"><input type="checkbox" id="seven"  onchange="checkboxStatusChange()" value="Survey & Assessment Program" /> Survey & Assessment Program</label>

<label for="Content Creation"><input type="checkbox" id="eight"  onchange="checkboxStatusChange()" value="Content Creation" /> Content Creation</label>

<label for="Advertorial"><input type="checkbox" id="nine"  onchange="checkboxStatusChange()" value="Advertorial" /> Advertorial</label>
<label for="Email Direct Marketing"><input type="checkbox" id="ten"  onchange="checkboxStatusChange()" value="Email Direct Marketing" /> Email Direct Marketing</label>


</div>

</div>

                            </div>

                            <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">


                            <div class="input-group mb-3 mt-3 arrow">

                              <select class="form-select mb-3" name="country" aria-label=".form-select-lg example" required>

                                <option value="">Select Country</option>

                                @foreach($countries as $country)
                                <option value="{{$country->title}}">{{$country->title}}</option>
                                @endforeach

                              </select>

                            </div>

                            <button type="submit" class="btn btn-ahhmred">Submit</button>
  </form>
                    </div>
          </div>
          </div>



          

        </div>

      </div>

    </div>

    

    <div class="row mt-4rem">

      <div class="col-12">

        <h2>Our Clients</h2>

        <div class="clients">

          <img src="https://industry.asianhhm.com//advertising/csc-logo.png" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/perkinelmer-logo.png" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/zebra-logo.png" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/orion-health-logo.png" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/abbott-logo.png" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/siemens-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/roche-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/ge-healthcare-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/philips-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/microsoft-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertising/napier-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertisers/1539600066-img-ascom-logo.jpg" class="client-logo" alt="clients-logo">

          <img src="https://industry.asianhhm.com//advertisers/1488532104-img-ibm.jpg" class="client-logo" alt="clients-logo">

          <a href="{{('/clients')}}">More...</a>

        </div>

      </div>

    </div>

    

  </div>



</div>

<!--/advertise section-->



</div>


<!-- Clients-Container // -->


<div id="alertModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

     <div class="modal-header">

      <h5 class="modal-title text-danger">Error</h5>

      <button type="button" class="close" data-dismiss="modal">&times;</button>



    </div>

    <div class="modal-body">

      <p class="">Please fill the all required fields....!!</p>





    </div>

    <div class="modal-footer">

     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

   </div>

 </div>

</div>

</div>

@endsection



@section('scripts')



<script type="text/javascript">

      var url = "{{ route('advertise.post') }}";

      function OnButton1(){

        setTimeout(function(){

            document.advertise_form.action = url;

        document.advertise_form.submit();

        },200);

      }

    

      function checkform() {      

       var flag = true;

       var form = $('#writemessage');

       $("#writemessage input").each(function(){

        if($(this)[0].hasAttribute("required")){

          if($(this)[0].value == ""){

            $('#alertModal').modal('show');                 

              flag = false;

          }

        }

      });

        if (!flag) { return false; }

         OnButton1(); 

    }

  </script> 

<script>
window.onload = (event) => {
  initMultiselect();
 
};

function initMultiselect() {
  checkboxStatusChange();

  document.addEventListener("click", function(evt) {
    var flyoutElement = document.getElementById('myMultiselect'),
      targetElement = evt.target; // clicked element

    do {
      if (targetElement == flyoutElement) {
        // This is a click inside. Do nothing, just return.
        //console.log('click inside');
        return;
      }

      // Go up the DOM
      targetElement = targetElement.parentNode;
    } while (targetElement);

    // This is a click outside.
    toggleCheckboxArea(true);
    //console.log('click outside');
  });
}

function checkboxStatusChange() {
  var multiselect = document.getElementById("mySelectLabel");
  var multiselectOption = multiselect.getElementsByTagName('option')[0];

  var values = [];
  var checkboxes = document.getElementById("mySelectOptions");
  var checkedCheckboxes = checkboxes.querySelectorAll('input[type=checkbox]:checked');

  for (const item of checkedCheckboxes) {
    var checkboxValue = item.getAttribute('value');
    values.push(checkboxValue);
  }

  var dropdownValue = "Select Services";
  if (values.length > 0) {
    dropdownValue = values.join(', ');
  }

  multiselectOption.innerText = dropdownValue;
}

function toggleCheckboxArea(onlyHide = false) {
    var checkboxes = document.getElementById("mySelectOptions");
      var displayValue = checkboxes.style.display;
      if (displayValue != "block") {
        if (onlyHide == false) {
          checkboxes.style.display = "block";
        }
      } else {
        checkboxes.style.display = "none";
      }
    }

    function validateForm() {
  // Validate that at least one checkbox is selected
  var checkboxes = document.querySelectorAll("#mySelectOptions input[type='checkbox']");
  var checked = Array.from(checkboxes).some(checkbox => checkbox.checked);

  if (!checked) {
    alert("Please select at least one option from services.");
    return false; // Prevent form submission
  }

  return true; // Allow form submission
}
  </script>

@endsection