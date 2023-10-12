<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  {{-- link CSS native --}}
  <link rel="stylesheet" href="{{ asset($css) }}">
  {{-- Link CSS Bootstrap 5 --}}
  <link rel="stylesheet" href="{{ asset($cssb) }}">
</head>
<body class="img-fluid">
<nav class="navbar navbar-expand-lg bg-body-tertiary fs-4 ">
    <div class="container-fluid ">
      <a class="navbar-brand" aria-current="{{ $title }}" href="#">Halaman | {{ $title }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active" href="/">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Categories">Categories</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<section>
    @yield('container')
</section>
<footer></footer>
{{-- Popper.JS --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
{{-- Link Javascript Boostrap 5 --}}
<script src="{{ asset($js) }}"></script>
</body>
</html>