<?php
require_once "../app/core/Controller.php";
class Router
{
    public function dispatch()
    {
        // default
        $controllerName = 'HomeController';
        $method = 'index';

        if (isset($_GET['url'])) {
            $url = explode('/', rtrim($_GET['url'], '/'));

            if (!empty($url[0])) {
                $controllerName = ucfirst($url[0]) . 'Controller';
            }

            if (isset($url[1])) {
                $method = $url[1];
            }
        }

        $controllerPath = "../app/controllers/$controllerName.php";

        if (!file_exists($controllerPath)) {
            die("Controller tidak ditemukan");
        }

        require_once $controllerPath;

        $controller = new $controllerName;

        if (!method_exists($controller, $method)) {
            die("Method tidak ditemukan");
        }

        $controller->$method();
    }
}
