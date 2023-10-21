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

  @include('partials/navbar')
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