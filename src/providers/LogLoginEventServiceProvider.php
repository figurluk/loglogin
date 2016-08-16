<?php

namespace figurluk\loginlog\providers;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:39
 */
use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class LogLoginEventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'figurluk\loginlog\events\LogLoginEvent' => [
            'figurluk\loginlog\listeners\LogLoginEventListener',
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);


        //
    }

    public function register()
    {
        //
    }
}