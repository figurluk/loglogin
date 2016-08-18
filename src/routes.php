<?php
/**
 * User: Lukas Figura
 * Date: 18.08.16
 * Time: 0:56.
 */

Route::get(config('loglogin.admin_route_logs'), ['middleware' => config('loglogin.logs_middleware'),
    'uses' => 'figurluk\loglogin\LogLoginController@getLogs', ]);