<?php
require_once "../app/core/Controller.php";

class Router
{
    public function dispatch()
    {
        // default
        $controllerName = 'HomeController';
        $method = 'index';
        $params = [];

        if (isset($_GET['url'])) {
            $url = explode('/', rtrim($_GET['url'], '/'));

            // contoh: /blog
            if (!empty($url[0])) {
                $possibleController = ucfirst($url[0]) . 'Controller';
                $controllerPath = "../app/controllers/$possibleController.php";

                // JIKA CONTROLLER ADA → PAKAI ROUTE LAMA
                if (file_exists($controllerPath)) {
                    $controllerName = $possibleController;
                    if (isset($url[1])) {
                        $method = $url[1];
                    }
                    $params = array_slice($url, 2);
                } 
                // JIKA TIDAK ADA → CONTENT ENGINE
                else {
                    $controllerName = 'ContentController';
                    $method = 'resolve';
                    $params = $url; // ['blog', 'slug']
                }
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

        call_user_func_array([$controller, $method], $params);
    }
}
