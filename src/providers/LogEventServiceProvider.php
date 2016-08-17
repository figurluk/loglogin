<?php

namespace Figurluk\LogLogin\Providers;

/*
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:39
 */
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class LogEventServiceProvider extends ServiceProvider
{
    /**
     * Actual provider.
     *
     * @var \Illuminate\Foundation\Support\Providers\EventServiceProvider
     */
    protected $provider;

    /**
     * Create a new service provider instance.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct($app)
    {
        parent::__construct($app);

        $this->provider = $this->getProvider();
    }

    /**
     * Return ServiceProvider according to Laravel version.
     */
    private function getProvider()
    {
        if (version_compare(\Illuminate\Foundation\Application::VERSION, '5.1', '=')) {
            $provider = '\Figurluk\LogLogin\Providers\LogEventServiceProvider51';
        } else {
            $provider = '\Figurluk\LogLogin\Providers\LogEventServiceProvider52';
        }

        return new $provider($this->app);
    }

    /**
     * Register any other events for your application.
     *
     * @param DispatcherContract $events
     */
    public function boot(DispatcherContract $events)
    {
        return $this->provider->boot($events);
    }
}
