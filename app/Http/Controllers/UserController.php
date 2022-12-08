<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // show register/create form
    public function create() {
        return view('users.register');
    }

    // speaker
    public function speaker() {
        return view('users.speaker');
    }

    // login
    public function login() {
        return view('users.login');
    }

    // talk
    public function talk() {
        return view('users.talk');
    }

    // ticket
    public function ticket() {
        return view('users.ticket');
    }

    // purchase page
    public function purchase() {
        return view('users.purchase');
    }

    // contacts
    public function contacts() {
        return view('users.contacts');
    }

    // teeser
    public function youtube() {
        return view('users.youtube');
    }

    // signin
    public function signin() {
        return view('users.signin');
    }

    // signup
    public function signup() {
        return view('users.signup');
    }

 //Authenticate login user 
 public function authenticate(Request $request) {

    $formfield = $request->validate([
        'email' => ['required', 'email'],
        'password' => 'required'
        ]);

   if(auth()->attempt($formfield)) {
    $request->session()->regenerate();


   }    return redirect('/')->with('message', 'you are now logged in!');
}
}

