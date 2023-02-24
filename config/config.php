<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mail Log Channel
    |--------------------------------------------------------------------------
    |
    | For possible options see https://laravel.com/docs/10.x/logging#configuration
    |
    */

    'driver' => 'single',
    'path' => storage_path('logs/mail.log'),
    'level' => 'debug',
];
