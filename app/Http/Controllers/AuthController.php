<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//models
use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        if (Auth::check())
            return redirect()->intended(route('homepage'));
        
        return view('auth.register');
    }
    
    public function registerPost(Request $request){
        
        $request->validate([
            'username' => 'required|min:3|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
        
        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->is_admin = 0;
        $user->save();
        
        return redirect()->route('auth.login.form');
        
    }
    
    public function login(){
        if (Auth::check())
            return redirect()->intended(route('homepage'));
        
        return view('auth.login');
    }
    
    public function loginPost(Request $request){
        
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('homepage'));
        }
        
        return back()->withErrors([
            'username' => 'Les identifiants ne correspondent pas',
        ]);
        
    }
    
    public function logout(){
        
        Auth::logout();
        
        return redirect()->route('homepage');
    }
}
