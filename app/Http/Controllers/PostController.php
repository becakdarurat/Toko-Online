<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index(){
        return view('Blog',[
            "title" => "Halaman Blog",
            "css" => "css/Home.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
            "posts" => Post::latest()->get(),
        ]);
    }
}
