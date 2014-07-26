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

Route::get('php/variable_variable', 'PhpController@variableVariable');

Route::get('board', 'BoardController@freePostingList');

Route::get('board/free_posting_list', 'BoardController@freePostingList');

Route::get('board/free_posting_view', 'BoardController@freePostingView');

Route::get('board/free_posting_regist', 'BoardController@freePostingRegist');

Route::post('board/free_posting_regist_save', 'BoardController@freePostingRegistSave');

Route::get('board/free_posting_modify', 'BoardController@freePostingModify');

Route::post('board/free_posting_modify_save', 'BoardController@freePostingModifySave');

Route::get('board/free_posting_delete', 'BoardController@freePostingDelete');

Route::post('board/free_posting_delete_save', 'BoardController@freePostingDeleteSave');

Route::post('board/free_posting_comment_regist_save', 'BoardCommentController@freePostingCommentRegistSave');

Route::get('board/free_posting_comment_delete', 'BoardCommentController@freePostingCommentDelete');

Route::post('board/free_posting_comment_delete_save', 'BoardCommentController@freePostingCommentDeleteSave');

Route::get('about', 'AboutController@introduction');

Route::get('about/introduction', 'AboutController@introduction');

Route::get('about/contact', 'AboutController@contact');