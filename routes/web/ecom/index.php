<?php

$router->group([
		'middleware' => 'auth',
        'prefix'     => '/ecom/'
    ], function () use ($router) {
		include __DIR__.'/spph/index.php';
		include __DIR__.'/bakn/index.php';
		include __DIR__.'/bak/index.php';
		include __DIR__.'/sp3/index.php';
		include __DIR__.'/spk/index.php';
		include __DIR__.'/kontrak/index.php';
});
