<?php 

namespace Model;

class CitaUsuario extends ActiveRecord {
    protected static $tabla = 'citasview';
    public $id;
    public $fecha;
    public $hora;
    public $nombre;
    public $apellido;
    public $usuarioID;
    public $numero;
    public $finalizada;

    public function __construct($args = []) {
        $this->id = $args["id"];
        $this->fecha = $args["fecha"];
        $this->hora = $args["hora"];
        $this->nombre = $args["nombre"];
        $this->apellido = $args["apellido"];
        $this->numero = $args["numero"];
        $this->finalizada = $args["finalizada"];
        $this->usuarioID = $args["usuarioID"];
    }
}