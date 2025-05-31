<?php

namespace App\examples\PozdnStatSvjz4;

class DbLogger extends Logger
{
    public function write(string $message): string
    {
        return 'DB' . $message;
    }
}