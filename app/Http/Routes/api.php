<?php declare(strict_types=1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(
    [
        'prefix'     => 'api',
        'namespace'  => 'Api',
        'middleware' => ['api'],
    ],
    function (Router $router) {
        $router->get('/submissions', ['uses' => 'ResultsApiController@showAllResults']);
    }
);
