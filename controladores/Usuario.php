<?php

namespace CONTROLADOR;

class Usuario {

    private static $llave;

    public function __construct() {
        self::$llave = \md5("drogueria-unicor");
    }

    public function principal() {

    }

    public function listar() {
        $Usuario = cargarModelo('Usuario');
        datosVista('usuario', $Usuario->listar());
        mostrarVista('lista_usuario');
    }

    public function registrar() {
        mostrarVista('registro_usuario');
    }

    /**
     * Funcion que permite capturar la informacion enviada via POST por el usuario
     * en el formulario y crear el registro o reportar el error
     */
    public function crear() {
        $Usuario = cargarModelo('Usuario');
        $Usuario->nombre = filter_input(INPUT_POST, 'nombre');
        $Usuario->correo = filter_input(INPUT_POST, 'correo');
        $Usuario->contraseña = filter_input(INPUT_POST, 'contraseña');

        if ($Usuario->crear()) {
            $hash = $this->cifrar($Usuario->id);
            $url = urlBase('usuario.confirmar', ["codigo=$hash"]);
            $mensaje = "Bienvenido, para confirmar su cuenta acceda a {$url}";
            mail($Usuario->correo, "Confirmacion de cuenta ::Droguería UNICORD::", $mensaje);
            redireccionar('inicio.principal');
        } else {
            $this->error("registro");
        }
    }

    /**
     * Funcion que permite activar a un usuario si es valido el codigo enviado
     * por correo electronio.
     * @param string $hash
     */
    public function confirmar() {
        $hash = filter_input(INPUT_GET, 'codigo');
        $Usuario = cargarModelo('Usuario');
        $Usuario->id = $this->descifrar($hash);
        $Usuario->buscar();
        if ($Usuario->buscar()) {
            $Usuario->activar();
            redireccionar('inicio.principal');
        } else {
            $this->error("confirmacion");
        }
    }

    public function error($tipo) {
        datosVista('tipo-error', $tipo);
        datosVista('mensaje-error', 'la cuenta de correo que intenta agregar ya existe');
        datosVista('url-destino', urlBase('inicio.principal'));
        mostrarVista('error');
    }

    private function cifrar($id) {
        return base64_encode($id);
    }

    private function descifrar($hash) {
        return base64_decode($hash);
    }
}

?>