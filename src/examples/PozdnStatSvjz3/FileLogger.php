<?php

namespace App\examples\PozdnStatSvjz3;

class FileLogger extends Logger
{
    public static function getPrefix (): string
    {
        return '[FILE]';
    }
}