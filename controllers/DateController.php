<?php

namespace Controllers;

use Model\Cita;
use MVC\Router;

class DateController {
    public static function date(Router $router) {

        if(empty($_SESSION)) {
            $nombre = '';
            $celular = '';
        } else {
            $nombre = $_SESSION["nombre"];
            $numero = $_SESSION["numero"];
        }

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            if($_POST['nombre'] && $_POST['numero']) {
                debuguear("Es un sin cuenta");
            } else {
                $date = [
                    "userID" => (int)$_SESSION['id'],
                    "tatuadorID" => 1,
                    "fecha" => $_POST['date'],
                    "hora" => $_POST['time']
                ];

                $cita = new Cita($date);

                $resultado = $cita->guardar();
                
                if($resultado) {
                    header('Location: /');
                }
            }
        }

        $router->render("date/index", [
            'nombre' => $nombre, 
            'numero' => $numero
        ]);
    }
}