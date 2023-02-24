<?php

namespace berthott\MailLogging\Tests\MailLogging;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class TestMail extends Mailable
{
    /**
     * Create a new message instance.
     */
    public function __construct(public $testData) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('from@test.com', 'From Test'),
            replyTo: [
                new Address('replyTo@test.com', 'ReplyTo Test'),
            ],
            subject: 'Test Subject',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            htmlString: 'Test Content',
        );
    }
}
