<?php

namespace App\patterns\Singleton;

class Singleton
{
    private static ?self $instance = null;
    private array $props = [];

    private function __construct(){}

//    private function __clone(){}
//
//    private function __wakeup(){}

    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function setProperty(string $key, $value): void
    {
        $this->props[$key] = $value;
    }

    public function getProperty(string $key)
    {
        return $this->props[$key] ?? null;
    }
}