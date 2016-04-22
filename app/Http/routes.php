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

//Users
Route::get('/users', 'UserController@index');
Route::get('/users/{user}/edit', 'UserController@edit');
Route::patch('/users/{user}', 'UserController@update');
Route::delete('/users/{user}', 'UserController@destroy');



//Groups
Route::get('groups', 'GroupsController@index');
Route::post('groups', 'GroupsController@store');
Route::get('groups/create', 'GroupsController@create');
Route::get('groups/{group}/edit', 'GroupsController@edit');
Route::patch('/groups/{group}', 'GroupsController@update');
Route::delete('/groups/{group}', 'GroupsController@destroy');

//Categories
Route::get('categories', 'CategoryController@index');
Route::post('categories', 'CategoryController@store');
Route::get('categories/create', 'CategoryController@create');
Route::get('categories/{category}/edit', 'CategoryController@edit');
Route::patch('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');


//Bookmarks
Route::resource('bookmarks', 'BookmarkController');

//add photos to bookmarks
Route::post('{bookmarks}/photos', 'PhotosController@store');


//create categories
Route::post('category/create', 'CategoryController@create');
Route::post('category', 'CategoryController@store');


//Choose a group to be assigned
Route::get('/group/add', 'UserController@addGroupForm');
Route::post('/group/add', 'UserController@storeUserGroup');


//Searching twitter
Route::get('/search/{query}', function ($query)
{

    return Twitter::search($query);



});
