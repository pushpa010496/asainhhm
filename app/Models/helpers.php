<?php

function customRequestCaptcha(){
    return new \ReCaptcha\RequestMethod\Post();
}
function bitrixLeadApi($data)
{
	$company = $data['company'] ?? '';
	$first_name = $data['first_name'] ?? '';
	$last_name = $data['last_name'] ?? '';
	$email = $data['email'] ?? '';
	$phone = $data['phone'] ?? '';
	$job_title = $data['job_title'] ?? '';
	$description = $data['description'] ?? '';
	$country = $data['country'] ?? '';
	try{
         $curl = curl_init();
         $url ="https://ochre-media.bitrix24.in/rest/1/io7ypfbnh8qftxw1/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=Website&FIELDS[ADDRESS_COUNTRY]=".$country."";
         curl_setopt($curl, CURLOPT_URL, $url);
         curl_setopt ($curl, CURLOPT_POST, 0);
         curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 0);
         curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
         $result = curl_exec ($curl);
      } catch (RequestException $e) {
         dd($e->getMessage());
         throw new Exception($e->getMessage());
      }  
      return $result;
}