<?php
namespace App\Router;

class Router{

    public string $url;
    public array $routes = [];
    public array $posts = [];
    
    public function __construct(string $url, ?array $posts = [])
    {
        $this->url = trim($url, '/');

        if ($posts) {
            $this->posts = $posts;
        }
        
    }

    public function get(string $path, string $action)
    {
        $this->routes["GET"][] = new Route($path, $action);
    }
    public function post(string $path, string $action)
    {
        $this->routes["POST"][] = new Route($path, $action, $this->posts);
    }

    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
           if ($route->matches($this->url)) {
               $route->execute();
           }
        }
    }
}