<?php
/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:52.
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | LogLogin table name
    |--------------------------------------------------------------------------
    |
    | This value determines the "name" of table in database where logs will be stored.
    |
    */
    'table_name'        => 'loglogin',


    /*
    |--------------------------------------------------------------------------
    | LogLogin logs options
    |--------------------------------------------------------------------------
    |
    | This values determines the "options" of loglogin which will be logged.
    |
    | login_request_url -> log login request url
    | locale            -> log login page locale
    | user_agent        -> log login request user-agent url
    */
    'login_request_url' => true,
    'locale'            => false,
    'user_agent'        => true,

);
