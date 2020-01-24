<?php

use Illuminate\Http\Request;

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
Route::apiResource('artikel','ArtikelAPIController');
Route::apiResource('kategori_artikel','KategoriArtikelAPIController');

Route::apiResource('berita','BeritaAPIController');
Route::apiResource('kategori_berita','KategoriBeritaAPIController');

Route::apiResource('galeri','GaleriAPIController');
Route::apiResource('kategori_galeri','KategoriGaleriAPIController');

Route::apiResource('pengumuman','PengumumanAPIController');
Route::apiResource('kategori_pengumuman','KategoriPengumumanAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
