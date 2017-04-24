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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::post('/save-post', ['as' => 'save-post', 'uses' => 'IndexController@save']);
Route::get('/congrats', ['as' => 'congratulations', 'IndexController@congrats']);
