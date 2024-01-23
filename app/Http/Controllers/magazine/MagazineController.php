<?php
namespace App\Http\Controllers\magazine;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use App\Download;
use \Mail;
use App\Authorguideline;

class MagazineController extends HomeController
{
    public function authorguidelinesPost(Request $request)
    {  
         if (isset($_POST['g-recaptcha-response'])) {
             $captcha = $_POST['g-recaptcha-response'];
        } else {
             $captcha = false;
        }
        if($this->checkGoogleCaptcha($request,$captcha)==true){
        request()->validate([
            'fullname' =>'required',
            'email'=>'required|email',
			'telephone' =>'required',
			'company' =>'required'                                  
        ]);

        $download = new Download;
        $download->fullname = $request->fullname;
        $download->email = $request->email; 
        $download->telephone = $request->telephone; 
        $download->company = $request->company; 
        $download->description = $request->description; 
        $download->type = "authorguidelines-download";        
        $download->save();    

        $data = [
        	'name'=> $request->fullname,
        	'email'=> $request->email,  
        	'telephone'=> $request->telephone,  
        	'company'=> $request->company,  
        	'description'=> $request->description,                  
        	'subject_client' => trans('messages.authorguideline_client'),
        	'subject_admin' => $request->fullname.trans('messages.authorguideline_admin'),
        ];

        /*Admin mail*/
       /* Mail::send('emails.admin', $data, function($message) use ($data) {
           // $message->to(trans('messages.adminemail'));
            $message->to(trans('messages.subscribe-email'));
            $message->subject($data['subject_admin']);
        });
        Mail::send('emails.mediapack.authorguidelines', $data, function($message) use ($data) {
            $message->to($data['email']);
            $message->subject($data['subject_client']);
        });*/
    return view('magazine.authorguidelines.success');

}}

	public function autherguidlinesdwnlink(Request $request)
	{
		 $data =  Authorguideline::where('active_flag',1)->orderBy('id','desc')->first();

		 $pdf= config('app.url').'authorguidelines/pdf/'.$data->pdf; 

		 return redirect($pdf);

	}

    public function checkGoogleCaptcha(Request $request, $token)
    {
    // Retrieve reCAPTCHA secret key from the configuration
    $secretKey = Config::get('services.recaptcha.secret');

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
