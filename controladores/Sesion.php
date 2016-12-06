<?php

namespace CONTROLADOR;

class Sesion {

    public function iniciar() {
        $Usuario = cargarModelo('Usuario');
        $Usuario->correo = filter_input(INPUT_POST, 'correo');
        $Usuario->contraseña = filter_input(INPUT_POST, 'contraseña');
        if ($Usuario->validar()) {
            \Sesion::modificarDato('usuario', $Usuario);
            redireccionar('inicio.principal');
        } else {
            $this->error('sesion no valida');
        }
    }

    public function cerrar() {
        \Sesion::modificarDato('usuario', FALSE);
        redireccionar('inicio.principal');
    }

    public function error($tipo) {
        datosVista('tipo-error', $tipo);
        datosVista(urlBase('inicio.principal'));
        mostrarVista('error');
    }
}

?>