<?php

namespace berthott\MailLogging\Tests\MailLogging;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MailLoggingTest extends MailLoggingTestCase
{
    public function test_log_written(): void
    {
        $path = storage_path('logs').'/mail.log';
        if (File::exists($path)) {
            File::delete($path);
        }
       

        Mail::to('customer@test.com')->send(new TestMail([
            'test' => 'test',
        ]));

        $log = $contents = file_get_contents($path);

        $this->assertTrue(File::exists($path));
        $this->assertNotFalse(strpos($log, 'SENDING From: from@test.com to: customer@test.com, subject: Test Subject'));
        $this->assertNotFalse(strpos($log, 'SENT From: from@test.com to: customer@test.com, subject: Test Subject'));
    }
}
