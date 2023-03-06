<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Invoice Core

Laravel Inactive Core is an open source project for the core of the invoicing system developed at Baltaci s.r.o. high
school as a student base project in my teach lessons.

> This project using **InfyOm CRUD Generator** for generating Admin content.

## Install

> Need installed Node.js & npm in system. Check it with `node -v` and `npm -v`
> 
> You can download it from [NodeJS](https://nodejs.org/en/)

1. Clone repo.
2. Install **PHP** packages (your local PHP version must be 8.0) `composer install`.
3. Install **JS/TS/CSS/SCSS** npm packages `npm install`.
4. Generate **Laravel environments** &
   settings `php -r "file_exists('.env') || copy('.env.example', '.env');" && php artisan key:generate --ansi`
5. Change path of SQLite file in [.env](.env) or change SQLite to normal other SQL Database. (Optional - connect to local MySQL DB)
6. [laravel.sqlite](laravel.sqlite) not exist and **migrate** command may not generate them. Please create one in root of this project. (Optional - connect to local MySQL DB)
7. Run database migration `php artisan migrate` (SQLite file is [laravel.sqlite](laravel.sqlite)).
8. Run default development seeder `php artisan db:seed`. 
9. _(Optional) Run fresh migration with seed `php artisan migrate:fresh --seed`_
10. Run `npx mix` for generate CSS and JS assets to Public folder.
12. Enjoy project.

## Run server

> Default generated **Demo user**
> 
> **login**: demo@example.com<br>
> **password:** example

1. Run server `php artisan serve`
2. Open admin [localhost:8000/login](http://localhost:8000/login)

## Generating data

Use official [InfyOm Documentation](https://infyom.com/open-source/laravelgenerator/docs/getting-started)

## License

The project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
