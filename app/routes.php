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

Route::get('/', 'PhpController@install');

Route::get('php', 'PhpController@install');

Route::get('php/install', 'PhpController@install');

Route::get('php/basic_structure', 'PhpController@basicStructure');

Route::get('about', 'AboutController@introduction');

Route::get('about/introduction', 'AboutController@introduction');

Route::get('about/contact', 'AboutController@contact');
