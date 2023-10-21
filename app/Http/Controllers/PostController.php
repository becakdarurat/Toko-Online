<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class PostController extends Controller
{
    public function index(){
        $title = '';
            if(request('category')){
                // cari slug yang sama dengan category
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in ' . $category->name;
            }

            if(request('authors')){
                $author =  User::firstWhere('username', request('authors'));
                $title = ' by ' . $author->name;
            }
        return view('Blog',[
            "title" => "Halaman Blog",
            "active" => "blog",
            "css" => "css/Home.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
            // "posts" => Post::with(['user','category'])->latest()->get()
            "posts" => Post::latest()->Filter(request(['search','category','authors']))->paginate(7)->withQueryString(),
        ]);
    }
    public function Category(){
        return view('Category',[
            "title" => "Halaman Blog",
            "active" => "category",
            "css" => "css/Home.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
            "posts" => Category::all(),
        ]);
    }
    public function slug(Post $post){
        return view('Posts',[
            "title" => "Halaman Blog",
            "css" => "css/Home.css",
            "cssb" => "css/bootstrap.min.css",
            "js" => "js/bootstrap.min.js",
            "posts" => $post
        ]);
    }
}
