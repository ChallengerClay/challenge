<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin(){
        return view('home.login');
    }

    public function  postLogin(Request $request){
        $validated = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|max:10'
        ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credential)){
            return redirect('/')->with('success',__('welcome back',['email' => $request->email]));
        }else{
            return redirect('login')->withErrors([
                'email'     => __('login error'),
                'password'  => __('login error'),
            ]
            )->withInput();
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/login')->with('alert',__('session ended'));
    }
}
