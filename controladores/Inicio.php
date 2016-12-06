<?php

namespace CONTROLADOR;

class Inicio {

    public function principal() {
        $Usuario = \Sesion::obtenerDato('usuario');
        $Grafica = cargarControlador('Grafica');
        $Grafica->url = "https://www.datos.gov.co/resource/wqeu-3uhz.json";
        datosVista('grafica-1', $Grafica->cantidad('formafarmaceutica'));
        datosVista('grafica-2', $Grafica->cantidad('viaadministracion'));
        if ($Usuario['id']) {
            datosVista('usuario', $Usuario);
            mostrarVista('principal');
        } else {
            mostrarVista('index');
        }
    }
}

?>