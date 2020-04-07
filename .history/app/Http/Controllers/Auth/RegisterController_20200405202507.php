<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/verify-otp';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'mobile' => ['required', 'string', 'max:10','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all())->validate();
        dd($validator);
        //event(new Registered($user = $this->create($request->all())));
        $mobileOtp = $this->generateOTP();
        $emailOtp = $this->generateOTP();
        session([
            'mobileOtp' => $mobileOtp,
            'emailOtp' => $emailOtp,
            'mobile' => $validator['mobile'],
            'email' => $validator['email'],
            'password' => $validator['password'],
            ]);
        Log::info("Message: Email-OTP = ".$emailOtp." Mobile-OTP=".$mobileOtp);
        /* return $this->registered($request, $user)
            ?: redirect($this->redirectPath()); */

        return redirect($this->redirectPath());

    }


    public function generateOTP(){
        $otp = mt_rand(100000,999999);
        return $otp;
    }

    /* protected function registered(Request $request, User $user)
    {
        $user->callToVerify();
        return redirect($this->redirectPath());
    } */
}
