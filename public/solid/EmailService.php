<?php

namespace solid;

class MailerInterface implements MailerInterface
{
    public function send(string $to, string $message): void
    {
        mail($to, 'Order Confirmed', $message);
    }
}