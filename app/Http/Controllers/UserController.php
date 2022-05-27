<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function psignup(Request $request){
        $validated = $request->validate([
            'fullname'=>'required',
            'username' => 'required|unique:App\Models\User,username',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required|min:8',
            'cpassword'=>'required|same:password',
        ]);
        

        $check = User::create($validated);

        if($check){
            return redirect()->route('login')->with('success','Akun anda berhasil didaftarkan, silahkan login !');
        }

        return redirect()->back()->with('error','Something Wrong');;
    }

    public function plogin(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt(['email' => $validated['email'] , 'password' => $validated['password']],true)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Email / Password salah/tidak ditemukan',
        ]);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
}
