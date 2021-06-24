<?php

declare(strict_types=1);

namespace JustSteveKing\Lapi;

use Illuminate\Events\EventServiceProvider;
use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Log\LogServiceProvider;
use Illuminate\Support\ServiceProvider;
use JustSteveKing\Lapi\Routing\RoutingServiceProvider;

class Application extends LaravelApplication
{
    /**
     * Register all of the base service providers.
     *
     * @return void
     */
    protected function registerBaseServiceProviders(): void
    {
        $this->register(new EventServiceProvider($this));
        $this->register(new LogServiceProvider($this));
        $this->register(new RoutingServiceProvider($this));
    }
}
