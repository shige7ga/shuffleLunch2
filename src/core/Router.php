<?php

class Router
{
    private $routes;
    public __construct($routes)
    {
        $this->routes = $Routes;
    }

    public function resolve($pathInfo)
    {
        foreach ($this->routes as $path => $pattern) {
            if ($path === $pathInfo){
                return $pattern;
            }
        }
        return false;
    }

}
