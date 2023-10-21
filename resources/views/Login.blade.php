@extends('layouts.blog_main')

@section('container')
    <div class="container-fluid" style=" height: 100vh;" id="kon">
        <div class="row d-flex justify-content-center" style="margin-top: 120px;">
            <div class="col-md-4 bg-white" style="border: 2px solid rgb(13, 219, 219); height: 400px; border-radius: 15px">
              <h2 class="text-center text-primary" style="margin-top: 30px">Silahkan masukkan</h2>
              <p class="text-center"><span class="text-success fw-bold">Username</span> dan <span class="fw-bold text-dark">Password</span></p>
              <form  style="margin-top: 60px" method="post" action="/Login">
                @csrf
                <label for="username">Username</label>
                <input class="form-control" type="text" id="username" placeholder="Masukkan Username Anda!" name="username">
                <label for="password">Password</label>
                <input class="form-control" type="text" placeholder="Masukkan Password Anda!" id="password" name="password">
                <button type="submit" class="btn btn-success mt-3 d-flex mx-auto">Masuk!</button>
              </form>
            </div>
        </div>
    </div>
@endsection