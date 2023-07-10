<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login', [
            "title" => "Login"
        ]);
    }

    function login(Request $request){
        Session::flash('email', $request->input('email'));
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($infologin)){
            //if auth succes
            $request->session()->regenerate();
            return redirect('/admine')->with('success', 'Berhasil login');
        } else {
        return redirect('/login')->with('loginError','Username dan password yang dimasukkan tidak sesuai');
    }
    }

    public function authenticate(Request $request)
    {
        // return $request;
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
             return redirect('/admine');
            
        }
        
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
