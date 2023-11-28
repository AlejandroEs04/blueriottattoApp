<?php

namespace Controllers;

use MVC\Router;
use Model\CitaUsuario;
use Model\Cita;
use Model\DisTatuaje;
use Model\Usuario;

class PaginasController {
    public static function index(Router $router) {
        $citas = CitaUsuario::where('usuarioID', $_SESSION['id']);

        if($_GET['cancelar']) { 
            $cita = new Cita($_GET);
            $citaInfo['citaID'] = $_GET['id'];
            $citaDis = new DisTatuaje($citaInfo);

            // Eliminar el diseno
            $citaDis->eliminarDis();
            
            // Eliminar la cita
            $res = $cita->eliminar();

            if($res) {
                header("Location: /");
            }
        }

        $router->render('paginas/index', [
            'citas' => $citas
        ]);
    }

    public static function history(Router $router) {
        $citas = CitaUsuario::getCitasFin($_SESSION['id']);

        if($_GET['cancelar']) { 
            $cita = new Cita($_GET);
            $citaInfo['citaID'] = $_GET['id'];
            $citaDis = new DisTatuaje($citaInfo);

            // Eliminar el diseno
            $citaDis->eliminarDis();
            
            // Eliminar la cita
            $res = $cita->eliminar();

            if($res) {
                header("Location: /history");
            }
        }

        $router->render('paginas/history', [
            'citas' => $citas
        ]);
    }

    public static function view(Router $router) {

        $router->render('paginas/view', [

        ]);
    }

    public static function setting(Router $router) {
        $usuario = Usuario::find($_SESSION['id']);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST['password'] === '') {
                $usuarioDB = Usuario::find($_SESSION['id']);
                $_POST['password'] = $usuarioDB->password;
                $usuario = new Usuario($_POST);

                $res = $usuario->guardar();

                if($res) {
                    header('Location: /setting');
                }
            }

            $usuario = new Usuario($_POST);
            $usuario->hashPassword();

            $res = $usuario->guardar();

            if($res) {
                header('Location: /setting');
            }
        }

        $router->render('paginas/settings', [
            'usuario' => $usuario   
        ]);
    }
}