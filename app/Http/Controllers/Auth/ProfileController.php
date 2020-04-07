<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function show()
    {

        return view('auth.profile');
    }

    public function store(Request $request)
    {
        //verify otp here
        //dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
//dd($validatedData);
        $user = auth()->User();dd($user);
        $user->name = $validatedData['name'];
        $user->save();
        return redirect('/');
    }
}
