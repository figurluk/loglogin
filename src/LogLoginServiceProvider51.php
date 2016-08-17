<?php

namespace Figurluk\LogLogin;

use Illuminate\Support\ServiceProvider;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:30.
 */
class LogLoginServiceProvider51 extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/http/routes.php';
        $this->app->make('Figurluk\LogLogin\Controllers\LogLoginController');
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'loglogin');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/figurluk/loglogin'),
        ],'views');
    }
}
