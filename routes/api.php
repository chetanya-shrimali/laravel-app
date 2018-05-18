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

Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@index');
//add new article
Route::post('article', 'ArticleController@store');
//update existing article
Route::put('articles', 'ArticleController@store');
Route::get('articles/{id}', 'ArticleController@destroy');
