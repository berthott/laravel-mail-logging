# Laravel-Mail-Logging

Laravel Helper for logging outgoing mails.

## Installation

```sh
$ composer require berthott/laravel-mail-logging
```

## Usage

* You only need to install the package and will have a `storage/logs/mail.log` file giving you some insights of outgoing mails.

## Options

To change the default options use
```php
$ php artisan vendor:publish --provider="berthott\MailLogging\MailLoggingServiceProvider" --tag="config"
```
You can specify the mail logging channel according to [the Laravel Documentation](https://laravel.com/docs/10.x/logging#configuration).
Defaults to
```php
    'driver' => 'single',
    'path' => storage_path('logs/mail.log'),
    'level' => 'debug',
```

## Compatibility

Tested with Laravel 10.x.

## License

See [License File](license.md). Copyright © 2023 Jan Bladt.