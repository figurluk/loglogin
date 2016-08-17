# LogLogin

<p>
<a href="https://styleci.io/repos/65848015" data-toggle="modal" data-target="#badge-modal"> <img src="https://styleci.io/repos/65848015/shield" alt="StyleCI Shield"> </a>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/b39775ee51ff26f09a54df240ba8b013ceec340c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e312d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.1" data-canonical-src="https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/bc2eee937a689297a19a2db59b798c2b24b5321c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e322d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.2" data-canonical-src="https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://www.tldrlegal.com/l/mit"><img src="https://camo.githubusercontent.com/3ce76a8291b83cd2eaf305703ee718a281d09b66/687474703a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d4d49542d627269676874677265656e2e7376673f7374796c653d666c61742d737175617265" alt="License" data-canonical-src="http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" style="max-width:100%;"></a>
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


