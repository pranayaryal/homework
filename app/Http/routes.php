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

Route::get('/users/{user}/edit', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');

Route::resource('user','UsersController');




Route::get('groups', 'GroupsController@index');
Route::post('groups', 'GroupsController@store');
Route::get('groups/create', 'GroupsController@create');
Route::get('groups/{group}/edit', 'GroupsController@edit');
Route::patch('/groups/{group}', 'GroupsController@update');
Route::delete('/groups/{group}', 'GroupsController@destroy');

Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@store');
Route::get('categories/create', 'CategoryController@create');
Route::get('categories/{category}/edit', 'CategoryController@edit');
Route::patch('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');

Route::resource('bookmarks', 'BookmarkController');

Route::post('{bookmarks}/photos', 'PhotosController@store');



Route::post('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');
