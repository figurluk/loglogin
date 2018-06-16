# LogLogin

## !!! Not maintained

<p>
<a href="https://raw.githubusercontent.com/figurluk/loglogin/master/LICENSE"><img src="https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square" alt="License" style="max-width:100%;"></a>
</p>

#### Simple logging of user logins for Your Laravel App
##### Library provide easy system to log users logins and show logs in Your admin section.

Library support Laravel 5.2 and 5.1

## Instalation
**1st step:** composer require 

        composer require figurluk/loginlog

**2nd step:** Service providers:
                
        Figurluk\LogLogin\LogLoginServiceProvider::class
        Figurluk\LogLogin\LogEventServiceProvider::class
        
**3rd step** Publish configuration and migration

        php artisan vendor:publish

**4th step** Migrate

        php artisan migrate


## Configuration

After 3rd step you are able to configure loglogin library. 

Remember to refresh migration after any change in your configuration.

If you want redirect to logs use: **url(config('loglogin.admin_route_logs'))**

In **config/loglogin.php** you will find this configuration options:

    table_name
        default => loglogin
        info    => This value determines the "name" of table in database where logs will be stored.
         
    logs_middleware
        default => auth
        info    => This value determines the "name" of middleware which is executed when trying to access logs controller.
         
    admin_route_logs
        default => admin/figurluk/loglogin/logs
        info    => This value determines the route of logs.
         
    belongs_class
        default => App\User
        info    => This value determines the class which login is logged. Value is used for belongs to relation.
         
    belongs_class_id
        default => id
        info    => This value determines ID identifier in database of class which login is logged. Value is used for belongs to relation identifier.
         
    belongs_class_username_attribute
        default => email
        info    => This value determines name of attribute in logged class which is used as username.
         
    admin_layout
        default => layouts.admin
        info    => This value determines the extends view name of logs view.
         
    admin_layout_content_section
        default => content
        info    => This value determines the "name" of content section in extends logs view. 
 
    admin_layout_styles_section
        default => styles
        info    => This value determines the "name" of styles section in extends logs view.
         
    admin_layout_scripts_section
        default => styles
        info    => This value determines the "name" of scripts section in extends logs view.

    locale
        default => false
        info    => This value determines if page locale will be logged. 

    user_agent
        default => true
        info    => This value determines if login request user-agent will be logged.
         

## Credits

- [Lukas Figura](https://github.com/figurluk)
- [E-zone](https://github.com/e-zone-technologies)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
