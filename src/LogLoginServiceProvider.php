<?php

namespace Figurluk\LogLogin;

use Figurluk\LogLogin\Models\LogLoginItem;
use Illuminate\Support\ServiceProvider;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:30.
 */
class LogLoginServiceProvider extends ServiceProvider
{
    /**
     * Actual provider.
     *
     * @var \Illuminate\Support\ServiceProvider
     */
    protected $provider;

    /**
     * Create a new service provider instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);

        $this->provider = $this->getProvider();
    }

    /**
     * Return ServiceProvider according to Laravel version.
     *
     * @return \Intervention\Image\Provider\ProviderInterface
     */
    private function getProvider()
    {
        if (version_compare(\Illuminate\Foundation\Application::VERSION, '5.1', '>=')
            && version_compare(\Illuminate\Foundation\Application::VERSION, '5.2', '<')
        ) {
            $provider = '\Figurluk\LogLogin\LogLoginServiceProvider51';
        } else {
            $provider = '\Figurluk\LogLogin\LogLoginServiceProvider52';
        }

        return new $provider($this->app);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        return $this->provider->register();
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/loglogin.php' => config_path('loglogin.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/migrations/' => database_path('migrations'),
        ], 'migrations');

        return $this->provider->boot();
    }
}
