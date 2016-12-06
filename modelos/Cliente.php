<?php

namespace MODELO;

Class Cliente {

    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public $id = 'idCliente:p';
    public $nombre = 'nombre';
    public $correo = 'correo';
    public $contraseña = 'contraseña';
    public $estado = 'estado';

    public function buscar() {
        $sentencia = $this->bd->prepare("SELECT * FROM cliente WHERE correo=? AND contraseña=?");
        $sentencia->execute([$this->correo, $this->contraseña]);
        $datos = $sentencia->fetch(\PDO::FETCH_ASSOC);
        $this->poblar($datos);
    }

    public function poblar($datos) {
        $this->id = $datos['idCliente'];
        $this->nombre = $datos['nombre'];
        $this->correo = $datos['correo'];
        $this->contraseña = $datos['contraseña'];
        $this->estado = $datos['estado'];
    }
}

?>