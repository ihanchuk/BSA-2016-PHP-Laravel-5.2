<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get("/shorten","ShortUrlController@indexAction");
//Route::get("/phone","PhoneController@indexAction");

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@indexAction']);
Route::get('/shorten', ['as' => 'shortent', 'uses' => 'ShortUrlController@indexAction']);
Route::get('/phone', ['as' => 'phone', 'uses' => 'PhoneController@indexAction']);