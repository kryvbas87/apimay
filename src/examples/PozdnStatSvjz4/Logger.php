<?php

namespace App\examples\PozdnStatSvjz4;

class Logger
{
    public static function create(): Logger
    {
        return new static();
    }

    public function write(string $message): string
    {
        return 'LOG' . $message;
    }
}