<?php

namespace App\examples\PozdnStatSvjz3;

class Logger
{
    public static function log (string $message): string
    {
        return static::getPrefix() . $message;
    }

    public static function getPrefix (): string
    {
        return '[LOG]';
    }
}