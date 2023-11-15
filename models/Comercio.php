<?php

namespace Model;

class Comercio extends ActiveRecord {
    protected static $tabla = "comercio";
    protected static $columnasDB = ['id', 'nombre', 'logoURL', 'numero', 'correo', 'facebookURL', 'instagramURL', 'horaInicio', 'horaFin'];

    public $id;
    public $nombre;
    public $logoURL;
    public $numero;
    public $correo;
    public $facebookURL;
    public $instagramURL;
    public $horaInicio;
    public $horaFin;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->logoURL = $args['logoURL'] ?? '';
        $this->numero = $args['numero'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->facebookURL = $args['facebookURL'] ?? '';
        $this->instagramURL = $args['instagramURL'] ?? '';
        $this->horaInicio = $args['horaInicio'] ?? '';
        $this->horaFin = $args['horaFin'] ?? '';
    }

    public function validar() {
        
    }
}