<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Show Register Form
    public function create(){
        return view('users.register');
    }

    // Store a New User
    public function store(Request $request){


        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email:rfc', 'unique:users'],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);


        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/');
    }

    // Logout Function
    public function logout(Request $request){

        // Remove Auth Info
        auth()->logout();

        // Invalidate User Session
        $request->session()->invalidate();

        // Regenerate CSRF Token
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // Load Login Form
    public function login(){
        return view('users.login');
    }

    // Login User
    public function auth(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email:rfc'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }
}
