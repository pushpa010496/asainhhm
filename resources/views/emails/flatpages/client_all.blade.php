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
              <span class="pb-3">Dear <strong>{{$name}}</strong>,</span> <br/><br/>
              
              Thank you for showing your interest in <strong>{{$client_message}}</strong>. One of our team associate will get back to you.
         
          @if(@$pdf)    
            <br>
                 <a href="{{ $pdf }}">Download PDF Here</a><br>
                  <br>
          @endif
            <br>
             <br>
              <span class="pt-3">Thanks & Regards,</span>
              <br> <span> Asianhhm Team</span>
             </td>
            </tr>  
            <tr>
              <td align="left" valign="middle"  width="500">
                <img src="{{ asset('public/images/logo.png')}}" alt="Asian Hhm" height="40"/> 
              </td>
            </tr>                  
         <tr>
         <td align="left" valign="middle"  width="500">
          {{-- <img src="{{ asset('public/images/logo.png')}}" height="40"/>  --}}

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
