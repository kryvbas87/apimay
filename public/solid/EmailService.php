<?php

namespace solid;

class EmailService
{
    public function send(string $to, string $message): void
    {
        mail($to, 'Order Confirmed', $message);
    }
}