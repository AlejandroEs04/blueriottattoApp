<?php 
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETAS_IMAGENES', $_SERVER['DOCUMENT_ROOT'] . '/imagenes/');

function incluirModule( string $nombre, $contenido ) {
    if( $nombre ) {
        $_POST = $contenido;
    }

    include "modules/${nombre}.php";
}

function debuguear($variable) {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

function mostrarNotificacion($resultado) {
    $mensaje = '';

    switch($resultado) { 
        case 1:
            $mensaje = 'Creado Correctamente';
        break;

        case 2:
            $mensaje = 'Actualizado Correctamente';
        break;

        case 3:
            $mensaje = 'Eliminado Correctamente';
        break;

        default:
            $mensaje = false;
        break;
    }

    return $mensaje;
}