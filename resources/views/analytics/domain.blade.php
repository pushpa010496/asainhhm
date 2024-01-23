@extends('../layouts/app')
@section('style')
<link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css">
<link href="{{ config('app.url') }}css/datepiker.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
@endsection
@section('content')
<div class="col-lg-12">
  @include('error')
  <!--   <div class="bs-example">
    <div class="alert  fade in" id="alert5" name="alert5">
        
        <p style="color: #FF0000"><marque><strong style="" class="">All Fields Are Required..</strong></marque></p>
       
    </div>
    </div> -->
</div>
<section class="content">
  <div class="box-body">
    <form action="{{ url('analyticaldomainreports') }}" method="post">
    {{csrf_field()}}
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <?php
            //     print_r($companyinfo);
            
            
              //print_r($companyinfo[0]->comp_name);
            
            //company_profiles
            
              ?>
          <label>Select Company <span style="color: #FF0000">*</span></label>
          <select class="form-control select2" id="displayid" name="siteurl" style="width: 100%;" required>
            <option selected="selected" value="ochre">--Select Company--</option>
            <option value="">Asianhhm</option>
          </select>
          <span id="alert" name="alert" style="color: red;font-weight: 600"></span>
        </div>
        <!-- /.form-group -->
      </div>
      <!-- /.col -->
      <div class="col-md-4">
        <div class="form-group">
          <label>Start Date <span style="color: #FF0000">*</span></label>
          <input type="text" id="startdate" name="startdate" class="form-control" required>
          <span id="alert1" name="alert1" style="color: red;font-weight: 600"></span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label>End Date <span style="color: #FF0000">*</span></label>
          <input type="text" id="enddate" name="enddate" class="form-control" required>
          <span id="alert2" name="alert2" style="color:red;font-weight: 600"></span>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <input type="SUBMIT" class="btn btn-info pull-right" style="margin-top:37PX" id="formsubmit" name="formsubmit" value="Get Word Report"> 
      </div>
    </div>
    <div class="col-md-12">
      <div class="col-lg-6">
        <fieldset>
          <!-- <legend style="">Select Metrics</legend> -->
          <div class="iCheck-helper" aria-checked="false" aria-disabled="false" style="position: relative;">
            <input type="checkbox" class="iCheck-helper" value=" ga:users" name="metric[]" id="metric" checked="checked" hidden="hidden" readonly> <span style="font-weight: 600" hidden="hidden">Total Trafic</span> &nbsp;&nbsp;<br>
            <!--  <input type="checkbox" class="iCheck-helper" value="ga:newUsers" name="metric[]" id="metric"> <span style="font-weight: 600">New Visitors / Return Visitors</span> &nbsp;&nbsp;<br>
              <input type="checkbox" class="iCheck-helper" value="ga:sessionDuration
              " name="metric[]" id="metric"><span style="font-weight: 600">Time Spent</span>&nbsp;&nbsp;<br>
              
              <input type="checkbox" class="iCheck-helper" value="ga:bounceRate" name="metric[]" id="metric"><span style="font-weight: 600">Bounce Rate</span>&nbsp;&nbsp;<br>
              <input type="checkbox" class="iCheck-helper" value="ga:organicSearches" name="metric[]" id="metric"><span style="font-weight: 600">Organic Sources</span>&nbsp;&nbsp;<br> -->
          </div>
        </fieldset>
      </div>
      <div class="col-lg-6">
        <fieldset>
          <!--  <legend>Select Dimensions</legend> -->
          <div class="iCheck-helper" aria-checked="false" aria-disabled="false" style="position: relative;">
            <input type="checkbox" class="iCheck-helper" value="ga:networkDomain" name="dim[]" id="dim" checked="checked" hidden="hidden"> <span style="font-weight: 600" hidden="hidden">Country</span> &nbsp;&nbsp;<br>
          </div>
      </div>
      </fieldset>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label></label>
        <!--  <input type="SUBMIT" class="btn btn-success" style="margin-top: 27PX" id="formsubmit" name="formsubmit"> -->
      </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
  </div>
  {{ Form::close() }}
</section>
@endsection
@section('scripts')
<script src="{{ config('app.url') }}js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">
  $("#formsubmit").click(function () {
  
    var viewcompany=$("#displayid").val();
  
    var firstdate=$("#startdate").val();
    var lastdate=$("#enddate").val();
    if(viewcompany=="ochre"){
  $("#alert").html("Please Select Company");
    //alert("Please Select Company");
    return false;
  
    }
  
    if(firstdate==""){
  
  //alert("Please select startdate");
  
       //$("#alert1").addClass("alert-warning");
  
       $("#alert1").html("Please Select Start Date");
        // $("#alert").fadein(1000);
        // $("#alert").fadeout(8000);
       
        // $("#startdate").focus();
         return false;
  
  }
  
    if(lastdate==""){
        // $("#alert").html("Please Select End Date");
        // $("#alert").fadein(6000);
  
   $("#alert2").html("Please Select End Date");
   return false;
    }
    if ($('input:checkbox').filter(':checked').length < 1){
       // alert("Check at least one Dimension!");
         $("#alert").html("Check at least one Dimension!");
    return false;
    }
  
  });
  $(document).ready(function(){
  
  $('#startdate').datepicker({
      format: 'dd-mm-yyyy',
        changeMonth: true,
        changeYear: true,
        autoclose: true,
  
    });
    $('#enddate').datepicker({
      format: 'dd-mm-yyyy',
      changeMonth: true,
        changeYear: true,
        autoclose: true,
    });
  
  });
  //$.widget.bridge('uibutton', $.ui.button);
  //Date picker
   
  
  
  
</script>
@endsection