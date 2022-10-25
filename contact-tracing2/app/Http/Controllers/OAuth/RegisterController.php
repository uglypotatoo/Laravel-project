<?php

namespace App\Http\Controllers\OAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Auth;
use Twilio\Rest\Client;

class RegisterController extends Controller
{
    public function register() {
        return view('oauth.register');
    }

    public function create(Request $request) {
        
        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'lastname' => ['required'],
            'address' => ['required'],
            'username' => ['required','unique:users,username'],
            'phoneNumber' => ['required','numeric','unique:users,phoneNumber'],
            'password' => ['required'],
            'password_confirm' => ['required']
       ]);

    //    $validateUserName = User::where('username',$request->username)->first();
    //    $validatePhoneNumber = User::where('phoneNumber',$request->phoneNumber)->first();

       $errors = [];
    //    if ($validateUserName) {
    //         $errors['username'] = 'The username is already registered';
    //    }

    //    if ($validatePhoneNumber) {
    //         $errors['phoneNumber'] = 'The phone number is already registered';
    //    }

       if ($errors || $validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'duplicate' => $errors
            ], 422);
       }

       /****************************** TWILIO AUTHENTICATION ******************************/

       User::create([
        'name' => $request->name,
        'lastname' => $request->name,
        'username' => $request->username,
        'address' => $request->address,
        'phoneNumber' => $request->phoneNumber,
        'password' => Hash::make($request->password)
        ]);

        auth()->attempt(array('username' => $request->username, 'password' => $request->password));

        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $twilio->verify->v2->services($twilio_verify_sid)
           ->verifications
           ->create($request['phoneNumber'], "sms");

        return ['status' => 'success'];
        
    }

    /****************************** TWILIO VERIFY METHOD ******************************/
    protected function verify(Request $request)
    {
        $data = $request->validate([
            'verification_code' => ['required', 'numeric'],
            'phoneNumber' => ['required', 'string'],
        ]);
        /* Get credentials from .env */
        $token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_verify_sid = getenv("TWILIO_VERIFY_SID");
        $twilio = new Client($twilio_sid, $token);
        $verification = $twilio->verify->v2->services($twilio_verify_sid)
            ->verificationChecks
            ->create($data['verification_code'], array('to' => $data['phoneNumber']));
        if ($verification->valid) {
            $user = User::where('id', Auth::user()->id)->update(['status' => 1]);
            return ['status' => 'success'];
        }
        return ['status' => 'fail'];
        //return back()->with(['phoneNumber' => $data['phoneNumber'], 'error' => 'Invalid verification code entered!']);
    }

    public function verifyView(Request $request) {
        return view ('oauth.verify');
    }


    public function registerEstablishment(Request $request) {
        return view('oauth.registerEstablishment');
    }

    public function createEstablishment(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],
            'address' => ['required'],
            'username' => ['required','unique:users,username'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required'],
            'password_confirm' => ['required']
       ]);
   
    //    $validateUserName = User::where('username',$request->username)->first();
    //    $validateEmail = User::where('email',$request->email)->first();
       $errors = [];
    //    if ($validateUserName) {
    //         $errors['username'] = 'The username is already registered';
    //    }

    //    if ($validateEmail) {
    //         $errors['email'] = 'The email is already registered';
    //    }

       if ($errors || $validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'duplicate' => $errors
            ], 422);
       }

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 2
        ]);

        auth()->attempt(array('username' => $request->username, 'password' => $request->password));

        return ['success' => 'success'];
    }

    public function login(Request $request) {
        return view('oauth.login');
    }

    public function loginUser(Request $request) {
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
            return view('oauth.login', ['credential' => 'The email and password is incorrect']);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
