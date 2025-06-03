<?php

namespace solid;

class Mailer implements MailerInterface
{
    public function send(string $to, string $message): void
    {
        mail($to, 'Order Confirmed', $message);
    }
}