<?php

namespace Model;

class DisTatuaje extends ActiveRecord {
    protected static $tabla = 'distatuaje';
    protected static $columnasDB = ['citaID', 'imagenURL', 'tamano'];

    public $citaID;
    public $imagenURL;
    public $tamano;

    public function __construct($args = []) {
        $this->citaID = $args['citaID'] ?? null;
        $this->imagenURL = $args['imagenURL'] ?? '';
        $this->tamano = $args['tamano'] ?? '';
    }

    public function validar() {
        if(!$this->imagenURL) {
            self::$alertas['error'][] = "La imagen es obigatoria";
        }
        if(!$this->tamano) {
            self::$alertas['error'][] = "La tamano es obigatorio";
        }

        return self::$alertas;
    }

    public function eliminarDis() {
        $query = "DELETE FROM "  . static::$tabla . " WHERE citaID = " . self::$db->escape_string($this->citaID) . " LIMIT 1";
        $resultado = self::$db->query($query);
        return $resultado;
    }
}