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
    return redirect('/home');
});

/* DEV */
Route::get('profile', 'AuthParseController@profile');

/* Main Routes */
Route::get('login', 'MainController@getLogin');
Route::post('login', 'MainController@setLogin');
Route::get('logout', 'MainController@setLogout');
Route::get('home', 'MainController@home');

/* ** */
Route::get('ebooks', 'HomeController@ebooks');
Route::get('ebooks/create', 'HomeController@booksCreate');
Route::get('games/ranking','HomeController@ranking');
Route::get('games/prices','HomeController@prices');
Route::get('stats/sales','HomeController@sales');
Route::get('stats/users','HomeController@users');
Route::get('/messages','HomeController@messages');
Route::get('admin/users','HomeController@usersAdmin');
Route::get('admin/roles','HomeController@roles');
Route::get('messages','HomeController@messages');