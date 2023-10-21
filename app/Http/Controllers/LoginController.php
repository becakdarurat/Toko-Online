<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function index(){
        return view('Login',[
            "title" => 'Halaman Daftar',
            "active" => "Login",
            "css" => "css/Daftar.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
        ]);
    }
    public function store(){
        return request()->all();
    }
}
