<?php

require_once __DIR__ . '/core/Routing.php';

class Application
{
    private $route
    public function __construct()
    {
        $this->route = new Routing();
    }
}
