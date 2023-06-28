<?php

namespace berthott\MailLogging\Listeners;

use Illuminate\Mail\Events\MessageSending;
use Illuminate\Support\Facades\Log;

/**
 * Event listener
 */
class LogMessageSending
{
    /**
     * Log the MessageSending event.
     */
    public function handle(MessageSending $event)
    {
        Log::channel('mail')->info(
            'SENDING From: '.$event->message->getFrom()[0]->getAddress()
            .' to: '.$event->message->getTo()[0]->getAddress()
            .', subject: '.$event->message->getSubject()
            //.', data: '.print_r($event->data, true)
        );
    }
}
