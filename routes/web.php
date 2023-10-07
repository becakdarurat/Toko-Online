<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProfileController::class,'Daftar']);

Route::get('/Login',[ProfileController::class,'Login']);

Route::get('/Home',[ProfileController::class,'Home']);

Route::get('/Blog',[PostController::class,'index']);