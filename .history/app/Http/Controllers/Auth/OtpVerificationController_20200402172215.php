<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{
    //protected $redirectTo = '/profile';

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show()
    {

        return view('auth.verify_otp');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mobile_otp' => 'required|digits:6',
            'email_otp' => 'required|digits:6',
        ]);
        //dd($validatedData);
        if($validatedData['mobile_otp'] == session('mobileOtp') && $validatedData['email_otp'] == session('emailOtp')){
            session()->flush();
            return redirect()->route('profile');
        }
        
    }
}
