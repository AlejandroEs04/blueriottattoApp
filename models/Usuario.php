<?php

namespace Model;

class Usuario extends ActiveRecord {
    protected static $tabla = "usuario";
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'usuario', 'password', 'numero', 'admin'];

    public $id;
    public $nombre;
    public $apellido;
    public $usuario;
    public $password;
    public $numero; 
    public $admin;

    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->nombre = $args["nombre"] ?? null;
        $this->apellido = $args["apellido"] ?? null;
        $this->usuario = $args["usuario"] ?? null;
        $this->password = $args["password"] ?? null;
        $this->numero = $args["numero"] ?? null;
        $this->admin = $args["admin"] ?? '0';
    }

    public function validarNuevaCuenta() {
        if(!$this->nombre) {
            self::$alertas['error'][] = "El nombre es obligatorio";
        }
        if(!$this->apellido) {
            self::$alertas["error"][] = "El apellido es obligatorio";
        }
        if(!$this->usuario) {
            self::$alertas["error"][] = "El usuario es obligatorio";
        }
        if(!$this->password) {
            self::$alertas["error"][] = "El passsword es obligatorio";
        }
        if(!$this->numero) {
            self::$alertas["error"][] = "El numero es obligatorio";
        }

        return self::$alertas;
    }

    public function validarLogin() {
        if(!$this->usuario) {
            self::$alertas["error"][] = "El usuario es obligatorio";
        }
        if(!$this->password) {
            self::$alertas["error"][] = "El password es obligatorio";
        }
    }

    public function existeUsuario() {
        $query = "SELECT * FROM  " . self::$tabla . " WHERE usuario = '" . $this->usuario . "' LIMIT 1";
        $resultado = self::$db->query($query);

        if($resultado->num_rows) {
            self::$alertas['error'][] = "El nombre de usuario ya existe";
        }

        return $resultado;
    }

    public function hashPassword() {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function comprobarPassword($password) {
        $resultado = password_verify($password, $this->password);

        if(!$resultado) {
            self::$alertas['error'][] = "Password incorrecto";
        } else {
            return true;
        }
    }
}