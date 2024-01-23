<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="500" border="0" align="left" cellpadding="10">
  

  <tr>
    <td align="left" valign="middle" style="padding-left:20px;" width="500">
      {{-- <img src="{{ asset('public/images/logo.png')}}" alt="AsianHHM" height="40"/>  --}}
        
    </td>
  </tr>

  <tr>
    <td>
      <table width="500" border="0">
  <tr>
    <td>
      <table width="500" border="0" cellpadding="5">

           @if($exhibitor != '')
           <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Exibitor Registration  </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">Yes</td>
          </tr>
          @endif

          @if($exhibitor != '')
           <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Exibitor list  </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{ @$exhibitor['CMEF'] .', '. @$exhibitor['NHNE'] .', '. @$exhibitor['PHARMACHINA']}}</td>
          </tr>
          @endif

          @if($site_name != '')
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Site Name</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{ ucfirst($site_name)}}</td>
          </tr>
          @endif
          @if($name != '')
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Fullname</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{ ucfirst($name)}}</td>
          </tr>
          @endif
        @if(@$company != '')
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$company}}</td>
          </tr>
          @endif
          @if(@$designation != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job Title</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$designation}}</td>
            </tr>
            @endif
            @if(@$phone != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$phone}}</td>
            </tr>
            @endif
            @if(@$country != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$country}}</td>
            </tr>
            @endif
            @if(@$email != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$email}}</td>
            </tr>
            @endif
            @if(@$type != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$type}}</td>
            </tr>
            @endif

            


            
            
         
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
</table>  
    



</body>
</html>
