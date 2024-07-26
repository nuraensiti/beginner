<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('berita',[BeritaController::class,'index']);
Route::post('berita/tambah',[BeritaController::class,'tambah']);
Route::post('berita/hapus',[BeritaController::class,'hapus']);
Route::post('berita/edit',[BeritaController::class,'edit']);




Route::get('kontak',[KontakController::class,'index']);
Route::post('kontak/tambah',[KontakController::class,'tambah']);
Route::post('kontak/hapus',[KontakController::class,'hapus']);
Route::post('kontak/edit',[KontakController::class,'edit']);



Route::get('profile',[ProfileController::class,'index']);
Route::post('profile/tambah',[ProfileController::class,'tambah']);
Route::post('profile/hapus',[ProfileController::class,'hapus']);
Route::post('profile/edit',[ProfileController::class,'edit']);


//define a get route for the login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login',[LoginController::class, 'login'])->name('login');
Route::get('logout',[LoginController::class, 'logout'])->name('logout');




Route::get('dashboard', function () {
    return view('Layout');
});
