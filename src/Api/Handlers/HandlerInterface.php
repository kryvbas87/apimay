<?php

namespace App\Api\Handlers;

use App\Api\Request\Request;

interface HandlerInterface
{
    public function handle(Request $request): void;
}