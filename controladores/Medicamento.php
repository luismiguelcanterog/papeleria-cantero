<?php

namespace CONTROLADOR;

class Medicamento {

    public function registrar() {
        mostrarVista('registro_medicamento');
    }

    /**
     * Funcion que permite capturar la informacion enviada via POST por el usuario
     * en el formulario y crear el registro o reportar el error
     */
    public function crear() {
        $Medicamento = cargarModelo('Medicamento');
        $Medicamento->nombre = filter_input(INPUT_POST, 'nombre');
        $Medicamento->precio = filter_input(INPUT_POST, 'precio');
        $Medicamento->detalle = filter_input(INPUT_POST, 'detalle');
        $Medicamento->atc = filter_input(INPUT_POST, 'atc');
        $Medicamento->registroSanitario = filter_input(INPUT_POST, 'registro_sanitario');

        if ($Medicamento->crear()) {
            redireccionar('inicio.principal');
        } else {
            $this->error("registro");
        }
    }

    public function listar() {
        $Medicamento = cargarModelo('Medicamento');
        $listaMedicamentos = $Medicamento->listar();
        datosVista('medicamento', $listaMedicamentos);
        mostrarVista('lista_medicamento');
    }

    public function api() {
        $url = "https://www.datos.gov.co/resource/wqeu-3uhz.json";
        $listaMedicamentos = self::importar($url);
        datosVista('objeto', $listaMedicamentos);
        mostrarVista('importado_medicamento');
    }

    public function apiDinamica() {
        $url = filter_input(INPUT_POST, 'url-api');
        $tipo = filter_input(INPUT_GET, 'tipo');
        if ($tipo == 'grafica') {
            $columna = filter_input(INPUT_POST, 'columna');
            $Grafica = cargarControlador('Grafica');
            $Grafica->url = $url;
            datosVista('grafica-x', $Grafica->cantidad($columna));
            mostrarVista('grafico_dinamico');
        } else {
            $listaObjetos = self::importar($url);
            datosVista('objeto', $listaObjetos);
            datosVista('url-api', $url);
            mostrarVista('importado_dinamico');
        }
    }

    public static function importar($url) {
        $acceso = curl_init($url);
        curl_setopt($acceso, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($acceso, CURLOPT_RETURNTRANSFER, TRUE);
        $respuesta = curl_exec($acceso);
        curl_close($acceso);
        return json_decode($respuesta);
    }

    public function exportar() {
        $Medicamento = cargarModelo('Medicamento');
        echo json_encode($Medicamento->listar());
    }

    public function error($tipo) {
        exit("Error de tipo: $tipo");
    }
}

?>