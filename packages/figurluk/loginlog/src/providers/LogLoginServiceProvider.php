<?php

namespace figurluk\loginlog\providers;
use Illuminate\Support\ServiceProvider;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:30
 */
class LogLoginServiceProvider extends ServiceProvider
{

    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
    }


    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/loglogin.php' => config_path('loglogin.php')
        ], 'config');

        $this->publishes([
            __DIR__ . '/../migrations/' => database_path('migrations')
        ], 'migrations');
    }

}