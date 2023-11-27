<?php

namespace Model;

class Cita extends ActiveRecord {
    protected static $tabla = "cita";
    protected static $columnasDB = ['id', 'userID', "tatuadorID", "fecha", "hora", "finalizada"];

    public $id; 
    public $userID;
    public $tatuadorID;
    public $fecha;
    public $hora;
    public $finalizada;

    public function __construct($args = []) {
        $this->id = $args["id"] ?? null;
        $this->userID = $args["userID"] ?? null;
        $this->tatuadorID = $args["tatuadorID"] ?? null;
        $this->fecha = $args["fecha"] ?? null;
        $this->hora = $args["hora"] ?? null;
        $this->finalizada = $args["finalizada"] ?? "0";
    }

    public function validar() {
        if(!$this->fecha) {
            self::$alertas["error"][] = "La fecha es obligatoria";
        }
        if(!$this->hora) {
            self::$alertas["error"][] = "La hora es obligatoria";
        }

        return self::$alertas;
    }
}