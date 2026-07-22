<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
   
    public function showLogin(){
        return view('auth.login');


    }
    public function login(LoginRequest $request){
        $credentials=$request->validated();
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(Auth::user()->role==='admin'){
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('student.dashboard');
        }
        return back()
        ->withErrors([
            'email'=>'Email ou mot de passe incorrect'
        ])
        ->onlyInput('email');


    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
        
    }
}
