@extends('layouts.blog_main')


@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>{{ $posts->title }}</h1>
                <p class="card-text">
                    By. <a href="#" class= "text-decoration-none ">{{ $posts->User->name }}</a>
                    <small class="text-body-secondary">{{ $posts->created_at->diffForHumans() }}</small>
                </p>
                <img src="https://source.unsplash.com/random/1200x400?" class="card-img-top" alt="...">
                <p>{!! $posts->body !!}</p>
                <a href="/Blog">Back to Blog</a>
            </div>
        </div>
    </div>
@endsection