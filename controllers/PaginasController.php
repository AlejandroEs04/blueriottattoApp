<?php

namespace Controllers;

use MVC\Router;
use Model\CitaUsuario;
use Model\Cita;

class PaginasController {
    public static function index(Router $router) {
        $citas = CitaUsuario::where('usuarioID', $_SESSION['id']);

        if($_GET['cancelar']) { 
            $cita = new Cita($_GET);

            $res = $cita->eliminar();

            if($res) {
                header("Location: /");
            }
        }

        $router->render('paginas/index', [
            'citas' => $citas
        ]);
    }

    public static function view(Router $router) {

        $router->render('paginas/view', [

        ]);
    }

    public static function setting(Router $router) {
        $router->render('paginas/settings', [
            
        ]);
    }
}