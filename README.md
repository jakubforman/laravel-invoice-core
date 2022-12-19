<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel Invoice Core

Laravel Inactive Core is an open source project for the core of the invoicing system developed at Baltaci s.r.o. high
school as a student base project in my teach lessons.

## Install

1. Clone repo.
2. Install packages (your local PHP version must be 8.0) `composer install`.
3. Generate environments &
   settings `php -r "file_exists('.env') || copy('.env.example', '.env');" && php artisan key:generate --ansi`
4. _(Optional) Change path of SQLite file in [.env](.env) or change SQLite to normal other SQL Database._
4. _(Optional) [laravel.sqlite](laravel.sqlite) not exist and **migrate** command may not generate them. Please create one in root of this project._
5. Run database migration `php artisan migrate` (SQLite file is [laravel.sqlite](laravel.sqlite)).
6. Run default development seeder `php artisan db:seed`.
7. Enjoy project.

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
