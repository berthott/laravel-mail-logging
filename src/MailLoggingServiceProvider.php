<?php

namespace berthott\MailLogging;

use berthott\MailLogging\Listeners\LogMessageSending;
use berthott\MailLogging\Listeners\LogMessageSent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Mail\Events\MessageSent;

/**
 * Register the libraries features with the laravel application.
 * 
 * Extends {@see \Illuminate\Foundation\Support\Providers\EventServiceProvider} 
 * and registers the logging listeners to the mail events.
 */
class MailLoggingServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        MessageSending::class => [LogMessageSending::class],
        MessageSent::class => [LogMessageSent::class],
    ];


    /**
     * Register services.
     */
    public function register(): void
    {
        parent::register();

        // add config
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'mail-logging');
    }

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // publish config
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('mail-logging.php'),
        ], 'config');

        // register log channel
        $this->app->make('config')->set('logging.channels.mail', config('mail-logging'));
    }
}
