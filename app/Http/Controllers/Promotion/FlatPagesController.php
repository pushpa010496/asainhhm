<?php

namespace App\Http\Controllers\Promotion;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Mail;
use App\Models\Flatpage;

class FlatPagesController extends Controller
{
     public function elsevierCovidHealthcareHub(Request $request)
    { 
       $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "http://asianhhm.com/promotions/public/pdf/elsevier-covid-19-healthcare-hub.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->email_updates  = $request->email_updates ?? 'No';
            $form->quotation  = $request->quotation ?? 'No';
            $form->representative  = $request->representative ?? 'No';
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'job_title'=>$request->job_title,
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'country'=>$request->country,
                'email_updates' =>$request->email_updates ?? 'No',
                'quotation' =>$request->quotation ?? 'No',
                'representative' =>$request->representative ?? 'No',
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('srinivas.i@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('elsevierCovidHealthcareHub.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/elsevier-covid-19-healthcare-hub',compact('countries'));
    }
    
    public function elsevierClinicianOfTheFuture(Request $request){
         $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
         if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "http://asianhhm.com/promotions/public/pdf/elsevier-clinician-of-the-future.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
           
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'job_title'=>$request->job_title,
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                // $message->to('pushpalatha@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('elsevierClinicianOfTheFuture.success')->with(['thank_message'=>$request->input('thank_message')]); 
        }   
        return view('flatpages/elsevier-clinician-of-the-future',compact('countries'));
    }
   
    public function stiegelmeyerGmbh(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){
            $form = new Flatpage();
            $pdf = "http://asianhhm.com/promotions/public/pdf/stiegelmeyer-gmbh.pdf";
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;            
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
           
            $form->type = $request->type;
            $form->save();
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'job_title'=>$request->job_title,
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf'=> $pdf          
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                //$message->to('pushpalatha@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });

            return redirect()->route('stiegelmeyerGmbh.success')->with(['thank_message'=>$request->input('thank_message')]); 
        } 
        return view('flatpages/stiegelmeyer-gmbh');
    }

   
    public function healthcareErpTransformation(Request $request){
         dd('hi');
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
           $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            // $pdf =  "http://industry.asianhhm.com/promotions/u-assist-solution-brochure.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                // 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
          //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('healthcareErpTransformation.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
       return view('flatpages/healthcare-erp-transformation',compact('countries'));
    }

    public function intersystemsEbook(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            // $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
             $pdf =  "http://industry.asianhhm.com/promotions/intersystems-ebook.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                // 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
            $message->to('omplenquiry@ochre-media.com');
            //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('intersystemsEbook.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/intersystems-ebook',compact('countries'));
    }


    public function uniphoreUAssist(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
           
            $form = new Flatpage();            
            $form->firstname = $request->firstname;
            $form->lastname = $request->lastname;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->from = $request->from;
            $form->page = $request->page;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            
            //  $pdf =  "http://industry.asianhhm.com/promotions/u-assist-solution-brochure.pdf"; 
              if($request->from =='Get a Demo'){
                $pdf =  "http://industry.asianhhm.com/promotions/uniphore-vedio.mp4";
                      
                     }elseif($request->from =='Download Now whitepaper'){
                         
                     $pdf =  "http://industry.asianhhm.com/promotions/uniphore-whitepaper.pdf";
                 }else{
                 
                  $pdf =  "http://industry.asianhhm.com/promotions/uniphore-whitepaper.pdf";
                 }
            /*Send email admin*/  
            $data = [
                'name'=>$request->firstname,
                'first_name'=>$request->firstname,
                'last_name'=>$request->lastname,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                // 'page' => $page,
                 'page' =>$request->page,
                'from' =>$request->from,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'client_message1' =>$request->client_message1,
                 'pdf'=>$pdf,
                
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
         $message->to('omplenquiry@ochre-media.com');
          //  $message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg1', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            if($request->from =='Get a Demo'){
                
                return redirect()->route('uniphoreUAssist.success')->with(['demo_thank_message'=>$request->input('thank_message')]); 
            }
             return redirect()->route('uniphoreUAssist.success')->with(['thank_message'=>$request->input('thank_message')]); 
            // return view('flatpages/uniphore-u-assist-success');
        }
        return view('flatpages/uniphore-u-assist',compact('countries'));

    }
    
    public function uniphoreUAssistTest(){
        return view('flatpages/uniphore-u-assist-success');
    }


    public function eblastDeploymentAndLeadGeneration(Request $request){

        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
           $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->save();
            $pdf =  "http://industry.asianhhm.com/promotions/siemens-mri-scanner-magnetom.pdf"; 
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                // 'page' => $page,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
            //    'url'=>'https://pharmafocusasia.com'.''.$page,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                 'pdf'=>$pdf, 
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
       
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('eblastDeploymentAndLeadGeneration.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }

      

        return view('flatpages/eblast-deployment-and-lead-generation',compact('countries'));
    }



    public function ourBrandHub(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates = $request->email_updates;
            $form->quotation = $request->quotation;
            $form->representative = $request->representative;
            $form->save();
            
            if($request->email_updates =='HIMSS–eBook'){
                $ebook = 'http://industry.asianhhm.com/promotions/our-brand-hub-ebook.pdf';

            }
            if($request->quotation =='CIO–Whitepaper'){
                $whitepaper = 'http://industry.asianhhm.com/promotions/our-brand-hub-whitepaper.pdf';

            }
            if($request->representative =='IDC–Brochure'){
                $brochure = 'http://industry.asianhhm.com/promotions/our-brand-hub-brochure.pdf';

            }
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'email_updates' =>$request->email_updates ?? 'No' ,
                'quotation' =>$request->quotation ?? 'No' ,
                'representative' =>$request->representative ?? 'No',
                'ebook' =>$ebook ?? '',
               'whitepaper' =>$whitepaper ?? '',
                'brochure' =>$brochure ?? '',
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
           //$message->to('pushpalatha@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('ourBrandHub.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }

        return view('flatpages/our-brand-hub',compact('countries')); 
    }

    
    public function medlabasiaAsiahealth2023(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates = $request->email_updates;
            //$form->quotation = $request->quotation;
           // $form->representative = $request->representative;
            $form->save();

             /*Send email admin*/  
             $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'email_updates' =>$request->email_updates ?? 'No' ,
               // 'quotation' =>$request->quotation ?? 'No' ,
               // 'representative' =>$request->representative ?? 'No',
              //  'ebook' =>$ebook ?? '',
               // 'whitepaper' =>$whitepaper ?? '',
               // 'brochure' =>$brochure ?? '',
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
          // $message->to('srunik@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.webinars.medlab-asia-health-2023', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('medlabasiaAsiahealth2023.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/medlab-asia-&-asia-health-2023',compact('countries')); 

    }
    public function siemensworkforceexcellencewhitepaper(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
            $form->email_updates = $request->email_updates;
            //$form->quotation = $request->quotation;
           // $form->representative = $request->representative;
            $form->save();
            $pdf1 =  "http://industry.asianhhm.com/promotions/siemens-workforce-excellence-whitepaper.pdf"; 

             /*Send email admin*/  
             $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                'email_updates' =>$request->email_updates ?? 'No' ,
                'pdf1'=>$pdf1, 
               // 'quotation' =>$request->quotation ?? 'No' ,
               // 'representative' =>$request->representative ?? 'No',
              //  'ebook' =>$ebook ?? '',
               // 'whitepaper' =>$whitepaper ?? '',
               // 'brochure' =>$brochure ?? '',
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
           //$message->to('srunik@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('siemensworkforceexcellencewhitepaper.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/siemens-workforce-excellence-whitepaper',compact('countries')); 
    }



    public function siemensPersonalizedHealthcareTrendsWhitepaper(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
           // $form->email_updates = $request->email_updates;
            //$form->quotation = $request->quotation;
           // $form->representative = $request->representative;
            $form->save();
            $pdf1 =  "http://industry.asianhhm.com/promotions/siemens-personalized-healthcare-trends-whitepaper.pdf"; 

             /*Send email admin*/  
             $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
                //'email_updates' =>$request->email_updates ?? 'No' ,
                'pdf1'=>$pdf1, 
               // 'quotation' =>$request->quotation ?? 'No' ,
               // 'representative' =>$request->representative ?? 'No',
              //  'ebook' =>$ebook ?? '',
               // 'whitepaper' =>$whitepaper ?? '',
               // 'brochure' =>$brochure ?? '',
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin-new', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
          // $message->to('srunik@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('siemensPersonalizedHealthcareTrendsWhitepaper.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
        return view('flatpages/siemens-personalized-healthcare-trends-whitepaper',compact('countries'));
    }

    public function troostwijkznastuivenberg(Request $request){
        $countries = DB::table('countries')->select(DB::raw("title as country_name "))->get();
        if(\Request::isMethod('post')){                        
             
            $form = new Flatpage();            
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->title = $request->job_title;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->type = $request->type;
           // $form->email_updates = $request->email_updates;
            //$form->quotation = $request->quotation;
           // $form->representative = $request->representative;
            $form->save();
            //$pdf1 =  "http://industry.asianhhm.com/promotions/siemens-personalized-healthcare-trends-whitepaper.pdf"; 

             /*Send email admin*/  
             $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email, 
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'type' => $request->type,
                'phone'=>$request->phone, 
                'country'=>$request->country,
                 'job_title'=>$request->job_title,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,
               
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
          $message->to('omplenquiry@ochre-media.com');
          // $message->to('srunik@ochre-media.com');
                   $message->subject($data['subject_admin'].' | '.$data['email'].' | Client Retention Projects.');
            });
            /*Client Mail*/                    
            Mail::send('emails.flatpages.client_full_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
            return redirect()->route('troostwijkznastuivenberg.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
        }
       
        return view('flatpages/troostwijk-zna-stuivenberg',compact('countries'));
    }

    public function equinixHealthcareSolutionBriefs(Request $request)
    {
        $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
    
        if ($request->isMethod('post')) {
           // $interests = $request->intrested;
         $interests = $request->intrested ?? [];
                    
                    $updates = implode(",", $interests);
            $info='';
    
            $pdf1 = $pdf2 = ''; // Initialize variables to avoid undefined variable warnings
    
            if (!empty($interests)) {
                foreach ($interests as $info) {
                    if ($info == 'medical-imaging-solutions-brief') {
                        $pdf1 = "https://industry.asianhhm.com/promotions/pdf/medical-imaging-solutions-brief.pdf";
                    }
                    if ($info == 'genome-sequencing-solutions-brief') {
                        $pdf2 = "https://industry.asianhhm.com/promotions/pdf/genome-sequencing-solutions-brief.pdf";
                    }
                }
            }
            
            $form = new Flatpage();
            $form->firstname = $request->first_name;
            $form->lastname = $request->last_name;
            $form->email = $request->email;
            $form->phone = $request->phone;
            $form->country = $request->country;
            $form->company = $request->company;
            $form->title = $request->job_title;
            $form->intrested = $updates;
           
            $form->type = $request->type;
            $form->save();
    
     
            /*Send email admin*/  
            $data = [
                'name'=>$request->first_name,
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,        
                'phone'=>$request->phone,
                'company'=>$request->company,
                'site_name'=>'asianhhm',
                'job_title'=>$request->job_title,
                'zipcode'=>$request->zip_code,
                'type' => $request->type,
                'intrested'=>implode(",",$request->intrested),
                'country'=>$request->country,
                'subject_client' =>$request->client_subject,
                'subject_admin' =>$request->admin_subject,
                'client_message' =>$request->client_message,  
                'pdf1'=>$pdf1??'',
                'pdf2'=>$pdf2??'',        
            ];
            /*Admin mail*/
            Mail::send('emails.flatpages.admin', $data, function($message) use ($data) {
                 $message->to('omplenquiry@ochre-media.com');
                //$message->to('pushpalatha@ochre-media.com');
                $message->subject($data['subject_admin'].' | '.$data['email']);
            });
            /*Client Mail*/
            Mail::send('emails.flatpages.equinix_msg', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });
          
            
            session()->forget(['pdf_type', 'pdf_type1','pdf_type2','pdf_type3']);

            if ($interests[0] == "medical-imaging-solutions-brief") {
                session(['pdf_type' => 'medical-imaging']);
            } elseif ($interests[0] == "genome-sequencing-solutions-brief") {
                session(['pdf_type' => 'genome-sequencing']);
            } 
            
            if(($interests[1] ?? null) == "genome-sequencing-solutions-brief") {
                session(['pdf_type1' => 'genome-sequencing']);
            }
         
            if(($interests[1] ?? null) == "medical-imaging-solutions-brief") {
                session(['pdf_type3' => 'medical-imaging']);
            }
            
              return redirect()->route('equinixHealthcareSolutionBriefs.success')->with(['status'=>'true'])->with(['thank_message'=>$request->input('thank_message')]); 
              
            }
        return view('flatpages/equinix-healthcare-solution-briefs',compact('countries'));
    }

    public function equinixhealthcareai(){
        $countries = DB::table('countries')->select(DB::raw("title as country_name"))->get();
        return view('flatpages/equinix-healthcare-ai',compact('countries'));
    }

}





