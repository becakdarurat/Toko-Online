<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Daftar(){
        return view('Daftar',[
            "title" => 'Halaman Daftar',
            "css" => "css/Daftar.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
        ]);
    }
    public function Login(){
        return view('Login',[
            "title" => 'Halaman Login',
            "css" => "css/Login.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
        ]);
    }
    public function Home(){
        return view('Home');
    }
}
