<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'PhpController@install');

Route::get('php', 'PhpController@install');

Route::get('php/install', 'PhpController@install');

Route::get('php/simple_example', 'PhpController@simpleExample');

Route::get('php/basic_variable', 'PhpController@basicVariable');

Route::get('php/array_variable', 'PhpController@arrayVariable');

Route::get('php/global_variable', 'PhpController@globalVariable');

Route::get('php/static_variable', 'PhpController@staticVariable');

Route::get('board', 'BoardController@freePostingList');

Route::get('board/free_posting_list', 'BoardController@freePostingList');

Route::get('about', 'AboutController@introduction');

Route::get('about/introduction', 'AboutController@introduction');

Route::get('about/contact', 'AboutController@contact');