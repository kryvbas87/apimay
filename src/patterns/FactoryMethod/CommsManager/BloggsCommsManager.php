<?php

namespace App\patterns\FactoryMethod\CommsManager;

use App\patterns\FactoryMethod\ApptEncoder\BloggsApptEncoder;
use App\patterns\FactoryMethod\CommsManager;

class BloggsCommsManager extends CommsManager
{

    public function getHeaderText(): string
    {
        return 'BloggsCal верхний текст';
    }

    public function getApptEncoder(): BloggsApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return 'BloggsCal нижний текст';
    }
}