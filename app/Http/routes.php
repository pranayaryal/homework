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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/users', 'UserController@index');

Route::resource('user','UsersController');

Route::post('/bookmarks', 'BookmarkController@create');


Route::post('groups', 'GroupsController@store');
Route::get('groups/create', 'GroupsController@create');

Route::post('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');