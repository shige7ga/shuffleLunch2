<?php

require_once __DIR__ . '/core/Router.php';
require_once __DIR__ . '/core/Request.php';

class Application
{
    private $router;
    private $request;
    public function __construct()
    {
        $this->router = new Router($this->registerRoutes());
        $this->request = new Request;
    }

    public function run()
    {
        $params = $this->router->resolve($this->request->getPathInfo());
    }

    private function registerRoutes()
    {
        return [
            '/' => ['controller' => 'shuffle', 'action' => 'index'],
        ]
    }
}
