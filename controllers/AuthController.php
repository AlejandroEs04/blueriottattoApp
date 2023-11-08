<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class AuthController {
    public static function login(Router $router) {

        $alertas = [];

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $auth = new Usuario($_POST);

            $alertas = $auth->validarLogin();

            if(empty($alertas)) {
                $usuario = Usuario::where("usuario", $auth->usuario);

                if($usuario) {
                    if($usuario->comprobarPassword($auth->password)) {
                        session_start();

                        $_SESSION['id'] = $usuario->id;
                        $_SESSION['nombre'] = $usuario->nombre . " " . $usuario->apellido;
                        $_SESSION['usuario'] = $usuario->usuario;
                        $_SESSION['numero'] = $usuario->numero;
                        $_SESSION['admin'] = $usuario->admin;
                        $_SESSION['login'] = true;

                        if($usuario->admin === "1") {
                            $_SESSION['admin'] = $usuario->admin ?? null;
                            header('Location: /admin');
                        } else {
                            header('Location: /add-date');
                        }
                    }
                }
            }
        }

        $router->render("auth/index", [

        ]);
    }

    public static function logOut() {
        session_start();
        $_SESSION = [];
        header('Location: /login');
    }

    public static function newAccount(Router $router) {

        $usuario = new Usuario($_POST);

        $alertas = [];

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if(empty($alertas)) {
                $resultado = $usuario->existeUsuario();

                if($resultado->num_rows) {
                    $alertas = Usuario::getAlertas();
                } else {
                    $usuario->hashPassword();

                    // Crear el usuario
                    $resultado = $usuario->guardar();

                    if($resultado) {
                        header('Location: /add-date');
                    }
                }
            }
        }

        $router->render("auth/new-account", [
            'alertas' => $alertas
        ]);
    }
}