<?php

declare(strict_types=1);

namespace App\Controller;

abstract class BaseController
{
    /** @var Container */
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }
}
