<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        //dd(Auth::check());
        //dd(Auth::id());
        //dd(Auth::user());
        return view('home.index');
    }

    public function contact(){
        return view('home.contact');
    }

    public function login(){
        return view('home.login');
    }

    public function register(){
        return view('home.register');
    }
}
