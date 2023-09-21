@extends('layouts.main')

@section('container')
{{-- Gambar --}}
    <div class="row mb-4">
        <div class="col-md-12 d-flex justify-content-center mt-4">
            <img src="img/coding.jpg" alt="" class="img-fluid rounded-circle img-thumbnail" style="width: 80px;">
        </div>
    </div>
{{-- teks New Account --}}
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">New <span class="text-white">Account</span></h1>
        </div>
    </div>
{{-- Form --}}
    <div class="row d-flex justify-content-center mt-5 text-white">
        <div class="col-md-6 text-center">
            <form action="#" method="post" class="" style="height: 200px;">
                <label for="username" class="fw-bold">Username</label>
                <input type="text" class="form-control form-control-lg" placeholder="Masukkan Nama anda!" id="username" name="username">
                <label for="password" class="fw-bold">Password</label>
                <input type="password" class="form-control form-control-lg" placeholder="Masukkan Password anda!" id="password" name="password">
                <label for="kpassword" class="fw-bold">Konfirmasi Password</label>
                <input type="password" class="form-control form-control-lg" placeholder="Masukkan Konfirmasi Password!" id="kpassword" name="kpassword">
                <button class="btn btn-primary mt-3" type="submit">
                    <a href="/Login" class="text-white" style="text-decoration: none">Daftar!</a>
                </button>
            </form>
        </div>
    </div>
@endsection