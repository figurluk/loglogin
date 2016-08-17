<?php
/**
 * Created by PhpStorm.
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 23:13.
 */
namespace Figurluk\LogLogin\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class LogEventServiceProvider52 extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = array(
        'Illuminate\Auth\Events\Login' => array(
            'Figurluk\LogLogin\Listeners\LogLoginEventListener',
        ),
    );

    /**
     * Register any other events for your application.
     *
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     *
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
