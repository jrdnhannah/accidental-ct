<?php declare(strict_types = 1);

use Illuminate\Routing\Router;

/** @var Router $router */

$router->get('/', function () {
    return view('welcome');
});

$router->group(
    [
        'prefix'     => 'auth',
        'namespace'  => 'Auth',
        'middleware' => ['web'],
    ],
    function (Router $router) {
        $router->get('/register', ['uses' => 'RegisterController@showRegistrationForm']);
        $router->get('/login',    ['uses' => 'LoginController@showLoginForm']);

        $router->post('/register', ['uses' => 'RegisterController@register', 'as' => 'auth.post_register']);
        $router->post('/login',    ['uses' => 'LoginController@login', 'as' => 'auth.post_login']);
    }
);

$router->group(
    [
        'prefix'     => 'dosing',
        'namespace'  => 'CTDosing',
        'middleware' => ['web'],
    ],
    function (Router $router): void {
        $router->get('/request', ['uses' => 'DoseRequestController@showDosingRequestForm', 'as' => 'dose_request.form']);
        $router->post('/submit', ['uses' => 'DoseRequestController@submitDosingRequest', 'as' => 'dose_request.submit']);
        $router->get('/results', ['uses' => 'DoseRequestController@showDosingRequests', 'as' => 'dose_request.results']);
    }
);
