<?php
/**
 * User: Lukas Figura
 * Date: 16.08.16
 * Time: 20:52.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | LogLogin table name
    |--------------------------------------------------------------------------
    |
    | This value determines the "name" of table in database where logs will be stored.
    |
    */
    'table_name' => 'loglogin',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs middleware name
    |--------------------------------------------------------------------------
    */
    'logs_middleware' => 'auth',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs route
    |--------------------------------------------------------------------------
    */
    'admin_route_logs' => 'admin/figurluk/loglogin/logs',

    /*
    |--------------------------------------------------------------------------
    | LogLogin belongs class
    |--------------------------------------------------------------------------
    |
    | This value determines the class which login is logged.
    | Value is used for belongs to relation.
    |
    */
    'belongs_class' => 'App\User',

    /*
    |--------------------------------------------------------------------------
    | LogLogin belongs class identifier
    |--------------------------------------------------------------------------
    |
    | This value determines ID identifier in database of class which login is logged.
    | Value is used for belongs to relation identifier.
    |
    */
    'belongs_class_id' => 'id',

    /*
    |--------------------------------------------------------------------------
    | LogLogin belongs class username attribute
    |--------------------------------------------------------------------------
    |
    | This value determines name of attribute in logged class which is used
    | as username.
    |
    */
    'belongs_class_username_attribute' => 'email',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs view extend layout namespace
    |--------------------------------------------------------------------------
    */
    'admin_layout' => 'layouts.admin',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs view content section name
    |--------------------------------------------------------------------------
    */
    'admin_layout_content_section' => 'content',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs view styles section name
    |--------------------------------------------------------------------------
    */
    'admin_layout_styles_section' => 'styles',

    /*
    |--------------------------------------------------------------------------
    | LogLogin logs view scripts section name
    |--------------------------------------------------------------------------
    */
    'admin_layout_scripts_section' => 'scripts',

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
    'locale' => false,
    'user_agent' => true,

];
