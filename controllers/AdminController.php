<?php

namespace Controllers;

use MVC\Router;
use Model\CitaUsuario;

class AdminController {
    public static function index(Router $router) {
        $citas = CitaUsuario::getAllDate();
        
        $router->render("admin/index", [
            'citas' => $citas
        ]);
    }
}