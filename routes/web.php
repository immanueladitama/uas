<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\CaraController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KoorController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
return view('dashboard');})->name('dashboard');





Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//dashboard
Route::get('/mhs/login', [MahasiswaController::class,'index']);
//Route::get('/tata', [CaraController::class,'index']);
Route::get('/contact', [contactController::class,'index']);


//mhs
Route::get('/layanan/suratket/addMhs', [MahasiswaController::class,'tambah']);
//Route::get('/', [MahasiswaController::class,'tambah']);
Route::get('/layanan/suratketerangan', [MahasiswaController::class,'formSKP']);
//Route::get('/mhs/home', [MahasiswaController::class,'home']);
Route::get('/layanan/suratketerangan/simpanSKP', [MahasiswaController::class,'simpanSKP']);
Route::get('/layanan/kp', [MahasiswaController::class,'formKP']);
Route::get('/layanan/praKp', [MahasiswaController::class,'formPraKP']);






//dosen
Route::get('/Dosen/login', [DosenController::class,'index']);
Route::get('/Dosen/home', [DosenController::class,'home'])->middleware(Authenticate::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dosen/home', function () {
    return view('home');})->name('home');


//koor
Route::get('/koor/login', [KoorController::class,'index']);
