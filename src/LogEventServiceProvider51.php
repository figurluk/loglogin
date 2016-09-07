<?php
/**
 * Created by PhpStorm.
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 23:13.
 */
namespace Figurluk\LogLogin;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class LogEventServiceProvider51 extends ServiceProvider
{
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

        $events->listen('auth.login', 'Figurluk\LogLogin\Listeners\LogLoginEventListener@handle');
    }
}
