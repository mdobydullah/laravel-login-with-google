<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/google-login', 'GoogleAuthController@redirectToProvider');
Route::get('/callback', 'GoogleAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
