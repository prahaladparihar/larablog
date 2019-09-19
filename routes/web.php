<?php

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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about'); 
Route::get('/services', 'PagesController@services');


Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/fav', 'Api\LikeController@favorite');


// api
Route::post('/post/like', 'Api\LikeController@upvote');

Route::post('/post/dislike', 'Api\LikeController@downvote');

Route::post('/post/toggleFavorite', 'Api\LikeController@toggleFavorite');