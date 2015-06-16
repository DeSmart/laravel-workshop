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

Route::get('/', 'WelcomeController@index');

Route::get('/hello', function () {
    return 'Hello, World';
});

Route::get('/example-view', function () {
    return view('exampleView');
});

/**
 * Trasy dotyczące PostController.
 */
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts/create', 'PostController@store');
Route::get('/posts/{id}', 'PostController@edit');
Route::post('/posts/{id}', 'PostController@update');
Route::get('/posts/{id}/destroy', 'PostController@destroy');
