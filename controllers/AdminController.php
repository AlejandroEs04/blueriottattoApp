<?php

namespace Controllers;

use Model\Cita;
use MVC\Router;
use Model\CitaUsuario;

class AdminController {
    public static function index(Router $router) {
        $citas = CitaUsuario::where('finalizada', 0);

        if($_GET['cancelar']) { 
            $cita = new Cita($_GET);

            $res = $cita->eliminar();

            if($res) {
                header("Location: /admin");
            }
        }

        if($_GET['fin']) {
            $citaDB = Cita::whereOne('id', $_GET['id']);
            $cita = [
                'id' => $citaDB->id,
                'userID' => $citaDB->userID,
                'tatuadorID' => $citaDB->tatuadorID, 
                'fecha' => $citaDB->fecha,
                'hora' => $citaDB->hora,
                'finalizada' => $_GET['fin']
            ];

            $citaNew = new Cita($cita);

            $res = $citaNew->guardar();

            if($res) {
                header("Location: /admin");
            }
        }
        
        $router->render("admin/index", [
            'citas' => $citas
        ]);
    }

    public static function historial(Router $router) {
        $cita = new Cita();
        $citas = CitaUsuario::where('finalizada', 1);

        if($_GET['eliminar']) { 
            $cita = new Cita($_GET);

            $res = $cita->eliminar();

            if($res) {
                header("Location: /admin/dates");
            }
        }

        $router->render("admin/history" , [
            'citas' => $citas
        ]);
    }
}