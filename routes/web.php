<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

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


Route::resource('mahasiswa', mahasiswaController::class);

Route::get('/',[Controller::class,'index']);
Route::get('/home',[Controller::class,'home']);
Route::get('/profil',[Controller::class,'profil']);
Route::get('/portofolio',[Controller::class,'Portofolio']);
