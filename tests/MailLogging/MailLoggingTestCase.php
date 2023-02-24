<?php

namespace berthott\MailLogging\Tests\MailLogging;

use berthott\MailLogging\MailLoggingServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class MailLoggingTestCase extends BaseTestCase
{
    protected $now;

    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            MailLoggingServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        //
    }
}
