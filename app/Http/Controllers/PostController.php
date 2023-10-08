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
            "posts" => Post::latest()->get(),
        ]);
    }
}
