<?php
/**
 * Created by PhpStorm.
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 23:13
 */

namespace Figurluk\LogLogin\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LogEventServiceProvider51 extends ServiceProvider
{


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

        $events->listen('auth.login', function ($user, $remember) {
            DB::table(config('loglogin.table_name'))->insert([
                'ip_address' => \Request::getClientIp(),
                'user_id'    => Auth::user()->id,
                'created_at' => date('Y-m-d H:i:s')
            ]);
        });
    }
}