<?php

declare(strict_types=1);

namespace JustSteveKing\Lapi\Routing;

use Illuminate\Routing\Contracts\ControllerDispatcher as ControllerDispatcherContract;
use Illuminate\Routing\ControllerDispatcher;
use Illuminate\Routing\Router;
use Illuminate\Routing\RoutingServiceProvider as LaravelRoutingServiceProvider;

class RoutingServiceProvider extends LaravelRoutingServiceProvider
{
    /**
     * Register the router instance.
     *
     * @return void
     */
    protected function registerRouter()
    {
        $this->app->singleton('router', function ($app) {
            return new Router($app['events'], $app);
        });
    }

    /**
     * Register the controller dispatcher.
     *
     * @return void
     */
    protected function registerControllerDispatcher()
    {
        $this->app->singleton(ControllerDispatcherContract::class, function ($app) {
            return new ControllerDispatcher($app);
        });
    }
}
