<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Role;

class OtpVerificationController extends Controller
{
    protected $redirectTo = '/profile';

    use RegistersUsers;

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
            $inputData = [
                'mobile' => session('mobile'),
                'email' => session('email'),
                'password' => session('password'),
            ];

            event(new Registered($user = $this->create($inputData)));
            session()->flush();
            return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
            //return redirect()->route('profile');
        }else{
            return json_encode(array('statusCode'=>400,'msg'=>"otp not valid"));
        }

    }

    protected function create(array $data)
    {
        $user =  User::create([
            'mobile' => $data['mobile'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $userRole = Role::where('name', 'user')->first();
        dd($role);
    }
}