<?php 

namespace Model;

class CitaUsuario extends ActiveRecord {
    protected static $tabla = 'citasview';
    public $id;
    public $fecha;
    public $hora;
    public $nombre;
    public $usuarioID;
    public $numero;
    public $imagen;
    public $tamano;
    public $finalizada;

    public function __construct($args = []) {
        $this->id = $args["id"];
        $this->fecha = $args["fecha"];
        $this->hora = $args["hora"];
        $this->nombre = $args["nombre"];
        $this->numero = $args["numero"];
        $this->imagen = $args["imagen"];
        $this->tamano = $args["tamano"];
        $this->finalizada = $args["finalizada"];
        $this->usuarioID = $args["usuarioID"];
    }

    public static function getName($nombre) {
        $query = "SELECT * FROM citasview WHERE nombre like '%". $nombre ."%'";
        $resultado = self::consultarSQL($query);
        return $resultado;
    }

    public static function getCitasFin($usuarioID) {
        $query = "SELECT * FROM citasview WHERE finalizada = 1 and usuarioID = '" . $usuarioID . "'" ;
        $resultado = self::consultarSQL($query);
        return $resultado;
    }
}