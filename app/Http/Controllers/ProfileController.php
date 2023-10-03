<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Daftar(){
        return view('Daftar');
    }
    public function Login(){
        return view('Login');
    }
    public function Home(){
        return view('Home');
    }
}
