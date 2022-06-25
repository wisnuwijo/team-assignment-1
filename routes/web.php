<?php

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth', 'prefix' => '/users'], function() {
    Route::get('/', 'UserController@index');
    Route::get('/add', 'UserController@add');
    Route::post('/store','UserController@store');
    Route::get('/delete/{id}', 'UserController@delete');
    Route::post('/{id}', 'UserController@update');
    Route::get('/{id}', 'UserController@edit');
});
