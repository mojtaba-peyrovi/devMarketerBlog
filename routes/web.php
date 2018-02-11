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
Route::get('blog/{slug}','blogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');
Route::get('/', 'pageController@getIndex');
Route::get('/about','pageController@getAbout');
Route::get('/contact','pageController@getContact');
Route::resource('posts','postController');
