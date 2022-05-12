<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data-produk', 'ProductController@indexAPI')->name('data-produk');

Route::post('/data-produk/tambah', 'ProductController@storeAPI');

Route::put('/data-produk/ubah/{id}', 'ProductController@updateAPI');

Route::delete('/data-produk/hapus/{id}', 'ProductController@destroyAPI');