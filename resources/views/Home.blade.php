<!doctype html>
<html lang="en">

<head>
  <title>Toko-Online</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSS Native --}}
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    {{-- Link fevicon Bootstrap 5 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

</head>

<body class="bg-white">
<div class="container-fluid">


    {{-- Header Start --}}
  <header id="Home">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-around">
      <h1>Sofyan Tanjung</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-evenly" id="navbarNav" style="transform: translateY(-10px)">
      <ul class="d-flex" style="transform: translateX(70px)">
        <li><a href="#Profile">Profile</a></li>
        <li><a href="#Skills">Skills</a></li>
        <li><a href="#Project">Project</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
      <p>
        <a href="/Login" style="margin-left: 250px;" class="btn btn-warning">Log-in</a>
      </p>
      </div>
    </nav>
  </header>
    {{-- Header end --}}

    {{-- start main Content--}}
  <main>
    <section class="section_content text-center">
      <h2 >Saya Seorang fullstack-developer</h2>
      <p>saya telah belajar programmer 2 thn , dan saya jatuh cinta serta passionable di bidang ini</p>
      <button class="btn btn-warning rounded-pill">Pelajari</button>
    </section>
  </div>
</main>
{{-- start end --}}

  

    {{-- section start Gelombang --}}
    <section class="section_gelombang container-fluid p-0 ">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="dark" fill-opacity="1" d="M0,32L24,32C48,32,96,32,144,80C192,128,240,224,288,261.3C336,299,384,277,432,245.3C480,213,528,171,576,160C624,149,672,171,720,165.3C768,160,816,128,864,122.7C912,117,960,139,1008,138.7C1056,139,1104,117,1152,96C1200,75,1248,53,1296,58.7C1344,64,1392,96,1416,112L1440,128L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </section>
    {{-- section end Gelombang --}}
    


    {{-- section start Profile --}}
    <section class="section_profil text-white text-center" style="background-color: black" id="Profile">
      <h2>Profile</h2>
      <p>Mengenal saya secara singkat</p>
      <div class="row" style="margin-top: 60px">
        <div class="col-md-5">
          <img src="img/bandung.jpg" alt="" class="img-fluid" style="width: 400px;">
        </div>
        <div class="col-md-6">
          <h1>Menelusuri Dunia Pemrograman: Cerita Dua Tahun Belajar Otodidak</h1>
          <p>Sekitar dua tahun yang lalu, saya memulai petualangan belajar pemrograman secara otodidak. Penuh semangat dan rasa ingin tahu, saya memasuki dunia yang terlihat kompleks namun menarik ini.
          Pada awalnya, saya memulai dengan dasar-dasar pemrograman seperti HTML, CSS, dan JavaScript. Saya belajar bagaimana membangun struktur halaman web, mendesain tampilan yang menarik, dan memberikan interaktivitas dengan JavaScript.
          Melihat banyaknya bahasa pemrograman yang ada, saya memutuskan untuk mendalami salah satunya. Pilihan saya jatuh pada PHP karena fleksibilitasnya dan penggunaan yang luas. Saya belajar tentang kontrol alur, struktur data, dan pemrograman berorientasi objek.</p>
        </div>
      </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,256L48,256C96,256,192,256,288,256C384,256,480,256,576,256C672,256,768,256,864,218.7C960,181,1056,107,1152,85.3C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    {{-- section end Profile --}}

    {{-- Section start skill --}}
  <section class="section_Skill mt-5" id="Skills">
    <div class="container">
      <h1 class="fw-bold text-center" style="letter-spacing:4px;">Skills</h1>
      <p class="text-center text-secondary">beberapa kemampuan saya</p>
      <div class="row justify-content-evenly text-center">
        <div class="col-md-2 p-3">
         <img src="img/LogoHTML5.png" alt="logo-html5" class="img-fluid rounded-circle img-thumbnail" style="width: 100px;">
         <p class="fw-bold">HTML</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/logoCSS.webp" alt="logo-CSS" class="img-fluid rounded-circle img-thumbnail" style="width: 100px;">
          <p class="fw-bold">CSS</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/logoJAVASCRIPT.png" alt="logo-Javascript" class="img-fluid rounded-circle img-thumbnail" style="width: 170px;">
          <p class="fw-bold mt-2">JavaScript</p>
        </div>
      </div>
      <div class="row justify-content-evenly text-center mt-4">
        <div class="col-md-2 p-3">
          <img src="img/logoGIT.png" alt="logo-Git" class="img-fluid rounded-circle img-thumbnail" style="width: 100px;">
          <p class="fw-bold mt-2">GIT</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/logoSAS.png" alt="logo-SASS" class="img-fluid rounded-circle img-thumbnail" style="width: 100px; height: 95px background-color: lightgray;">
          <p class="fw-bold mt-2">SASS</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/logoGithub.png" alt="logo-Github" class="img-fluid rounded-circle img-thumbnail" style="width: 100px; background-color: lightgray;">
          <p class="fw-bold mt-2">Github</p>
        </div>
      </div>
      <div class="row justify-content-evenly text-center mt-4">
        <div class="col-md-2 p-3">
          <img src="img/logoPHP.jpg" alt="logo-PHP" class="img-fluid rounded-circle img-thumbnail" style="width: 100px; background-color: lightgray;">
          <p class="fw-bold mt-2">PHP</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/logoLaravell.png" alt="logo-Laravel" class="img-fluid rounded-circle img-thumbnail" style="width: 120px; height: 95px; background-color: lightgray;">
          <p class="fw-bold mt-2">Laravel</p>
        </div>
        <div class="col-md-2 p-3">
          <img src="img/React.webp" alt="logo-ReactJS" class="img-fluid rounded-circle img-thumbnail" style="width: 100px; background-color: lightgray;">
          <p class="fw-bold mt-2">React-JS</p>
        </div>
      </div>
    </div>
  </section>
    {{-- Section end skill --}}

    {{-- Section start Projects --}}
    <div class="section_projects" id="Project">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-12">
            <h4>Projects</h4>
            <p>Beberapa porject bikinan saya.</p>
          </div>
          <div class="row text-center justify-content-center">
            <div class="col-md-5">
              <img src="img/GameSuitJawa.png" alt="" class="img-fluid">
              <h3>Game Suit jawa</h3>
              <p>Membuat game suit jawa, dengan memanfaatkan bilangan random, dan if else atau ternary Operator supaya gamenya bekerja</p>
            </div>
            <div class="col-md-5">
              <img src="img/ProfilePribadi.png" alt="" class="img-fluid">
              <h3>Profil-Pribadi</h3>
              <p>membuat profil pribadi menggunakan Bootstrap5</p>
            </div>
            <div class="col-md-5 mt-2">
              <img src="img/CRUD.png" alt="" class="img-fluid">
              <h3>Creat,Read,Updae,Delete</h3>
              <p>memanfaatkan bahasa SQL, dan DBMS mysql</p>
            </div>
            <div class="col-md-5 mt-2">
              <img src="img/WebsiteCoffe.png" alt="" class="img-fluid">
              <h3>Coffe Shop</h3>
              <p>Membuat UI coffe Shop</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- Section end Projects --}}

    <div class="row mt-5">
      <div class="col-md-12 text-center">
        <h1>Hubungin saya</h1>
        <p class="text-secondary">Contact me</p>
      </div>
    </div>

    {{-- Section Start Kontak --}}
    <section class="section_Kontak mt-5" id="Contact">
      <div class="container" style="background-color: azure !important">
        <div class="row justify-content-center border border-primary">
          <div class="col-md-5 p-4 border-end border-secondary">
            <h1>Contact</h1>
            <p class="text-secondary">Beberapa cara menghubungi saya</p>
            <ul class="list-unstyled">
              <li>
                <a href="" class="d-flex text-decoration-none text-dark fw-bold">
                  <i class="bi bi-envelope" style="font-size: 40px; padding: 10px"></i>
                  <span style="margin-top: 20px">Mail</span>
                  <p style="transform: translateY(40px) translateX(-31px)">sofyant757@gmail.com</p>
                </a>
                <a href="" class="d-flex text-decoration-none text-dark fw-bold">
                  <i class="bi bi-envelope" style="font-size: 40px; padding: 10px"></i>
                  <span style="margin-top: 20px">Phone</span>
                  <p style="transform: translateY(40px) translateX(-47px)">0895415009885</p>
                </a>
                <a href="" class="d-flex text-decoration-none text-dark fw-bold">
                  <i class="bi bi-envelope" style="font-size: 40px; padding: 10px"></i>
                  <span style="margin-top: 20px">Instagram</span>
                  <p style="transform: translateY(40px) translateX(-76px)">becakdarurat</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-5 p-2">
            <form method="post" action="#" class="fw-bold">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername" name="username" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputKPassword1" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" id="exampleInputKPassword1" name="kpassword" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingatkan saya!</label>
              </div>
              <button type="submit" class="btn btn-primary mx-auto form-control">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    {{-- Section End Kontak --}}


<footer class="bg-success mt-5 text-center d-flex justify-content-center">
  <button class="btn btn-danger p-2" style="margin-right: 15px"><a href="#Home" class="text-white text-decoration-none">Home</a></button>
  <button class="btn btn-danger p-2" style="margin-right: 15px"><a href="#Profile" class="text-white text-decoration-none">Profile</a></button>
  <button class="btn btn-danger p-2" style="margin-right: 15px"><a href="#Skills" class="text-white text-decoration-none">Skills</a></button>
  <button class="btn btn-danger p-2" style="margin-right: 15px"><a href="#Project" class="text-white text-decoration-none">Project</a></button>
  <button class="btn btn-danger p-2" style="margin-right: 15px"><a href="#Contact" class="text-white text-decoration-none">Contact</a></button>
</footer>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>