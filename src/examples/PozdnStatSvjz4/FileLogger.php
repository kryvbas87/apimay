<?php

namespace App\examples\PozdnStatSvjz4;

class FileLogger extends Logger
{
    public function write(string $message): string
    {
        return 'FILE' . $message;
    }
}