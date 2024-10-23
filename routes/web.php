<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

//Route::get('/produk', function(){
  //    return view('produk');
//});

Route::get('/login' , [LoginController::class , 'index']);
Route::post('/login' , [LoginController::class , 'authenticate']);

Route::resource('produk', ProdukController::class);
Route::resource('pelanggan', PelangganController::class);
Route::get('/register' , [RegisterController::class , 'index']);