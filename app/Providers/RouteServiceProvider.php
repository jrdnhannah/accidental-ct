<?php

namespace NhsHd\AccidentalCt\Laravel\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'NhsHd\AccidentalCt\Laravel\Http\Controllers';

    private $routingFiles = [
        'api',
        'web',
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @param Router $router
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(
            ['namespace' => $this->namespace],
            function (Router $router) {
                foreach ($this->routingFiles as $routeFile) {
                    require app_path("Http/Routes/{$routeFile}.php");
                }
            }
        );
    }
}
