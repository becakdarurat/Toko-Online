@extends('layouts.blog_main')


@section('container')
  {{-- akan true jika ada datanya , 1 jiak false 0 --}}
  @if($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/random/1200x400?" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title">{{ $posts[0]->User->name }}</h3>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <p class="card-text">
      By. <a href="#" class="text-decoration-none ">{{ $posts[0]->User->name }}</a>
      <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
    </p>
    <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
  </div>
</div>
@else 
  <p class="text-center fs-4">No Post Found</p>
@endif

<div class="container">
  <div class="row">
    @foreach ($posts as $post)
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="https://source.unsplash.com/random/500x500?" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title">{{ $post->User->name }}</h5>
          <p class="card-text">{{ $post->excerpt }}</p>
          <a href="#" class="btn btn-primary">Read More</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>



@endsection
