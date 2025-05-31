<?php

namespace App;

class Visitor
{
    private int $age;
    private string $name;
    private bool $working = false;

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function isWorking(): bool
    {
        return $this->working;
    }

    public function setWorking(bool $working): void
    {
        $this->working = $working;
    }

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function someFunction(): void
    {
        echo 'work someFunction';
    }
}