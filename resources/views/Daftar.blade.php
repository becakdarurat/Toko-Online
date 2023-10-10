@extends('layouts.blog_main')

@section('container')
<div class="container d-flex justify-content-center align-items-center bg-success" id="container">
    <form action="" id="Form" class="d-flex flex-wrap fs-5 ">
        <label for="username" class="text-center">Username</label>
        <input type="text" name="" id="username" placeholder="Masukkan Username" name="username" class="form-control">
        <label for="email" class="text-center">Email</label>
        <input type="text" name="" id="email" placeholder="Masukkan Email Anda" name="email" class="form-control">
        <label for="password">Password</label>
        <input type="text" name="" id="password" placeholder="Masukkan Password" name="password" class="form-control">
        <label for="kpassword">Konfirmasi Password</label>
        <input type="text" name="" id="kpassword" placeholder="Masukkan Konfirmasi Password" name="kpassword" class="form-control">
        <label for="pendidikan">Pendidikan Terakhir</label>
        <select name="pendidikan" id="pendidikan" class="form-control">
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
            <option value="S3">S3</option>
        </select>
        <div class="mb-3 form-check" style="width: 100%;">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary mx-auto">Submit</button>
    </form>
</div>
@endsection