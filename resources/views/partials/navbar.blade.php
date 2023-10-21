<nav class="navbar navbar-expand-lg bg-body-tertiary fs-4 ">
    <div class="container-fluid ">
      <a class="navbar-brand" aria-current="{{ $title }}" href="#">Halaman | {{ $title }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "daftar")  ? 'active'  : ""}}" href="/">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Login")  ? 'active'  : ""}}" href="/Login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "blog")  ? 'active'  : ""}}" href="/Blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "category")  ? 'active'  : ""}}" href="/Categories">Categories</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>