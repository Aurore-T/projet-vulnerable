<?php

namespace App\Core;

class App
{

    public static function run(): void
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '/';

        /**
         * @params $routes array<string, array<string, string>>
         */
        $routes = [
            '/login' => [\App\Controller\AuthController::class, 'login'],
            '/logout' => [\App\Controller\AuthController::class, 'logout'],
            '/' => [\App\Controller\HomeController::class, 'index'],
        ];

        // route statique
        if (isset($routes[$path])) {
            [$controllerClass, $methodName] = $routes[$path];

            (new $controllerClass())->$methodName();
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }
}
