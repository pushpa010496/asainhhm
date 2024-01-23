<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="800" border="0" align="left" cellpadding="10">
  <tr>
    <td align="left" valign="middle" style="padding-left:20px;" width="500">
      <img src="{{ asset('public/images/logo.png')}}" alt="Asian Hhm" height="40"/> 
       
    </td>
  </tr>
  
  <tr>
    <td>
      <table width="800" border="0">
  <tr>
    <td>
      <table width="800" border="0" cellpadding="5">
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">
              <span class="pb-3">Hi <strong>{{$name}}</strong>,</span> <br>
               <br>

              Thank you for registering for {{$client_title}}. Kindly follow the below link to Download Brochure PDF.
              <br>
              <br>
              <a href="{{ $pdf }}">Brochure PDF</a><br>
              <br>
              <span class="pt-3">Regards,</span><br>
              AsianHHM Team,</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
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
