<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\TokenController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('token/create', [TokenController::class, 'create']);
Route::post('token', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
Route::get('token', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
Route::get('buku/{token}', [BukuController::class, 'index']);
Route::get('buku', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
Route::post('buku/add/{token}', [BukuController::class, 'create']);
Route::post('buku', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
Route::put('buku/update/{token}/{kode}', [BukuController::class, 'update']);
Route::put('buku', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
Route::delete('buku/delete/{token}/{kode}', [BukuController::class, 'delete']);
Route::delete('buku', function () {
    return ('Selamat datang di api buku, untuk menggunakan api akses http://127.0.0.1/api/buku/apikeyanda'); 
});
