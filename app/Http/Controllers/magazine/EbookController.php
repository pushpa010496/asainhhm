<?php

namespace App\Http\Controllers\magazine;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Http;
use App\Models\Ebook;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Editorialarticle;
use App\Models\EbookEmail;
use App\Models\Issue;
use App\Models\Subscriber;
use \Mail;
use App\Models\Page;
use App\Models\SeoPage;
use SEOMeta;
use OpenGraph;
use Twitter;
use Session;
use Auth;


class EbookController extends HomeController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $current_issue = $this->current_issue;
        $banners = $this->banners;
        $this->seoTools(request()->segment(1));  
        $ebook = Ebook::with('issue')->where('issue_id',$current_issue->id)->first();
        $articles = Editorialarticle::where('issue_id',$current_issue->id)->with('issue','category')->get();
        $categories = Category::whereIn('id',explode(',',$current_issue->category))->where('active_flag',1)->get(); 
        return view('magazine.index',compact('current_issue','banners','ebook','articles','categories'));

    }
    public function indexNew(){

        
        $banners = $this->banners;
        //$this->seoTools(request()->segment(1));  
       
        return view('magazine.index1',compact('banners'));

    }

    public function ebook(Request $request)
    {    $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->get();
        $banners = $this->banners;
        $current_issue = $this->current_issue;
           $this->seoTools(request()->segment(1));  
           $ebookid = Ebook::with('issue')->where('issue_id',$current_issue->id)->first();
           $articles = Editorialarticle::where('issue_id',$current_issue->id)->with('issue','category')->get();
           $categories = Category::whereIn('id',explode(',',$current_issue->category))->where('active_flag',1)->get(); 
        if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($request->post() && $this->checkGoogleCaptcha($request,$captcha)==true){
       
   
            $ebook =  Ebook::with('issue')->where('id',$request->ebook_id)->where('active_flag',1)->orderBy('id','desc')->first();

            $email = new EbookEmail;
            $email->issue_id =$request->issue_id;
            $email->email = $request->email; 
            $email->save();    

            $data = [
                'issue'=> $ebook->issue->title,
                'email'=> $request->email,           
                'subject_client' => trans('messages.ebook_client'),
                'subject_admin' => trans('messages.ebook_admin'),
            ];

            
            
                $current_issue =  $this->current_issue;
                if($current_issue->id == $ebook->issue->id){
                    

                $key_value=  Session::get('key');
               // dd($key_value);
               if($key_value or Auth::user()){
                return view('magazine.ebook.ebookview',compact('ebook'));
               }
                    return redirect('login')->with('url','e-book-view')->with('ebookid',$request->ebook_id)->with('statusebook','true');
               

                   
            }   


        
        // dd($ebook);
       
        // $this->seoTools(request()->segment(1)); 
    }
        return view('magazine.ebook.index',compact('ebook','banners','ebookid','categories','articles'));
   
}
    public function ebookview(Request $request,$ebook)
    {   

        $key_value=  Session::get('keyid') ?? '';
    if($key_value){
            $ebook =  Ebook::with('issue')->where('id',$key_value)->where('active_flag',1)->orderBy('id','desc')->first();
          //  dd($ebook);
            return view('magazine.ebook.ebookview',compact('ebook'));
        }
        $ebook =  Ebook::with('issue')->where('id',$ebook)->where('active_flag',1)->orderBy('id','desc')->first();

          
        return view('magazine.ebook.ebookview',compact('ebook'));


    }
    public function ahhmmagazine(Request $request)
    {   
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkGoogleCaptcha($request,$captcha)==true){
        if($request->post()){
           request()->validate([
            'email'=>'required|email',
            'issue_id' =>'required',
            'ebook_id' =>'required'
        ]);
           $ebook =  Ebook::with('issue')->where('id',$request->ebook_id)->where('active_flag',1)->orderBy('id','desc')->first();


            $email = new EbookEmail;
            $email->issue_id =$request->issue_id;
            $email->email = $request->email; 
            $email->save();    

            $data = [
                'issue'=> $ebook->issue->title,
                'email'=> $request->email,           
                'subject_client' => trans('messages.ebook_client'),
                'subject_admin' => trans('messages.ebook_admin'),
            ];

            /*Admin mail*/
            /*Mail::send('emails.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                $message->subject($data['subject_admin']);
            });
            Mail::send('emails.ebook.client', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });*/

            return view('magazine.ebook.ahhmmagazine',compact('ebook'));

        }    


         $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->get();
         $banners = $this->banners;
         $this->seoTools(request()->segment(1));  
          return view('magazine.ebook.ahhmmagazine',compact('ebook'));
        return view('magazine.ebook.index',compact('ebook','banners'));
    }else
    {}}

    public function ebookSubscribe(Request $request)
    {   
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkGoogleCaptcha($request,$captcha)==true){
        if($request->post()){

             request()->validate([
                'email'=>'required|email',
                'fullname' =>'required',
                'company' =>'required',
                'telephone'=>'required'
            ]);

           $form = new Subscriber();
            $form->fullname = $request->fullname ;
            $form->email = $request->email;
            $form->telephone = $request->telephone;
            $form->fax = $request->fax;            
            $form->company = $request->company;
            $form->designation = $request->cf_leads_jobtitle;
            
            $form->type = $request->type;
            $form->save();

             /*Send email admin*/  
        $data = [
            'name'=> $request->fullname,
            'email'=> $request->email,
            'company'=> $request->company,
            'phone'=>$request->telephone,                                                
            'type' => $request->type,            
            'subject_client' => trans('messages.ebook_subscribe_admin'),
            'subject_admin' => ucfirst($request->fullname).trans('messages.ebook_subscribe_admin'),
         ];
            /*Admin mail*/
            /*
            Mail::send('emails.admin', $data, function($message) use ($data) {
                $message->to(trans('messages.adminemail'));
                $message->subject($data['subject_admin']);
            });
            Mail::send('emails.ebook.subscribe', $data, function($message) use ($data) {
                $message->to($data['email']);
                $message->subject($data['subject_client']);
            });*/

            return redirect()->back()->with(['status'=>'true']);
        }    

       
        $banners = $this->banners;
        // $this->seoTools(request()->segment(1));  
        return view('magazine.ebook.subscribe',compact('banners'));
    }else
    {}}


   
    public function archives()
    { 
         $current_issue = $this->current_issue;
        $ebookid = Ebook::with('issue')->where('issue_id',$current_issue->id)->first();
        $categories = Category::where('active_flag',1)->get();        
         $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->get();
         $banners = $this->banners;
        $this->seoTools(request()->segment(1));  
        return view('magazine.archives.index',compact('ebook','categories','banners','ebookid'));
    }

    public function archiveMagazine(Issue $issue,Request $request)
    {
        // if(!$request->post()){
        //     return redirect('archives');    
        // }
        $ebook = Ebook::where('issue_id',$issue->id)->first(); 
        
        
        $articles = Editorialarticle::where('issue_id',$ebook->issue_id)->with('issue','category')->get();
         
        $categories = Category::whereIn('id',explode(',',$ebook->issue->category))->orderBy('ordering','asc')->get();
                       
        $banners = $this->banners;
         $this->seoToolsView($ebook->id);  
        $current_issue = $this->current_issue;
        return view('magazine.ebook.archive_magazine',compact('ebook','categories','banners','articles','current_issue'));
    }

    public function ebookPost(Request $request)
    {   
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkGoogleCaptcha($request,$captcha)==true){
        request()->validate([
            'email'=>'required|email',
            'issue_id' =>'required',
            'ebook_id' =>'required'
        ]);

      $issue = Issue::find($request->issue_id);

      if($issue){
        $email = new EbookEmail;

        $email->issue_id = $issue->id;
        $email->email = $request->email; 
        $email->save();    

        $data = [
            'issue'=> $issue->issue_no,
            'email'=> $request->email,           
            'subject_client' => trans('messages.ebook_archive_client'),
            'subject_admin' => trans('messages.ebook_archive_admin'),
        ];

        /*Admin mail*/
        /*Mail::send('emails.admin', $data, function($message) use ($data) {
           //$message->to(trans('messages.adminemail'));
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        Mail::send('emails.ebook.client', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });*/

    }else{

        return redirect()->route('ebook.archives');
    }   

     $ebook = Ebook::find($request->ebook_id);
     //return $ebook;
    $articles = Editorialarticle::where('issue_id',$issue->id)->with('issue','category')->get();
    $categories = Category::whereIn('id',explode(',',$issue->category))->get();              
    $banners = $this->banners;
    $current_issue=$this->current_issue;
    $this->seoToolsView($ebook->id);  
    return view('magazine.ebook.archive_magazine',compact('ebook','categories','banners','articles','current_issue'));

}else
{}}


 public function latestIssue()
    {   
        $this->seoTools('latest-ebook');
        $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->first();
        $banners = $this->banners; 
        
      
        
        if(session('user'))
        {
            return view('magazine.ebook.latestissue',compact('ebook','banners'));
        }
        else
        {
          return redirect('login')->with('url', 'latest-ebook')->with('latestebook', 'true');  
        }
        
       
        
        
       // $returnUrl = $user['key'];
       // $ebookid = $user['keyid'];

        
        
        // $latestIssueAccess = session('latest_issue_access');
        // if (!$latestIssueAccess) {
         //   return redirect('login')->with('url', 'latest-ebook')->with('latestebook', 'true');
         //}
        // $current_issue =  $this->current_issue;
        // $latest_issue_access = session('latest_issue_access');
        // if($current_issue->id == $ebook->issue->id){
        // $key_value=  Session::get('key');
            
        //     if($key_value or $latest_issue_access){
        //         return view('magazine.ebook.latestissue',compact('ebook','banners'));
        //     }
        //     return redirect('login')->with('url','latest-ebook')->with('latestebook','true');
        
        // }     
        
         //return redirect($returnUrl);

        //return view('magazine.ebook.latestissue',compact('ebook','banners'));
    }

    public function welcome(Request $request)
    {   
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkGoogleCaptcha($request,$captcha)==true){
       
        if($request->post()){
           $ebook =  Ebook::with('issue')->where('active_flag',1)->orderBy('id','desc')->first();


           $form = new Subscriber();        
           $form->email = $request->email;          
           $form->type = $request->type;
           $form->save();


           $data = [
            'issue'=> $ebook->issue->title,
            'email'=> $request->email,           
            'subject_client' => trans('messages.ebook_welcome_client'),
            'subject_admin' => trans('messages.ebook_welcome_admin'),
        ];

        /*Admin mail*/
        /*
        Mail::send('emails.admin', $data, function($message) use ($data) {
             $message->to(trans('messages.subscribe-email'));
            //$message->to(trans('messages.adminemail'));
            $message->subject($data['subject_admin']);
        });
        Mail::send('emails.ebook.welcome', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });*/
        return view('magazine.ebook.ebookview',compact('ebook'));
       

    }    
    return redirect()->route('mainhome');
  
    }else
    {}}

  public function seoTools($page){
        $page = Page::where('title',$page)->first();
        if($page) {
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

    public function seoToolsView($ebook){
        $page = Ebook::find($ebook);
        $data =  Ebook::find($ebook);
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
    
    public function checkGoogleCaptcha(Request $request, $token)
    {
    // Retrieve reCAPTCHA secret key from the configuration
    $secretKey = config('services.recaptcha.secret');

    // Build the data array for the reCAPTCHA verification
    $data = [
    'secret' => $secretKey,
    'response' => $token,
    'remoteip' => $request->ip(),
    ];

    // Make an HTTP POST request to Google reCAPTCHA
    $response = Http::post('https://www.google.com/recaptcha/api/siteverify', $data);

    // Parse the response JSON
    $result = $response->json();

    // Check if reCAPTCHA verification was successful
    if ($result['success'] === true && $result['score'] >= 0.3) {
    // Validation was successful, add your form submission logic here
    return back()->with('message', 'Thanks for your message!');
    } else {
    // Validation failed, show an error message
    return back()->withErrors(['captcha' => 'ReCaptcha Error']);
    }
    }



   
}
