<?php

namespace Figurluk\LogLogin\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:46.
 */
class LogLoginEventListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the login event.
     */
    public function handle()
    {
        $insertArr = [];
        $insertArr['ip_address'] = \Request::getClientIp();
        $insertArr['user_id'] = Auth::user()->id;
        $insertArr['logged_at'] = date('Y-m-d H:i:s');

        if (config('loglogin.login_request_url')) {
            $insertArr['login_request_url'] = \Request::getUri();
        }
        if (config('loglogin.locale')) {
            $insertArr['locale'] = \Request::getLocale();
        }
        if (config('loglogin.user_agent')) {
            $insertArr['user_agent'] = \Request::header('user-agent');
        }

        DB::table(config('loglogin.table_name'))->insert($insertArr);
    }
}
