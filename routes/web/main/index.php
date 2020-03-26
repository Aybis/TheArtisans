<?php

$router->group([
		'middleware' => 'auth',
    ], function () use ($router) {

        Route::get('/home', function(){
            return view('home');
        });
        Route::get('/', function(){
            return view('home');
        });
});
