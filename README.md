# Laravel AppLog

[![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-brightgreen.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.2](https://img.shields.io/badge/Laravel-5.2-brightgreen.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.3](https://img.shields.io/badge/Laravel-5.3-brightgreen.svg?style=flat-square)](http://laravel.com)
[![Laravel 5.4](https://img.shields.io/badge/Laravel-5.4-brightgreen.svg?style=flat-square)](http://laravel.com)
[![Total Downloads](https://poser.pugx.org/sarfraznawaz2005/visitlog/downloads)](https://packagist.org/packages/sarfraznawaz2005/visitlog)

Laravel AppLog is a package to view application logs. It is based on [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer) but differs with following points:

- No multiple log files, we only look for `laravel.log` file.
- Updated styling and icons
- Ability to filter records by error type/level, date and context

## Screenshot ##

![Main Window](https://raw.github.com/sarfraznawaz2005/applog/master/screen.png)

## Requirements ##

 - PHP >= 5.6
 - Laravel 5

## Installation ##

Install via composer
```
composer require sarfraznawaz2005/applog
```

Add Service Provider to `config/app.php` in `providers` section
```php
Sarfraznawaz2005\VisitLog\VisitLogServiceProvider::class,
```

Add Facade to `config/app.php` in `aliases` section
```php
'VisitLog' => Sarfraznawaz2005\VisitLog\Facades\VisitLog::class,
```

Run `php artisan vendor:publish` to publish package's config and migration file. You should now have `visitlog.php` file published in `app/config` folder. It will also publish migration file in `database/migrations` folder.

Run `php artisan migrate` to create `visitlogs` table in your database.

## License ##

This code is published under the [MIT License](http://opensource.org/licenses/MIT).
This means you can do almost anything with it, as long as the copyright notice and the accompanying license file is left intact.
