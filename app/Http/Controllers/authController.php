<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class authController extends Controller
{
    function index()
    {
        return view('auth.login');

    }
    function redirect(){
        return Socialite::driver('google')->redirect();
    }

    function callback(){
        $user = Socialite::driver('google')->user();
        $id = $user->id;
        $email = $user->email;
        $name = $user->name;
        // $avatar = $user->avatar;

        // echo $avatar;
        // exit();

        $cek = User::where('email', $email)->count();
        if ($cek > 0) {
            $user = User::updateOrCreate(
                ['email' => $email],
                [
                    'name' => $name,
                    'google_id' => $id 
                ]
            );
            return redirect()->to('dashboard');

        }else{
            return redirect()->to('auth')->with('error', 'Akun yang anda masukkan tidak diizinkan untuk menggunakan halaman Admin');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to('auth');
    }
}
