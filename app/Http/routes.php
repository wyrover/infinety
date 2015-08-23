<?php

Route::get('/', function () {
    return view('welcome');
});

get('web-development', function(){
   return view('web');
});

get('web-apps', function(){
    return view('web-apps');
});

get('contact', function(){
    return view('contact');
});

post('contact', 'ContactController@send');
