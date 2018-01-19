<?php

namespace Sarfraznawaz2005\Applog;

use Illuminate\Support\ServiceProvider;

class ApplogServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'applog');

        $this->publishes([
            __DIR__ . '/views' => base_path('/resources/views/vendor/applog'),
        ], 'views');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}