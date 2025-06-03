<?php

namespace solid;

class Logger
{
    public function log(string $message): void
    {
        file_put_contents('log.txt', date('Y-m-d H:i:s') . " ERROR: $message\n", FILE_APPEND);
    }
}