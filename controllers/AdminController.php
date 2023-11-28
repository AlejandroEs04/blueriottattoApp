<?php

namespace Controllers;

use Model\Cita;
use Model\DisTatuaje;
use MVC\Router;
use Model\CitaUsuario;
use Model\Usuario;
use Model\Comercio;

class AdminController {
    public static function index(Router $router) {
        $citas = CitaUsuario::where('finalizada', 0);

        if($_GET['cancelar']) { 
            $cita = new Cita($_GET);
            $citaInfo['citaID'] = $_GET['id'];
            $citaDis = new DisTatuaje($citaInfo);

            // Eliminar el diseno
            $citaDis->eliminarDis();
            
            // Eliminar la cita
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
            $citaInfo['citaID'] = $_GET['id'];
            $citaDis = new DisTatuaje($citaInfo);

            // Eliminar el diseno
            $citaDis->eliminarDis();
            
            // Eliminar la cita
            $res = $cita->eliminar();

            if($res) {
                header("Location: /admin/dates");
            }
        }

        if($_GET['nombre']) {
            $citas = [];
            $citas = CitaUsuario::getName($_GET['nombre']);
        }

        $router->render("admin/history" , [
            'citas' => $citas
        ]);
    }

    public static function setting(Router $router) {
        $usuarios = Usuario::all();
        $comercio = Comercio::all();

        if($_GET['eliminar']) {
            $usuario = Usuario::whereOne('id', $_GET['id']);

            $res = $usuario->eliminar();

            if($res) {
                header('Location: /admin/setting');
            }
        }

        $router->render("admin/setting", [
            'comercio' => $comercio[0],
            'usuarios' => $usuarios
        ]);
    }
}