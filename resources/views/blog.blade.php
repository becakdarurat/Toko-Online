@extends('layouts.blog_main')

@section('container')
<div class="card mb-3">
  <img src="https://source.unsplash.com/random/1200x400?" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->User->name }}</h3>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <p class="card-text">
      By. <a href="#" class="text-decoration-none ">{{ $posts[0]->User->name }}</a>
      <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
    </p>
  </div>
</div>

  @foreach ($posts as $post)
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>By. <a href="" class="text-decoration-none ">{{ $post->User->name }}</a></p>
  @endforeach

@endsection
