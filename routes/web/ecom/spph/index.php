<?php

$router->group([
		'middleware' => 'auth',
        'prefix'     => '/spph/'
    ], function () use ($router) {

        Route::get('/index', function () {
            return view('components.modules.ecom.spph.index');
        });
});
