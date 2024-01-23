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
       <img src="https://industry.asianhhm.com/images/logo.png" alt="AsianHHM" height="40"/>  -
        
    </td>
  </tr>
  
  {{-- <tr>
    <td style="font-family:Arial, Helvetica, sans-serif;font-size:16px;padding-left:30px;">RPA & AI Exchange has a new invitation request.</td>
  </tr>
   --}}
  <tr>
    <td>
      <table width="500" border="0">
  <tr>
    <td>
      <table width="500" border="0" cellpadding="5">

               @if(@$q1 != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What is the heart of the weighing balance?</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$q1}}</td>
            </tr>
            @endif

              @if(@$q2 != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> What kind of samples could affect the weighing results?</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$q2}}</td>
            </tr>
            @endif

              @if(@$q3 != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which conditions are necessary for measuring the mass in addition to the digital weighing balance?</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$q3}}</td>
            </tr>
            @endif
         
          @if(@$q4 != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which regulation is stringent in weighing process?</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$q4}}</td>
            </tr>
            @endif

             @if(@$q5 != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which is the correct explanation for mass calibration?</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$q5}}</td>
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
          @if($first_name != '')
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Firstname</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{ ucfirst($first_name)}}</td>
          </tr>
          @endif

          @if($last_name != '')
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Lastname</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{ ucfirst($last_name)}}</td>
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
          @if(@$job_title != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job Title</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$job_title}}</td>
            </tr>
            @endif
              @if(@$profession != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Profession</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$profession}}</td>
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
             @if(@$description != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$description}}</td>
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
            
            
             @if(@$level != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Level</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$level}}</td>
            </tr>
            @endif

          

             @if(@$dob != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Date of birth</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$dob}}</td>
            </tr>
            @endif

             @if(@$current_employer != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Current Employer</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$current_employer}}</td>
            </tr>
            @endif
             @if(@$passport_country != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Passport Country</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$passport_country}}</td>
            </tr>
            @endif
             @if(@$educational_institution != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Educational Institution</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$educational_institution}}</td>
            </tr>
            @endif
             @if(@$highest_degree != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">highest Degree</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$highest_degree}}</td>
            </tr>
            @endif
             @if(@$education_country != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Education Country</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$education_country}}</td>
            </tr>
            @endif
              @if(@$graduation_year != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Graduation Year</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$graduation_year}}</td>
            </tr>
            @endif
              @if(@$applied != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Applied</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$applied}}</td>
            </tr>
            @endif

            @if(@$client_type != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Register for</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$client_type}}</td>
            </tr>
            @endif

             @if(@$terms != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Terms</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$terms}}</td>
            </tr>
            @endif

              @if(@$industry != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$industry}}</td>
            </tr>
            @endif

            @if(@$product != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Product </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$product}}</td>
            </tr>
            @endif

              @if(@$promotion_slug == "zebra")
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Promotion From </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$promotion_slug}}</td>
            </tr>
            @endif


        @if(@$state != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">State </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$state}}</td>
            </tr>
            @endif


            @if(@$pincode != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Pincode </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$pincode}}</td>
            </tr>
            @endif


          @if(@$intrested != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Request Information </td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$intrested}}</td>
            </tr>
            @endif

              @if(@$exams_appeared != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Exams Appeared</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$exams_appeared}}</td>
            </tr>
            @endif
            
            @if(@$email_updates != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">HIMSS – eBook</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$email_updates}}</td>
            </tr>
            @endif

            @if(@$rsi != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">RIS brochure</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$rsi}}</td>
            </tr>
            @endif

            @if(@$management != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Workflow management</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$management}}</td>
            </tr>
            @endif

             @if(@$portal != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Referrer portal brochure</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$portal}}</td>
            </tr>
            @endif
        
          

             @if(@$quotation != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">CIO – Whitepaper</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$quotation}}</td>
            </tr>
            @endif
            
            @if(@$representative != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">IDC – Brochure</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$representative}}</td>
            </tr>
            @endif

                @if(@$declaration != '')
            <tr>
              <td width="20">&nbsp;</td>
              <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>
              <td width="30" align="left" valign="middle"><strong>:</strong></td>
              <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$declaration}}</td>
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
