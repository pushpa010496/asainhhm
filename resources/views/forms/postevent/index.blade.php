@extends('../layouts/app')



@section('style')

<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
<style>
  .text-white{
    color:#fff !important;
  }
 .text-gray{
    color:#c5c2c3 !important;
    line-height:2;
  }



  </style>


@endsection

<script src="https://www.google.com/recaptcha/api.js?render=6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6LdVSyoaAAAAAIo7sVTIqiPRnTortACc58vDn5Cg', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>



@section('content')
<div class="container-fluid breadcrumb-live">
      <div class="row">
        <div class="col-12">
            <div class="ahhm-breadcrumb">
              <a href="{{url('mediapacks')}}" style="color:#fff;"> Post Event</a>    
          </div>
        </div>
      </div>
    </div>

      <div class="container-fluid p-0">

        <div class="row p-0">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-12 col-md-12 col-sm-12 col-12">

            <div class="row">

<div class="col-12 ahhm-editorial-calendar">

  <div class="row pl-1">

    <div class="col-12">

      <h1 class="mt-0">Healthcare Events: Where Knowledge Meets Opportunity</h1>

    </div>

  </div>

 

  <div class="row mt-3">

    <div class="col-12">

      <div class="editorial-calendar-form">
   
        <div class="row">
        @if(Session('status') == 'true') 

<h2 class="text-white mb-3"> Thank you...!   </h2>

<h3 class="text-white mb-3"><em> Your event information is safe with us and will be uploaded within the next 48 hours. A confirmation of the same will be coming your way soon.</em></h3>

@endif
          <div class="col-md-6">
    
          <div class="">
          <h1 class="text-white mb-3"> Welcome to our Healthcare Events Page! </h1>
          <p class="text-gray">Discover a wide range of upcoming healthcare events, conferences, webinars, and workshops designed to enhance your knowledge and connections within the industry.</p>
          <p class="text-gray">Stay updated on the latest trends, advancements, and best practices in healthcare. Expand your network, gain valuable insights, and collaborate with industry leaders shaping the future of healthcare. </p>
          <p class="text-gray">Bookmark this page for regular updates on upcoming events and don't miss out on valuable opportunities to grow your professional expertise. Join us at our healthcare events and be part of meaningful experiences and check back regularly for updates on upcoming events.</p>
          </div>
          </div>
          <div class="col-md-6 mt-4">
        
          <div class="download-form">
         
          <form method="post" name="postevent_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">                

          <input type="hidden" value="post-event" name="type" id="type">

          <input name="_token" type="hidden" value="{{ csrf_token() }}">

          <input type="hidden" name="" class="action_url" value="{{route('postevent.post')}}">



          <input type="hidden" name="name" value="post-event">
                  <div class="input-group mb-3 mt-3">

                      <input type="text" class="form-control" name="title" placeholder="Event Name*" aria-label="Username">

                  </div>
                  <div class="input-group mb-3 mt-3">

                    <input type="email" class="form-control" name="email" placeholder="Email*" aria-label="Username">

                    </div>

                  <div class="input-group mb-3 mt-3">

                      <input type="text" class="form-control" name="start_date" placeholder="Event Start Date* (yyyy/mm/dd)" aria-label="Username">

                  </div>

                  <div class="input-group mb-3 mt-3">

                      <input type="text" class="form-control" name="end_date" placeholder="Event End Date* (yyyy/mm/dd)" aria-label="Username">

                  </div>

                  <div class="input-group mb-3 mt-3">

                      <input type="text" class="form-control" name="event_organiser"  placeholder="Event Organisers*" aria-label="Username">

                  </div>

                 

                  <div class="input-group mb-3 mt-3">

                      <input type="text" class="form-control" name="web_link" placeholder="Event Weblink*" aria-label="Username">

                  </div>
                  <div class="input-group mb-3 mt-3">

                    <input type="text" class="form-control" name="venue" placeholder="Event Venue*" aria-label="Username">

                    </div>
                    <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

                  <div class="input-group mb-3 mt-3">

                      <textarea type="text" class="form-control" name="address" rows="5" height="10" placeholder="Event Address*" aria-label="Username"></textarea>

                  </div>
                  <button type="submit" class="btn btn-ahhmred w-100 mt-3 mb-3">Submit</button>
  </form>
              </div>
          </div>
        </div>

       

        

      </div>

    </div>

  </div>  

</div>

</div>            

            </div>

            <!-- // RIGHT SECTION // --> 





  
        </div>



      </div>

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

  var url = "{{route('postevent.post')}}";

  function OnButton1(){

    setTimeout(function(){

      document.postevent_form.action = url;

      document.postevent_form.submit();

        });

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

  //OnButton1();

  //return true

      gToken =$("#g-token").val();

      $.ajax({

            url: "{{route('gogglecaptha')}}",

            type: "POST",

            data: {'gtoken':gToken, '_token': '{{ csrf_token() }}'},

            success: function (response) {

                var obj = JSON.parse(response);

                //alert(obj.success);

                if(obj.success) {

                    OnButton1()

                    return true;

                }

                else{

                    form.find('.verifi').html("We can't proceed request with out captcha verification!");

                    return false;

                }           

            },

        });



}

</script> 


@endsection