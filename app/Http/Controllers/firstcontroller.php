<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontroller extends Controller
{
    public function index(){
        return view('home');
    }
    public function index2(){
        return view('about');
    }
    public function index3(){
        return view('contact');
    }
    public function index4(){
        return view('login');
    }
    public function index5(){
        return view('register');
    }
}