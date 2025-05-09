<?php

namespace myfrm;

class Router
{
    protected array $routes = [];
    protected string $uri;
    protected string $method;

    public function __construct()
    {
        $this->uri = (trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'));
        $this->method = strtoupper($_POST['_method'] ?? $_SERVER['REQUEST_METHOD']); // отлавливает delete и другие
    }

    public function match()
    {
        $matches = false;
        foreach ($this->routes as $route) {
            // dump($route['method']);
            if (($route['uri'] === $this->uri) && in_array(($this->method), $route['method'])) {
                if ($route['middleware']) {
                    $midlleware = MIDDLEWARE[$route['middleware']] ?? false;
                    if (!$midlleware) {
                        throw new \Exception("Incorrect middleware {$route['middleware']}");
                    }
                    (new $midlleware)->handle();
                }
                require CONTROLLERS . "/{$route['controller']}";
                $matches = true;
                break;
            }
        }
        if (!$matches) {
            abort();
        }
    }

    public function only($midlleware)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $midlleware;
        return $this;
    }

    public function add($uri, $controller, $method)
    {
        $this->routes[] =
            [
                'uri' => $uri,
                'controller' => $controller,
                'method' => $method,
                'middleware' => null,
            ];
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add($uri, $controller, 'GET');
    }

    public function post($uri, $controller)
    {
        return $this->add($uri, $controller, 'POST');
    }

    public function delete($uri, $controller)
    {
        return $this->add($uri, $controller, 'DELETE');
    }

    public function put($uri, $controller)
    {
        return $this->add($uri, $controller, 'PUT');
    }
}
