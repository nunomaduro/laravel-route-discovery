<?php

namespace Spatie\RouteDiscovery\Tests\TestClasses\AutoDiscovery\NestedController\Nested;

class ChildController
{
    public function index()
    {
        return $this::class . '@' . __METHOD__;
    }
}