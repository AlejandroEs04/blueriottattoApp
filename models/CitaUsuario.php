<?php 

namespace Model;

class CitaUsuario extends ActiveRecord {
    public $fecha;
    public $hora;
    public $nombre;
    public $apellido;
    public $numero;
    public $finalizada;

    public function __construct($args = []) {
        $this->fecha = $args["fecha"];
        $this->hora = $args["hora"];
        $this->nombre = $args["nombre"];
        $this->apellido = $args["apellido"];
        $this->numero = $args["numero"];
        $this->finalizada = $args["finalizada"];
    }
}