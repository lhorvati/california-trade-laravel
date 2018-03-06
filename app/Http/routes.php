<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WebController@homepage');

Route::get('/articles/{group?}', 'WebController@articles_groups');
Route::get('/articles/{group}/{subgroup}', ['as' => 'articles_list', 'uses' => 'WebController@articles_list']);
Route::get('/article/{group}/{article_key}', 'WebController@articles_details');

Route::get('/asortiman', 'WebController@asortiman');
Route::get('/about', 'WebController@about');
Route::get('/partners', 'WebController@partners');
Route::get('/contact', 'WebController@contact');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
