<?php

namespace solid;

interface LoggerInterface
{
    public function log(string $message): void;
}