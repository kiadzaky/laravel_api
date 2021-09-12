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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//get data semua
Route::get('article', 'ArticleController@index');
// Membuat Artikel Baru
Route::post('article/store', 'ArticleController@store');
// Mengambil Satu Artikel
Route::get('article/{id}', 'ArticleController@show');
// Mengubah Artikel
Route::post('article/update', 'ArticleController@update');
// Menghapus Artikel
Route::delete('article/delete/{id}', 'ArticleController@destroy');
