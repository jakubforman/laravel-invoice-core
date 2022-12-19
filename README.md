<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Invoice Core

Laravel Inactive Core is an opensource project for core of Invoice System

## Install

1. Clone repo
2. Instalace balíčků (mějte lokálně instalovánu verzi PHP 8.0) `composer install`
3. Vygenerovat základní
   nastavení `php -r "file_exists('.env') || copy('.env.example', '.env');" && php artisan key:generate --ansi`
4. Vytvoří databázi z migračních tříd `./vendor/bin/sail artisan migrate`
5. Načtení základních dat seederu `./vendor/bin/sail artisan db:seed`

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
