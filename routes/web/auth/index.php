<?php

$router->group([
    'middleware' => 'auth',
    'prefix'     => '/user'
], function () use ($router) {

    // Route Users Form
    Route::get('/','main\UserController@index');

    // Admin
    Route::get('/add','main\UserController@create');

    // isSelf sama admin
    Route::get('/edit','main\UserController@edit');


});
