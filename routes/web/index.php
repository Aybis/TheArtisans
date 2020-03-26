<?php

$router->group([
		// 'middleware' => 'web',
    ], function () use ($router) {

		include __DIR__.'/ecom/index.php';
		include __DIR__.'/legal/index.php';
		include __DIR__.'/mitras/index.php';
		include __DIR__.'/users/index.php';
		include __DIR__.'/auth/index.php';
		include __DIR__.'/main/index.php';
});
