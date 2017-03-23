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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', 'Auth\LoginController@logout');

// Nekko Shop
Route::get('/home/sell', 'NekkoController@create');
Route::get('/buy', 'NekkoController@show');
Route::post('home', 'HomeController@store');
Route::get('home/{id}', 'HomeController@show');

Route::get('/home/{id}/edit', 'HomeController@showEdit');
Route::post('/home/edit/{id}', 'HomeController@edit');

Route::get('/home/{id}/delete', 'HomeController@delete');

// Comments
Route::post('home/{id}/comments', 'CommentsController@addComment');


// index in Students Table
Route::get('index', 'StudentsController@index');
