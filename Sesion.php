<?php

class Sesion {

    public static function obtenerDato($campos) {
        if (!isset($_SESSION)) {
            session_start();
        }
        $subCampos = explode('.', $campos);
        $campo = array_shift($subCampos);

        $datos = NULL;
        if (isset($_SESSION[$campo])) {
            $datos = $_SESSION[$campo];
            foreach ($subCampos as $subCampo) {
                $datos = $datos[$subCampo];
            }
        }
        return $datos;
    }

    public static function modificarDato($campo, $valor) {
        if (!isset($_SESSION)) {
            session_start();
        }
        if (!isset($_SESSION[$campo])) {
            $_SESSION[$campo] = [];
        }
        if (is_object($valor)) {
            foreach ($valor as $clave => $dato) {
                $_SESSION[$campo][$clave] = $dato;
            }
        } else {
            $_SESSION[$campo] = $valor;
        }
        return $_SESSION[$campo];
    }
}

?>