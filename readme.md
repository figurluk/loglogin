# LogLogin

<p>
<a href="https://styleci.io/repos/65848015" data-toggle="modal" data-target="#badge-modal"> <img src="https://styleci.io/repos/65848015/shield" alt="StyleCI Shield"> </a>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/b39775ee51ff26f09a54df240ba8b013ceec340c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e312d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.1" data-canonical-src="https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/bc2eee937a689297a19a2db59b798c2b24b5321c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e322d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.2" data-canonical-src="https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://packagist.org/packages/figurluk/loginlog"><img src="https://poser.pugx.org/figurluk/loginlog/v/stable?format=flat-square" alt="Latest stable version" style="max-width:100%;"></a>
<a href="https://raw.githubusercontent.com/figurluk/loglogin/master/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square" alt="License" style="max-width:100%;"></a>
</p>

Simple logging of user logins for Your Laravel App

## Instalation
**1st step:** composer require 

        composer require figurluk/loginlog

**2nd step:** Service providers:
                
        Figurluk\LogLogin\LogLoginServiceProvider::class
        Figurluk\LogLogin\Providers\LogEventServiceProvider::class
        
**3rd step** Publish configuration and migration

        php artisan vendor:publish

**4th step** Migrate

        php artisan migrate


## Options

After 3rd step you are able to configure loglogin library. 

Remember to refresh migration after any change in your configuration.

In **config/loglogin.php** you will find this configuration options:

    table_name
        default => loglogin
        info    => This value determines the "name" of table in database where logs will be stored. 
 
    login_request_url
        default => true
        info    => This value determines if login request url will be logged. 

    locale
        default => false
        info    => This value determines if page locale will be logged. 

    user_agent
        default => true
        info    => This value determines if login request user-agent will be logged.
         
