<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard')
                ->with('Berhasil','Login Berhasil!');
        }

        return back()->withErrors([
            'email' => 'E-mail tidak sesuai',
            'password' => 'Password Salah',
        ])->onlyInput('email','password');
    }

    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'request|email|unique:users',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            return redirect()->route('login')
               ->with('Berhasil', 'Registrasi Berhasil! Silahkan Login.');
        }

        return back()->with('Gagal', 'Registrasi Gagal!');
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect()->route('login')
           ->with('Berhasil', 'Berhasil Logout.');
    }
}
