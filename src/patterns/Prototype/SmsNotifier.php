<?php

namespace App\patterns\Prototype;

class SmsNotifier implements NotifierInterface
{
    private string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function send(string $message): void
    {
        echo "SMS to {$this->phoneNumber}: {$message}\n<br>";
    }

    public function clone(): NotifierInterface
    {
        return new self($this->phoneNumber);
    }
}