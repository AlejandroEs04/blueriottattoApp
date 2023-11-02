<?php

namespace Controllers;

use MVC\Router;

class PaginasController {
    public static function index(Router $router) {

        $router->render('paginas/index', [

        ]);
    }

    public static function setting(Router $router) {
        $router->render('paginas/settings', [
            
        ]);
    }
}