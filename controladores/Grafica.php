<?php

namespace CONTROLADOR;

class Grafica {

    public $url = NULL;
    public $datos = NULL;

    public function cargarDatosDesdeApi() {
        if (is_null($this->datos)) {
            cargarControlador('Medicamento');
            $this->datos = Medicamento::importar($this->url);
        }
        return $this->datos;
    }

    public function cantidad($campo) {
        $datos = $this->cargarDatosDesdeApi();
        foreach ($datos as $dato) {
            $objeto[$dato->$campo] = isset($objeto[$dato->$campo]) ? $objeto[$dato->$campo] + 1 : 1;
        }
        foreach ($objeto as $etiqueta => $cantidad) {
            $arreglo['label'] = $etiqueta;
            $arreglo['value'] = $cantidad;
            $matriz[] = $arreglo;
        }
        return json_encode($matriz);
    }
}

?>