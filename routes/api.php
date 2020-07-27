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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Ak chcem fingovane
Route::get('/users', function () {
    return factory('App\User', 3)->make();
});

Route::get('/posts', function () {
    return factory('App\Post', 20)->make();
});




//SQLite databazy

Route::namespace('Api')->group(function () {
    Route::get('/users', 'UsersController@index');
    Route::get('/users/{user}', 'UsersController@show');
});
*/
/*
Route::namespace('Api')->group(function () {
    Route::get('/posts', 'PostsController@index');
    Route::get('/posts/{post}', 'PostsController@show');
});
*/

Route::apiResources([
    'posts' => 'Api\PostsController',


]);
