<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\PasswordReset;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Str;
use DB;

class AuthController extends Controller
{
    use ApiResponser;

    public function register(Request $request)
    {
        $attr = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'contact_number'=> 'required|numeric',
            'captcha' => 'required_if:web,true|captcha'
        ]);

        $user = User::create([
            'fname' => $attr['fname'],
            'lname' => $attr['lname'],
            'password' => bcrypt($attr['password']),
            'email' => $attr['email'],
            'contact_number'=> $attr['contact_number'],
        ]);
         $user->assignRole('user');

        if ($request->input('web')) {
            if (auth()->attempt(array('email' => $attr['email'], 'password' => $attr['password']),true))
            {
                return response()->json(auth()->user()->id);
            }
            return response()->json(['error'=>'Sorry User not found.']);
        }

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }
    
    
     function login_focal_person(Request $request)
    {
        $user=User::where('username',$request->username)->first();
        if(!$user){
            return redirect()->back()->with('error',"plz write correct credentials!"); 
        }
        
        if (Hash::check($request->input('password'), $user->password)) {
            if($user->person_status=='focal_person'){
            $credentials = $request->only('username','password');
            if (Auth::attempt($credentials)) {
            return redirect('/consultant_dashboard');
        }
           }
        } else {
           return redirect()->back()->with('error',"plz write correct credentials!");
       }
        
        
    }

    public function update(Request $request)
    {
        $attr = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email,'.auth()->user()->id,
            'contact_number'=> 'required|string|min:11|max:15',
        ]);

        $user = auth()->user();
        $user->fname = $attr['fname'];
        $user->lname = $attr['lname'];
        $user->email = $attr['email'];
        $user->contact_number = $attr['contact_number'];
        $user->save();

        return $this->success($user, 'Profile Updated!');
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
            'password' => 'required|string|min:6'
        ]);

        if ($request->input('web')) { //request from landing page
            if (auth()->attempt(array('email' => $attr[''], 'password' => $attr['password']),true))
            {
                // $request->session()->regenerate();
                return response()->json(auth()->user()->id);
            }
            // $errors = 'Email and/or password invalid.';
             $errors = ["errors" => [
                 "password" => ["The email or password is invalid."]
             ]];
            return response()->json($errors, 404);
        }

        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }


        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function resetPassword(Request $request)
    {

        $attr = $request->validate([
            'new_password' => 'required|string|min:6|confirmed',
        ]);
        //Change Password
        $user = auth()->user();
        $user->password = Hash::make($attr['new_password']);
        $user->save();

        return $this->success('','Password Updated!');
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }

    public function checkEmail(Request $request)
    {
        $attr = $request->validate([
            'email' => 'required|string|email|',
        ]);
        $count_user = User::where('email', $request->input('email'))->count();
        if ($count_user <= 0) {
            return $this->success(true);
        } else {
            return $this->success(false);
        }
    }

    function forgotPassword(Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? $this->success(['status' => __($status)])
                : $this->error('Failed', 402);
    }
    
        
    function contact_action(Request $request)
    {
        return view('website.contact');
    }
    function saveContactForm(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:50',
            'email' => 'required|email',
            'message' => 'required|string|max:300',
            // 'g-recaptcha-response' => 'required_if:g-recaptcha-response,true|captcha',
            // 'captcha' => 'required_without:web|captcha',
            // 'captcha' => 'required_if:web,true|captcha'
            //  'g-recaptcha-response' => 'required_if:web,true|captcha'
            // 'g-recaptcha-response' => 'required_if:web,true|captcha',

        ];//dd($request->input('a-ihe1u4sjb4ym'));
        // dd($request->g-recaptcha-response);

        $this->validate($request, $rules);
            
        $data = [
                'name'=> $request->name,
                'email'=> $request->email,
                'message'=> $request->message,
                'ip_address'=> $request->ip(),
                
                
            ];
        
        
        DB::table('contactus')->insert($data);
        
    if (filter_var($request->email , FILTER_VALIDATE_EMAIL)){
        $data['message_body'] = $request->message;
        \Mail::send('contactus_email',
         $data,
          function($message)
          {
             
              $message->from("info@pec.org.pk");
            
            
            //   $message->to("maham@a2zcreatorz.com");
              $message->to("egateway@pec.org.pk");
              $message->subject("PEC Contact Us");
            
           });
    }
        
        
        
        
        return redirect()->back()->with('message', ' We appreciate you contacting us. One of our colleagues will get back in touch with you soon! Have a great day!');
    }
}
