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

              <br><br>


              {!!$client_message!!}

              <br><br>

         


          @if(@$pdf1 != '')

          <tr>



  <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">Please find the pdf link to download the Medical Imaging Solutions Brief--</td><br>

  <td width="20" align="left" valign="middle"><strong></strong></td>



</tr>
<br>
<tr>
<td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><a href="{{ @$pdf1 }}">Download Link</a></td>
</tr>
@endif

        
@if(@$pdf2 != '')

<tr>


  <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">"Please find the pdf link to download the Genome Sequencing Solutions Brief--</td><br>

  <td width="20" align="left" valign="middle"><strong></strong></td><br>



</tr>
<br>
<tr>
<td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;" ><a href="{{ @$pdf2 }}">Download Link</a></td>
</tr>

@endif
          

          <br>

              <span class="pt-3">Thanks & Regards,</span>

             

            </td>

            </tr>

          

         

         <tr>

        <td align="left" valign="middle"  width="500">

          <img src="https://industry.asianhhm.com/images/logo.png" alt="{{$site_name}}" height="40"/> 

           

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

