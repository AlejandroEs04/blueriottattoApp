<?php

namespace Controllers;

use Model\Cita;
use Model\DisTatuaje;
use MVC\Router;
use Intervention\Image\ImageManagerStatic as Image;
use Model\CitaUsuario;

class DateController {
    public static function date(Router $router) {
        $alertas = [];

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
                $alertas = $cita->validar();

                if(empty($alertas)) {
                    $resultado = $cita->guardar();

                    $disCita = [
                        'citaID' => $resultado['id'],
                        'imagenURL' => '',
                        'tamano' => $_POST['tamano']
                    ];

                    $disTatuaje = new DisTatuaje($disCita);

                    // Generar un nombre unico
                    $nombreImagen = md5( uniqid(rand(), true) ) .".jpg";

                    // Setear la imagen 
                    if ($_FILES['imagen']['tmp_name']) {
                        // Realiza un resize a la imagen con intervetion
                        $image = Image::make($_FILES['imagen']['tmp_name'])->fit(800, 800);
                        $disTatuaje->setImagen($nombreImagen);
                    }

                    $alertas = $disTatuaje->validar();

                    // Revisar que el arreglo de errores esta vacio
                    if (empty($alertas)) {
                        // Crear la carpeta para subir imagenes
                        if (!is_dir(CARPETAS_IMAGENES)) {
                            mkdir(CARPETAS_IMAGENES);
                        }

                        // Guarda la imagen en el servidor
                        $image->save(CARPETAS_IMAGENES . $nombreImagen);

                        // Guarda en la base de datos
                        $res = $disTatuaje->guardar();

                        if($res) {
                            header('Location: /');
                        }
                    }
                }
            }
        }

        $router->render("date/index", [
            'nombre' => $nombre, 
            'numero' => $numero,
            'alertas' => $alertas
        ]);
    }

    public static function oneDate(Router $router) {
        $cita = CitaUsuario::whereOne('id', $_GET['id']);

        $router->render("date/oneDate", [
            'cita' => $cita
        ]);
    }
}