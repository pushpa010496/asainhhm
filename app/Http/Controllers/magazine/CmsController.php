<?php
namespace App\Http\Controllers\magazine;


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use App\Models\Form;
use Illuminate\Http\Request;
use Auth;
use App\Models\Banner;
use App\Models\Authorguideline;
use App\Models\AdvaisoryBoard;
use App\Models\Testimonial;
use App\Models\CmsPage;
use App\Models\Download;
use App\Models\Ebook;
use App\Http\Requests\CommanRequest;
use \Session;
use \DB;
use \Mail;
use App\Models\SeoPage;
use App\Models\Page;
// use Request;
use SEO;
use SEOMeta;
use OpenGraph;
use Twitter;
use App\Models\Country;
use App\Models\Subscriber;

class CmsController extends HomeController
{


  public function guidelines()
  { 

    $guideline = Authorguideline::where('active_flag', 1)->orderBy('id', 'desc')->select('description')->get();
    // $time = \Carbon\Carbon::now()->format('Y-m-d');     
    // $banners = Banner::where('active_flag','=', 1)->where('to_date', '>' , $time)->where('from_date', '<=' , $time)->get();
     $banners = $this->banners;
    $this->seoTools(request()->segment(1));  
    return view('magazine.authorguidelines.index' ,compact('guideline','banners'));
  }  

  public function guidelineDownload()
  { 
    
    $banners = $this->banners;
    return view('magazine.authorguidelines.download' ,compact('banners'));

  }  

  public function advisoryBoard()
  {       
   $advisoryboard = AdvaisoryBoard::where('active_flag', 1)->orderBy('id', 'desc')->select('description','title_tag','title','image','home_description')->get()->take(10);
   $banners = $this->banners;
   $data_count  = AdvaisoryBoard::where('active_flag', 1)->count();
   $this->seoTools(request()->segment(1)); 
   return view('magazine.advisoryboard.index' ,compact('advisoryboard','banners','data_count'));
 }  

public function advisoryboardMore($offset){
    
    $data = AdvaisoryBoard::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('description','title_tag','title','image','home_description')->get();
    return response(view('magazine.advisoryboard.loadmore', compact('data'))->render());

  }


 public function testimonials()
 {       

  $testimonials = Testimonial::where('active_flag', 1)->orderBy('id', 'desc')->select('description','name','company','designation','image')->get()->take(10);
  $banners = $this->banners;  
 $data_count  = Testimonial::where('active_flag', 1)->count();
  $this->seoTools(request()->segment(1)); 
  return view('magazine.testimonials.index' ,compact('testimonials','banners','data_count'));
}  

public function testimonialsMore($offset){
    
    $data = Testimonial::where('active_flag',1)->orderBy('id','desc') ->offset($offset)->limit(10)->select('description','name','company','designation')->get();
    return response(view('magazine.testimonials.loadmore', compact('data'))->render());

  }


public function forthcomingIssue()
{     

   $cmspage = Cmspage::where('url', 'forthcoming-issue')->where('active_flag',1)->select('description')->first();
  $banners = $this->banners;  
   $this->seoTools(request()->segment(1)); 
  return view('magazine.fourthcoming-issue' ,compact('cmspage','banners'));
}  

public function termsConditions()
{     

  $cmspage = Cmspage::where('url', 'terms-conditions')->where('active_flag',1)->first();
  $banners = $this->banners;  
  // $slug = 'terms-conditions';
 $this->seoTools(request()->segment(1)); 
  return view('cms.terms-conditions' ,compact('cmspage','banners'));
}  
public function contactUs(CommanRequest $request)
{     

  $this->seoTools('contactus');   
  $banners = $this->banners;  
  if(\Request::isMethod('post')){
       if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){      
 $form = new Download();
 $form->fullname = $request->firstname.' '.$request->lastname;
 $form->firstname = $request->firstname;
 $form->lastname = $request->lastname;
 $form->email = $request->email;
 $form->telephone = $request->phone;
 $form->company = $request->company;  
 $form->designation = $request->job_title;         
 $form->description = $request->description;
 //$form->whom = $request->whom;  
 $form->type = 'contactus';
 $form->save();

 /*Send email admin*/  
 $data = [
  'name'=> $request->firstname.' '.$request->lastname,
  'email'=> $request->email,
  'company'=> $request->company,
  'phone'=>$request->phone, 
  'job_title' =>$request->job_title,             
  'description' =>$request->description,   
  //'whom' => $request->whom,           
  'type' => 'contactus',            
  'subject_client' => trans('messages.contactus_client'),
  'subject_admin' => trans('messages.contactus_admin').$request->email." Subscribed for Asianhhm",
];
/*Admin mail*/
Mail::send('emails.admin', $data, function($message) use ($data) {
 $message->to(trans('messages.advert-email'));
  //$message->to('pushpalatha@ochre-media.com');
  $message->subject($data['subject_admin']);
});
/*Client Mail*/
Mail::send('emails.contactus.client', $data, function($message) use ($data) {
  $message->to($data['email']);
  $message->subject($data['subject_client']);
});

  return redirect()->route('contactUs.success')->with(['status'=>'true']);
}
}else{      
 
  return view('cms.contactus' ,compact('banners'));
}
} 

public function aboutUs()
{     

   $cmspage = Cmspage::where('url', 'aboutus')->where('active_flag',1)->first();
  $banners = $this->banners;  
  $this->seoTools(request()->segment(1)); 
  return view('cms.aboutus' ,compact('cmspage','banners'));
} 

  public function printAds( CommanRequest $request )
  {     
   $this->seoTools('print');
      if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){
        if(\Request::isMethod('post')){             
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'print-ads';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'Print Ads',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.printads_client'),
            'subject_admin' => trans('messages.printads_admin'),
          ];
    //  $this->bitrixLeadApi($data);

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.printads.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });


          return view('cms.printadvertise.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);

        }else{            
            return view('cms.printadvertise.index');
        }     

}}
        //Advertise paeg

      public function advertise(CommanRequest $request )
      {     
        $this->seoTools('advertise');  
          $banners = $this->banners; 
        if(\Request::isMethod('post')){
       //   dd($request);
         
            if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){           
         $form = new Download();
         $form->fullname = $request->firstname .' '.$request->lastname;
         $form->firstname = $request->firstname;
         $form->lastname = $request->lastname;
         $form->email = $request->email;
         $form->telephone = $request->mobile;
         $form->company = $request->company;        
         $form->country_name = $request->country;      
        // $form->description = $request->description;
         $form->designation = $request->designation;   
         $form->service = implode(', ', $request->service); 
     
         $form->type = 'Advertise';
         $form->save();
         /*Send email admin*/  
         $data = [
          'name'=> $request->firstname .' '.$request->lastname,
          'email'=> $request->email,
          'company'=> $request->company,
          'phone'=>$request->mobile,            
          'description' =>$request->description,  
          'job_title' =>$request->designation, 
          'country' =>$request->country, 
          'service' => implode(', ', $request->service),       
          'type' => 'Advertise',            
          'subject_client' => trans('messages.advertise_client'),
          'subject_admin' => $request->email.trans('messages.advertise_admin'),
        ];
        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
       $message->to(trans('messages.advertise-email'));
       $message->cc('nag@ochre-media.com');
     //   $message->to('pushpalatha@ochre-media.com');
          $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
        Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
          $message->to($data['email']);
          $message->subject($data['subject_client']);
        });
          return redirect()->route('magazinemediapack')->with(['status'=>'true']);
          }
      }else{      
        $issues = Ebook::where('active_flag',1)->orderBy('id','desc')->get()->take(5);
        $countries = DB::table('countries')->get();
        return view('forms.advertise.index',compact('banners','issues','countries'));
      }               

    }  

public function advertiseNew(){
  $banners = $this->banners; 
  return view('forms.advertise.index-new',compact('banners'));

}


    public function mediapackdwnlink(CommanRequest $request)
    {       
        
      if(session('status') == true){
        $banners = $this->banners; 
          echo "<script>setTimeout(function(){ window.location.href = https://industry.asianhhm.com/mediapack/pdf/asian-hospital-healthcare-management-mediapack.pdf'; }, 3000);</script>";
        return view('magazine.mediapack.success',compact('banners'));
      }else{
        return redirect('/');
      }

    }

  public function register(){
     //  $this->seoTools(request()->segment(1)); 
      return view('forms.register');
    }

  public function bannerAdvertisement( CommanRequest $request){
     $this->seoTools('print');
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
      
        if(\Request::isMethod('post')){             
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'banner-advertising';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'banner-advertising',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.bannerads_client'),
            'subject_admin' => trans('messages.bannerads_admin'),
          ];
     //  $this->bitrixLeadApi($data);

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.banner-ads.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
          return view('cms.banner-advertisement.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);
      }
       return view('cms.banner-advertisement.index');
     }
   

     public function emailMarketing( CommanRequest $request){
      dd(11);
        $this->seoTools('print');   
        if(\Request::isMethod('post')){   
          $captcha = $request->input('g-recaptcha-response');
          if (!$this->checkGoogleCaptcha($request, $captcha)) {
              return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
          }          
           $form = new Download();
           $form->fullname = $request->fullname;
           $form->email = $request->email;
           $form->telephone = $request->telephone;
           $form->company = $request->company;           
           $form->description = $request->description;
           $form->type = 'emailmarketing';
           $form->save();

           /*Send email admin*/  
           $data = [
            'name'=> $request->fullname,
            'first_name'=>$request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,            
            'description' =>$request->description,            
            'type' => 'emailmarketing',   
            'lead' =>$request->lead,        
            'subject_client' => trans('messages.emailMarketing_client'),
            'subject_admin' => trans('messages.emailMarketing_admin'),
          ];
      //  $this->bitrixLeadApi($data);

        /*Admin mail*/
        Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));
            
        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
        });
        /*Client Mail*/
         Mail::send('emails.emailmarketing.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
        });
          return view('cms.emailmarketing.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);
        }
       return view('cms.emailmarketing.index');
     }
    

    public function newslettermarketing( CommanRequest $request){
      $this->seoTools('print'); 
          if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){
      if(\Request::isMethod('post')){             
       $form = new Download();
       $form->fullname = $request->fullname;
       $form->email = $request->email;
       $form->telephone = $request->telephone;
       $form->company = $request->company;           
       $form->description = $request->description;
       $form->type = 'enewslettermarketing';
       $form->save();

       /*Send email admin*/  
       $data = [
        'name'=> $request->fullname,
        'first_name'=>$request->fullname,
        'email'=> $request->email,
        'company'=> $request->company,
        'phone'=>$request->telephone,            
        'description' =>$request->description,            
        'type' => 'E-Newsletter Marketing',   
        'lead' =>$request->lead,        
        'subject_client' => trans('messages.enewslettermarketing_client'),
        'subject_admin' => trans('messages.enewslettermarketing_admin'),
      ];
   //  $this->bitrixLeadApi($data);

      /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));

        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
      });
      /*Client Mail*/
      Mail::send('emails.newslettermarketing.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
      });
      return view('cms.newslettermarketing.success')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);
    }else{
     return view('cms.newslettermarketing.index');
   }
 }else
 {}}

  public function newslettermarketingDownloadForm( CommanRequest $request){
      $this->seoTools('print'); 
          if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){
      if(\Request::isMethod('post')){             
       $form = new Download();
       $form->fullname = $request->fullname;
       $form->email = $request->email;
       $form->telephone = $request->telephone;
       $form->company = $request->company;           
       $form->description = $request->description;
       $form->type = 'enewslettermarketing';
       $form->save();

       /*Send email admin*/  
       $data = [
        'name'=> $request->fullname,
        'first_name'=>$request->fullname,
        'email'=> $request->email,
        'company'=> $request->company,
        'phone'=>$request->telephone,            
        'description' =>$request->description,            
        'type' => 'E-Newsletter Marketing',   
        'lead' =>$request->lead,        
        'subject_client' => trans('messages.mediapacks_client'),
        'subject_admin' => trans('messages.mediapacks_admin'),
      ];
//  $this->bitrixLeadApi($data);

      /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.adminemail'));

        // $message->to('nagaraj@ochre-media.com');
        $message->subject($data['subject_admin']);
      });
      /*Client Mail*/
      Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        $message->to($data['email']);
        $message->subject($data['subject_client']);
      });
      return view('cms.newslettermarketing.success2')->with('status','true');
           // return redirect()->back()->with(['status'=>'true']);
    }else{
     return view('cms.newslettermarketing.index');
   }
 }else
 {}}



   public function magazineSubscription( CommanRequest $request )
   {        
    $this->seoTools('magazine-subscription');  
    $banners = $this->banners; 
    $countries =  Country::select('title')->get();
       if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
            } else {
                 $captcha = false;
            }
            if($this->checkGoogleCaptcha($request,$captcha)==true){
    if(\Request::isMethod('post')){     
   
     request()->validate([
      'name' => 'required',
      'email' => 'required|email',      
      'designation'=>'required',
      'industry'=>'required',
      'country'=>'required',
      'phone' =>'required'
    ]);

     $form = new Subscriber();
     $form->fullname = $request->name;
     $form->designation = $request->designation;
     $form->industry = $request->industry;           
     $form->telephone = $request->phone;
     $form->country_name = $request->country;
     $form->email = $request->email;
     $form->address = $request->address;
     $form->type =  $request->type .' - '.$request->book_type;
     $form->save();

     /*Send email admin*/  
     $data = [
      'name'=> $request->name,
      'first_name'=>$request->name,
      'email'=> $request->email,
      'company'=> $request->company,
      'phone'=>$request->phone,            
      'job_title' =>$request->designation,            
      'industry' => $request->industry, 
      'country' => $request->country, 
      'type' => $request->type .' - '.$request->book_type,   
      'address'=> $request->address,
      'opt' =>   $request->opt,
      'lead' => $request->email .' '.$request->lead,
      'subject_client' => $request->client_subject,
      'subject_admin' => $request->email.' |  successfully subscribed for Magazine',
    ];
//  $this->bitrixLeadApi($data);
    /*Admin mail*/
    /*Mail::send('emails.admin', $data, function($message) use ($data) {
      $message->to(trans('messages.subscribe-email'));
      $message->subject($data['subject_admin']);
    });
    Mail::send('emails.ebook.magazine_subscribe', $data, function($message) use ($data) {
      $message->to($data['email']);
      $message->subject($data['subject_client']);
    });*/


    return redirect()->route('magazine.subscription.success')->with(['thank_message'=>$request->input('thank_message')]); 
        

  }else{      
    $issues = Ebook::where('active_flag',1)->orderBy('id','desc')->get()->take(5);
    return view('forms.magn-subscribe.index',compact('banners','issues','countries'));
  }               

  } }


   public function seoTools($page){
        $page = Page::where('title',$page)->first();
        if ($page) {
        $data = SeoPage::where('page_id',$page->id)->first();        
        SEOMeta::setTitle($data->meta_title);
        SEOMeta::setDescription($data->meta_description);
        SEOMeta::addMeta('Project:published_time', $data->created_at->toW3CString(), 'property');
        SEOMeta::addKeyword($data->meta_keywords);
        OpenGraph::setDescription($data->og_description);
        OpenGraph::setTitle($data->og_title);
        OpenGraph::setUrl(url()->current());
        SEOMeta::setCanonical(url()->current());
        OpenGraph::addProperty('keyword', $data->og_keywords);
        OpenGraph::addProperty('type', 'Project');
        OpenGraph::addProperty('locale', 'en_GB');
            //OpenGraph::addProperty('locale:alternate', ['pt-pt', 'en-us']);
        OpenGraph::addImage([$data->og_image, 'size' => 300]);
        }
    }
    
    public function services( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 

      return view('cms.healthcare-marketing.services.services',compact('countries','banners'));
    }   

     public function displayAdvertisingsolution(Request $request)
    {  

      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
        
            
      if(\Request::isMethod('post') ){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }       
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  $request->type ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $request->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
     Mail::send('emails.admin', $data, function($message) use ($data) {
      //   $message->to(trans('messages.subscribe-email'));
      $message->to('advertise@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('displayAdvertisingsolution.success')->with(['status'=>'true'])->with(['thank_message' => $request->thank_message]);
          //return "hi" ;
        }  
      return view('cms.healthcare-marketing.services.display-advertising-solutions',compact('countries','banners'));
    
    }
      public function displayAdvertising( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('display-advertising');
         
        
      if(\Request::isMethod('post')){ 
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }      
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'display-banner-advertising' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to('advertise@ochre-media.com');
        // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('displayAdvertising.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]); 
          //return "hi" ;
        }  

      return view('cms.healthcare-marketing.services.display-advertising',compact('countries','banners'));
    }


    public function newsletterSponsorship( CommanRequest $request )
    {  
     
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('newsletter-sponsership'); 
      
           
      if(\Request::isMethod('post')){  
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }   
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type = 'newsletter-sponsorship';
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to('advertise@ochre-media.com');
        // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('newsletterSponsorship.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]); 
          //return "hi" ;
        } 
      return view('cms.healthcare-marketing.services.newsletter-sponsorship',compact('countries','banners'));
    }
   
    public function targetedDisplayAdvertising( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('targetted-display-advertising'); 
        
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }      
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'geo-targeted-display' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
        //$message->to(trans('messages.subscribe-email'));
        //$message->to('pushpalatha@ochre-media.com');
        $message->to('advertise@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('targetedDisplayAdvertising.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]); 
          //return "hi" ;
        }  
      return view('cms.healthcare-marketing.services.targeted-display-advertising',compact('countries','banners'));
    }



    public function marketingStrategySolutions( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('marketing-strategy-solutions'); 
      return view('cms.healthcare-marketing.services.marketing-strategy-solutions',compact('countries','banners'));
    }

    public function sponsoredWebinarSeries( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('sponsered-webinar-series');
         
      if(\Request::isMethod('post')){ 
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }     
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'sponsored-webinar-series' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
       Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to('advertise@ochre-media.com');
       //  $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('sponsoredWebinarSeries.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]); 
          //return "hi" ;
        }  
      return view('cms.healthcare-marketing.services.sponsored-webinar-series',compact('countries','banners'));
    }

    public function surveysAssessments( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('surveys-assessments');
         
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
          $form = new Form();
          $form->firstname = $request->firstname;
          $form->lastname = $request->lastname;
          $form->job_title = $request->job_title;
          $form->services = $request->services;    
          $form->phone = $request->phone;
          $form->country = $request->country;
          $form->company = $request->company;
          $form->email = $request->email;
          $form->address = $request->address;
          $form->type =  'b2b-surveys-assessments' ;
          $form->save();

            /*Send email admin*/  
            $data = [
            'name'=> $request->firstname .' '.$request->lastname,
            //  'lastname'=>$request->lastname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->phone,            
            'job_title' =>$request->job_title,            
            'industry' => $request->services, 
            'country' => $request->country, 
            'type' => $form->type,   
            'address'=> $request->address,
            // 'opt' =>   $request->opt,
            // 'lead' => $request->email .' '.$request->lead,
            'client_message' => $request->client_message,
            'subject_client' => $request->client_subject,
            'subject_admin' => $request->email.' |  successfully registered for free consultation',
          ];
   //  $this->bitrixLeadApi($data);
 /*Admin mail*/
 
        Mail::send('emails.admin', $data, function($message) use ($data) {
          $message->to('advertise@ochre-media.com');
          //$message->to('pushpalatha@ochre-media.com');
          $message->subject($data['subject_admin']);
        });
        Mail::send('emails.cms.client', $data, function($message) use ($data) {
          $message->to($data['email']);
          $message->subject($data['subject_client']);
        });


      return redirect()->route('surveysAssessments.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]);
       } 
      return view('cms.healthcare-marketing.services.surveys-assessments',compact('countries','banners'));
}

    public function contentSyndication( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('content-syndication');
      return view('cms.healthcare-marketing.services.content-syndication',compact('countries','banners'));
    }

    public function accountBasedmarketing( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('account-based-marketing');
      
            
      if(\Request::isMethod('post')){   
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }  
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'account-based-marketing' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to('advertise@ochre-media.com');
     //  $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('accountBasedmarketing.success')->with(['status'=>'true'])->with(['thank_message' => $request->thank_message]); 
          //return "hi" ;
        }  
      return view('cms.healthcare-marketing.services.account-based-marketing',compact('countries','banners'));
    }
    public function marketing( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('email-marketing');
      $captcha = $request->input('g-recaptcha-response');
      if (!$this->checkGoogleCaptcha($request, $captcha)) {
          return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
      }
      if(\Request::isMethod('post')){
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  $request->type ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $request->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to(trans('messages.subscribe-email'));
     // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('marketing.success')->with(['status'=>'true']); 
          //return "hi" ;

      }
      return view('cms.healthcare-marketing.services.email-marketing',compact('countries','banners'));
    }

    public function webinars( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('services-weinars');
      

      if(\Request::isMethod('post')){   
        $captcha = $request->input('g-recaptcha-response');
    
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }  
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'webinars' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' =>  $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
     Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to('advertise@ochre-media.com');
       // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('webinars.success')->with(['status'=>'true'])->with(['thank_message'=> $request->thank_message]); 
          //return "hi" ;
        }  

      return view('cms.healthcare-marketing.services.webinars',compact('countries','banners'));
    }
    
    public function printmediaSolutions( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('print-media-solutions');  
      return view('cms.healthcare-marketing.services.printmedia-solutions',compact('countries','banners'));
    }
    public function printadvertising( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('print-advertising'); 
        
           
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'b2b-print-advertising' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' =>  $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
         $message->to('advertise@ochre-media.com');
       // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('printadvertising.success')->with(['status'=>'true'])->with(['thank_message'=> $request->thank_message]); 
      }
      return view('cms.healthcare-marketing.services.print-advertising',compact('countries','banners'));
  }
    public function advertorial( CommanRequest $request )
    {  
      $countries =  Country::select('title')->get();
      $banners = $this->banners; 
      $this->seoTools('advertorial');  

  if(\Request::isMethod('post')){
    $captcha = $request->input('g-recaptcha-response');
    if (!$this->checkGoogleCaptcha($request, $captcha)) {
        return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
    }   
    $form = new Form();
    $form->firstname = $request->firstname;
    $form->lastname = $request->lastname;
    $form->job_title = $request->job_title;
    $form->services = $request->services;    
    $form->phone = $request->phone;
    $form->country = $request->country;
    $form->company = $request->company;
    $form->email = $request->email;
    $form->address = $request->address;
    $form->type =  'b2b-print-advertorial';
  
    $form->save();

    /*Send email admin*/  
    $data = [
     'name'=> $request->firstname .' '.$request->lastname,
    //  'lastname'=>$request->lastname,
     'email'=> $request->email,
     'company'=> $request->company,
     'phone'=>$request->phone,            
     'job_title' =>$request->job_title,            
     'industry' => $request->services, 
     'country' => $request->country, 
     'type' => $form->type,   
     'address'=> $request->address,
    // 'opt' =>   $request->opt,
    // 'lead' => $request->email .' '.$request->lead,
    'client_message' => $request->client_message,
     'subject_client' => $request->client_subject,
     'subject_admin' => $request->email.' |  successfully registered for free consultation',
   ];
     //  $this->bitrixLeadApi($data);
   /*Admin mail*/
   Mail::send('emails.admin', $data, function($message) use ($data) {
     $message->to('advertise@ochre-media.com');
    // $message->to('pushpalatha@ochre-media.com');
     $message->subject($data['subject_admin']);
   });
   Mail::send('emails.cms.client', $data, function($message) use ($data) {
     $message->to($data['email']);
     $message->subject($data['subject_client']);
   });


  return redirect()->route('advertorial.success')->with(['status'=>'true'])->with(['thank_message'=> $request->thank_message]); 
  }
      return view('cms.healthcare-marketing.services.advertorial',compact('countries','banners'));
    }



    public function outboundEmailMarketing(CommanRequest $request)
    {
      $banners = $this->banners;
      $countries =  Country::select('title')->get();
      $this->seoTools('outbound-email-marketing');  
      if(\Request::isMethod('post')){   
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }     
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'outbound-email-marketing' ;
        $form->save();
   
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];
         //  $this->bitrixLeadApi($data);
       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
        $message->to(trans('messages.subscribe-email'));
        //$message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
   
   
      return redirect()->route('outboundEmailMarketing.success')->with(['status'=>'true'])->with(['thank_message'=> $request->thank_message]); 
          //return "hi" ;
        }  
      return view('cms.healthcare-marketing.services.outbound-email-marketing',compact('countries','banners'));
    }

    public function b2bMicrosites(CommanRequest $request)
    {
      $banners = $this->banners;
      $countries =  Country::select('title')->get();
      $this->seoTools('b2b-microsites'); 
      
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'b2b-microsites';
        $form->save();
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];

       /*Admin mail*/
      Mail::send('emails.admin', $data, function($message) use ($data) {
       $message->to('advertise@ochre-media.com');
      //  $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
      return redirect()->route('b2bMicrosites.success')->with(['status'=>'true'])->with(['thank_message' => $request->thank_message]); 
      }
      return view('cms.healthcare-marketing.services.b2b-microsites',compact('countries','banners'));
    }

    public function printMediaAdvertising(CommanRequest $request)
    {
      $banners = $this->banners;
      $countries =  Country::select('title')->get();
      $this->seoTools('print-media-advertising'); 
    
      if(\Request::isMethod('post')){
        $captcha = $request->input('g-recaptcha-response');
        if (!$this->checkGoogleCaptcha($request, $captcha)) {
            return redirect()->back()->withErrors(['captcha' => 'ReCaptcha Error']);
        }
        $form = new Form();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->job_title = $request->job_title;
        $form->services = $request->services;    
        $form->phone = $request->phone;
        $form->country = $request->country;
        $form->company = $request->company;
        $form->email = $request->email;
        $form->address = $request->address;
        $form->type =  'print-media-advertising' ;
        $form->save();
        /*Send email admin*/  
        $data = [
         'name'=> $request->firstname .' '.$request->lastname,
        //  'lastname'=>$request->lastname,
         'email'=> $request->email,
         'company'=> $request->company,
         'phone'=>$request->phone,            
         'job_title' =>$request->job_title,            
         'industry' => $request->services, 
         'country' => $request->country, 
         'type' => $form->type,   
         'address'=> $request->address,
        // 'opt' =>   $request->opt,
        // 'lead' => $request->email .' '.$request->lead,
        'client_message' => $request->client_message,
         'subject_client' => $request->client_subject,
         'subject_admin' => $request->email.' |  successfully registered for free consultation',
       ];

       /*Admin mail*/
       Mail::send('emails.admin', $data, function($message) use ($data) {
       $message->to('advertise@ochre-media.com');
     // $message->to('pushpalatha@ochre-media.com');
         $message->subject($data['subject_admin']);
       });
       Mail::send('emails.cms.client', $data, function($message) use ($data) {
         $message->to($data['email']);
         $message->subject($data['subject_client']);
       });
      return redirect()->route('printMediaAdvertising.success')->with(['status'=>'true'])->with(['thank_message'=>$request->thank_message]); 
      }


      return view('cms.healthcare-marketing.services.print-media-advertising',compact('countries','banners'));
    }

    public function ebookAdvertising(CommanRequest $request)
    {
      $banners = $this->banners;
      $countries =  Country::select('title')->get();
      $this->seoTools('ebook-advertising');  
      return view('cms.healthcare-marketing.services.ebook-advertising',compact('countries','banners'));
    }

    public function checkGoogleCaptcha(Request $request, $token)
    {
        $secretKey = config('services.recaptcha.secret');
        $data = [
            'secret' => $secretKey,
            'response' => $token,
            'remoteip' => $request->ip(),
        ];
    
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', $data);
        $result = $response->json();
    
        if (isset($result['success']) && $result['success'] === true && $result['score'] >= 0.3) {
            return true;
        } else {
            return false;
        }
    }


}