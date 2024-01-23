<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="800" border="0" align="left" cellpadding="10">
  
  
  <tr>
    <td>
      <table width="800" border="0">
  <tr> 
    <td>
      <table width="800" border="0" cellpadding="5">
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">
              <span class="pb-3">Dear <strong>{{ ucfirst($name)}}</strong>,</span> 
              <tr>
                <td style=""></td>
              </tr>
              {!!$client_message!!}
          <tr>
            <td style=""></td>
          </tr>

            @if(@$referrer != '')
                <a href="{{ $referrer }}">Download RIS brochure</a>
                    <br><br> 
            @endif

            @if(@$workflow != '')
                <a href="{{ $workflow }}">Download Workflow management brochure</a>
                    <br><br> 
            @endif
            @if(@$medavis != '')
                <a href="{{ $medavis }}">Download Referrer portal brochure</a>
                    <br><br> 
            @endif
          
              <span class="pt-3">Thanks & Regards,</span>
             
            </td>
            </tr>
          
         
         <tr>
        <td align="left" valign="middle"  width="500">
          <img src="{{ asset('public/images/logo.png')}}" alt="{{$site_name}}" height="40"/> 
           
        </td>
  </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
  
</table>  
    



</body>
</html>
