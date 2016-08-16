# LogLogin

<p>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/b39775ee51ff26f09a54df240ba8b013ceec340c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e312d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.1" data-canonical-src="https://img.shields.io/badge/Laravel-5.1-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="http://laravel.com"><img src="https://camo.githubusercontent.com/bc2eee937a689297a19a2db59b798c2b24b5321c/68747470733a2f2f696d672e736869656c64732e696f2f62616467652f4c61726176656c2d352e322d6f72616e67652e7376673f7374796c653d666c61742d737175617265" alt="Laravel 5.2" data-canonical-src="https://img.shields.io/badge/Laravel-5.2-orange.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://travis-ci.org/caffeinated/shinobi"><img src="https://camo.githubusercontent.com/c2dc9b50b8a4a79a15a11c620921521a4e86fb66/687474703a2f2f696d672e736869656c64732e696f2f7472617669732f6361666665696e617465642f7368696e6f62692f6d61737465722e7376673f7374796c653d666c61742d737175617265" alt="Build Status" data-canonical-src="http://img.shields.io/travis/caffeinated/shinobi/master.svg?style=flat-square" style="max-width:100%;"></a>
<a href="https://tldrlegal.com/license/mit-license"><img src="https://camo.githubusercontent.com/3ce76a8291b83cd2eaf305703ee718a281d09b66/687474703a2f2f696d672e736869656c64732e696f2f62616467652f6c6963656e73652d4d49542d627269676874677265656e2e7376673f7374796c653d666c61742d737175617265" alt="License" data-canonical-src="http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" style="max-width:100%;"></a>
</p>

Laravel package which log users login.

## Instalation
**1st step:** include this library with composer 

        composer require figurluk/loginlog

**2nd step:** add to your app.php service providers:
                
        Figurluk\LogLogin\LogLoginServiceProvider::class
        Figurluk\LogLogin\Providers\LogEventServiceProvider::class
        
**3rd step** publish configuration file and migrations

        php artisan vendor:publish

**4th step** migrate new table in database for save logs

        php artisan migrate


