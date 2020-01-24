<?php

namespace TresLineas\ArgentineCities;

use Illuminate\Support\ServiceProvider;

class ArgentineCitiesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
    }

    public function register()
    {
    }
}