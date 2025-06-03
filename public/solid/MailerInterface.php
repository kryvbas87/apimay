<?php

namespace solid;

interface MailerInterface
{
    public function send(string $to, string $message): void;
}