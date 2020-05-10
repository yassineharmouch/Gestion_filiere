<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterUsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request){
        //data validate
         $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new \App\User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->type="student";
        $user->save();
        //Auth::attempt($credentials
        Auth::guard()->login($user);
        return redirect()->route('home');
        //dd($request->all());
    }
}
