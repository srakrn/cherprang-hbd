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

Route::get('/', 'MainController@index');
Route::get('/new', 'MainController@newPostPage');
Route::post('/new', 'MainController@savePost');
Route::get('/success', 'MainController@successPost');
Route::get('/manage', 'MainController@managePage');
Route::post('/manage', 'MainController@updatePost');