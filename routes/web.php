<?php

use App\Http\Controllers\LoginController;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/registertoko', [StoreController::class, 'tampilan']);
// Route::resource('/registertoko', [StoreController::class]);

Route::get('/provinsi', [StoreController::class, 'provinsi']);
Route::get('/kota', [StoreController::class, 'kota']);
Route::get('/kecamatan', [StoreController::class, 'kecamatan']);
Route::get('/desa', [StoreController::class, 'desa']);
Route::get('/konfirmasi', [StoreController::class, 'konfirmasi']);