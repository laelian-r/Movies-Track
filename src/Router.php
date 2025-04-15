<?php
namespace MoviesTrack;

class Router {
    private $routes = [];
    private $uri;

    public function __construct($uri) {
        $this->uri = $uri;
    }

    public function get($path, $action) {
        $this->routes['GET'][$path] = $action;
    }

    public function run() {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = parse_url($this->uri, PHP_URL_PATH);

        if (isset($this->routes[$method][$path])) {
            $action = $this->routes[$method][$path];
            list($controller, $method) = explode('@', $action);
            $controller = "MoviesTrack\\Controllers\\$controller";
            if (class_exists($controller)) {
                $instance = new $controller();
                if (method_exists($instance, $method)) {
                    $instance->$method();
                } else {
                    http_response_code(500);
                    echo "Method $method not found in controller $controller.";
                }
            } else {
                http_response_code(500);
                echo "Controller $controller not found.";
            }
        } else {
            require VIEWS . '404.php';
        }
    }
}