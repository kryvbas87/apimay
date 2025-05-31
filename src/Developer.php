<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    private string $positionInFuture;

    /**
     * @return mixed
     */
    public function getPositionInFuture(): mixed
    {
        return $this->positionInFuture;
    }

    /**
     * @param mixed $positionInFuture
     */
    public function setPositionInFuture(mixed $positionInFuture): void
    {
        $this->positionInFuture = $positionInFuture;
    }

    public function __construct($name, $age, $hours, $positionInFuture)
    {
        parent::__construct($name, $age, $hours);

        $this->positionInFuture = $positionInFuture;
    }

    public function work()
    {
        // TODO: Implement work() method.
    }
}