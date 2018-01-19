# Laravel AppLog

[![Total Downloads](https://poser.pugx.org/sarfraznawaz2005/applog/downloads)](https://packagist.org/packages/sarfraznawaz2005/applog)

Laravel AppLog is a package to view application logs. It is based on [rap2hpoutre/laravel-log-viewer](https://github.com/rap2hpoutre/laravel-log-viewer) but differs in following points:

- No multiple log files, we only look for `laravel.log` file.
- Updated styling and icons
- Ability to filter records by error type/level, date and context
- Auto-discovery feature for Laravel 5.5

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

Now add a route in your web routes file:

```php
Route::get('applog', '\Sarfraznawaz2005\Applog\ApplogController@index');
```

This way logs will be available at `http://yourapp/applog` or whatever route you set for it.

**Laravel 5.5**

You are done.

**Laravel 5.4 or less**

Add Service Provider to `config/app.php` in `providers` section
```php
Sarfraznawaz2005\Applog\ApplogServiceProvider::class,
```

Optionally run `php artisan vendor:publish` to publish package's view file if you wish to customize look and feel of it.

## License ##

This code is published under the [MIT License](http://opensource.org/licenses/MIT).
This means you can do almost anything with it, as long as the copyright notice and the accompanying license file is left intact.
