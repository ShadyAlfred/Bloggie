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
Route::resource('users', 'UsersController');
// Route::get('/users', 'UsersController@index');
// Route::get('/users/{user}', 'UsersController@show');
// Route::delete('/users/{user}', 'UsersController@destroy');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
