<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login", [
            'title' => 'Login',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    

    public function auth(Request $request)
    {
        //array ke-2 untuk cuntom message
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => 'email belum tersedia',
            'email.required' => 'email belum diisi',
            'password.required' => 'password belum diisi',
        ]);
        
        $user = $request->only('email','password');
        if(Auth::attempt($user)){
            return redirect()->route('dashboard');
        }else{
            return redirect()->back()->with('error','Gagal login, silahkan cek dan coba lagi!');
        }
    }
}
