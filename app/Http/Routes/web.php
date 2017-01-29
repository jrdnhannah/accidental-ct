<?php declare(strict_types = 1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->get('/', function () {
    return view('welcome');
});

$router->group(
    [
        'prefix'    => 'auth',
        'namespace' => 'Auth',
    ],
    function (Router $router) {
        $router->get('/register', ['uses' => 'RegisterController@showRegistrationForm']);
        $router->get('/login',    ['uses' => 'LoginController@showLoginForm']);

        $router->post('/register', ['uses' => 'RegisterController@register']);
        $router->post('/login',    ['uses' => 'LoginController@login']);
    }
);

$router->group(
    [
        'prefix'    => 'dosing',
        'namespace' => 'CTDosing',
    ],
    function (Router $router): void {
        $router->get('/request', ['uses' => 'DoseRequestController@showDosingRequestForm', 'as' => 'dose_request.form']);
    }
);
