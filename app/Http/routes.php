<?php

Route::get('/', function () {
    return view('welcome');
});

get('web-development-sheffield', function(){
   return view('web');
});

get('web-apps', function(){
    return view('web-apps');
});

get('contact', function(){
    return view('contact');
});

post('contact', 'ContactController@send');


get('blog', 'BlogController@index');
get('blog/{title}', 'BlogController@show');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    get('dashboard', function(){
       return view('dashboard');
    });
    get('home', function(){
        return view('dashboard');
    });
	resource('posts', 'PostsController');

});


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');