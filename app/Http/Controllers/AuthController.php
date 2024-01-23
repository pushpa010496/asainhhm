<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use App\Mail\OtpVerification;
use App\Models\User;
use App\Models\Banner;
use Session;

class AuthController extends HomeController
{
    /**
     * Handle user registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

         if (isset($_POST['g-recaptcha-response'])) {
                $captcha = $_POST['g-recaptcha-response'];
            } else {
                $captcha = false;
            }

            if(\Request::isMethod('post') && $this->checkGoogleCaptcha($request,$captcha)==true){
       
        // Validate the request data
        $request->validate([
            'firstname' => 'required|string',
            

            'password' => 'required|string|min:8',
        ]);

        // Generate OTP and hash it
        $otp = rand(100000, 999999);
        $request->session()->put('otp', $otp);
        // $hashedOtp = Hash::make($otp);

        // Create a new user
       $user = User::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'country' => $request->input('country'),
            'phone' => $request->input('phone'),
            'company' => $request->input('company'),
            'email' => $request->input('email'),
           
            'password' => Hash::make($request->input('password')),
            'otp'=> $otp,
        ]);
      
        // Send OTP to user's email (you can modify this to send via SMS, etc.)
        Mail::to($user->email)->send(new OtpVerification($otp));
        return view('forms.subscribe.verify-otp',compact('user'));




        // Mail::send('emails.mediapack.client', $data, function($message) use ($data) {
        //     $message->to($data['email']);
        //     $message->subject($data['subject_client']);
        //     });
        // // Redirect to OTP verification page
        // return redirect('/verify-otp')->with('success', 'Registration successful. Please verify your OTP.');
    }}

    /**
     * Handle user login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function showLoginForm(Request $request)
     {
      // $test= url()->previous();
      // dd($test);
      $time = \Carbon\Carbon::now()->format('Y-m-d');     
    $banners = Banner::where('active_flag','=', 1)->where('to_date', '>=' , $this->time)->where('from_date', '<=' , $this->time)->orderBy('id','desc')->get();   
         return view('auth.login',compact('banners'));
     }
    public function login(Request $request)
    {
       
        if (isset($_POST['g-recaptcha-response'])) {
                $captcha = $_POST['g-recaptcha-response'];
            } else {
                $captcha = false;
            }
 
            if(\Request::isMethod('post') && $this->checkGoogleCaptcha($request,$captcha)==true){
            
        $form = new User();
        $form->firstname = $request->firstname;
        $form->lastname = $request->lastname;
        $form->email = $request->input("email");
        $form->company = $request->input("company");
     //   $form->title = $request->input("job_title");
        $form->country = $request->input("country");
        $form->phone = $request->input("phone");
       // $form->from = $request->input("from");
      //  $form->type = "Our Services Page";
        $form->save();

        $request->session()->put('user', true);

        $returnUrl = $request->previous_url; 
        
        
        $ebookid = $request->ebookid ?? ''; 
       // Session::put('user',['key'=>$returnUrl,'keyid'=> $ebookid]);
        
        Session::put('key', $returnUrl);
        Session::put('keyid', $ebookid);
        Session::put('previousURL', $returnUrl);
        

    //   return redirect(session('link'));
      if($returnUrl){
         return redirect($returnUrl); 
      }
    // return redirect('/latest-ebook');
         
           
              }

    }

    /**    
     * Verify OTP for registration.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function verifyOtpform(){
        return view('auth.verify-otp');

    }

    public function verifyOtp(Request $request)
    {
       
        if (isset($_POST['g-recaptcha-response'])) {
                $captcha = $_POST['g-recaptcha-response'];
            } else {
                $captcha = false;
            }

            if(\Request::isMethod('post') && $this->checkGoogleCaptcha($request,$captcha)==true){
        // Validate the request data
        $this->validate($request, [
            'otp' => 'required',
        ]);

        $otp = $request->input('otp');
        $storedOtp = $request->session()->get('otp');

        if ($otp == $storedOtp) {
            // OTP verification successful
          // $user = User::where('email', $request->session()->get('email'))->first();

            // Log in the user
          //  Auth::login($user);
           // $intendedUrl = session()->pull('url.intended', '/');
            // Clear the OTP from the session
         //  $request->session()->forget('otp');
         //return Redirect::to($intendedUrl);
            // return redirect('/login');
           //return 'success';
       
$user = User::where('email', $request->session()->get('email'))->first();

Auth::loginUsingId($user);
          return redirect('magazine');
        }else{
            'the otp does not match';
        }

        // Invalid OTP
        return back()->withErrors(['message' => 'Invalid OTP']);
    }
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