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
Route::get('post/avg-ratings', 'PostsController@AverageRating');
Route::get('users/{user}/post', 'PostsController@byUser');
Route::get('post/{post}', 'PostsController@withRatings');
Route::get('post/rating/{rt}', 'PostsController@aboveRating');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


