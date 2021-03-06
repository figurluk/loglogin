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
        include __DIR__.'/routes.php';
        $this->app->make('Figurluk\LogLogin\LogLoginController');
    }

    public function boot()
    {
    }
}
