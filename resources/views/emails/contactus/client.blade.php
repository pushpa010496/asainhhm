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
                <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">Hello  &nbsp;{{ucfirst($name)}},</td>
              </tr>
             
              <tr>
                <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">
                Thank you for contacting us.</td>
               </tr>
               <tr>
                 <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">
                 Your enquiry was successfully submitted. The concerned person (subject matter expert) will get in touch with you in the next 24 hours.</td>
              </tr>
              
             
            
            <tr>
              <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;">Regards,</td>
            </tr>
            <tr>
              <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px;"><a href="<?php echo url('/');?>" title=" Team {{trans('messages.sitename')}}" target="_blank" style="color:#333333;">  {{trans('messages.sitename')}} Team</td>
              </tr>
            </table>

          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td align="left" valign="middle" style="padding-left:30px;">
      <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.sitename')}}" width="150"/>    </td>
    </tr>
    
        </table>  
        



      </body>
      </html>
