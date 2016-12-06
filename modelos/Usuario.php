<?php

namespace MODELO;

Class Usuario {

    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public $id = NULL;
    public $nombre = NULL;
    public $correo = NULL;
    public $contraseña = NULL;
    public $rol = NULL;
    public $estado = NULL;

    /**
     * ::Create::
     * Funcion que permite crear un registro en la BD.
     * @return boolean
     */
    public function crear() {
        $sentencia = $this->bd->prepare("INSERT INTO usuario (nombre, correo, contraseña) VALUES (?, ?, ?);");
        $respuesta = $sentencia->execute([$this->nombre, $this->correo, $this->contraseña]);
        $this->id = $this->bd->lastInsertId();
        return $respuesta;
    }

    /**
     * ::Read::
     * Funcion que permite consultar un registro unico.
     * @param string $campo
     * @param string $valor
     */
    public function buscar() {
        $sentencia = $this->bd->prepare("SELECT * FROM usuario WHERE id_usuario = ?");
        $sentencia->execute([$this->id]);
        $datos = $sentencia->fetch(\PDO::FETCH_ASSOC);
        $this->poblar($datos);
        return $sentencia->rowCount() ? TRUE : FALSE;
    }

    /**
     * ::Read::
     * Funcion que permite consultar todos los registros.
     * @return Array(Array)
     */
    public function listar() {
        $sentencia = $this->bd->query("SELECT * FROM usuario");
        return $sentencia->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * ::Delete::
     * Funcion que permite eliminar un registro.
     * @return boolean
     */
    public function eliminar() {
        $sentencia = $this->bd->prepare("DELETE FROM usuario WHERE id_usuario = ?");
        return $sentencia->execute($this->id);
    }

    /**
     * Funcion que permite habilitar un usuario
     */
    public function activar() {
        $sentencia = $this->bd->prepare("UPDATE usuario SET estado = 'activo' WHERE id_usuario = ?");
        $sentencia->execute([$this->id]);
    }

    /**
     * Funcion que permite verificar el acceso de un usuario.
     * @return type
     */
    public function validar() {
        $sentencia = $this->bd->prepare("SELECT * FROM usuario WHERE correo=? AND contraseña=? AND estado = 'activo'");
        $sentencia->execute([$this->correo, $this->contraseña]);
        $datos = $sentencia->fetch(\PDO::FETCH_ASSOC);
        $this->poblar($datos);
        return $sentencia->rowCount() ? TRUE : FALSE;
    }

    /**
     * funcion que permite setear los atributos de la clase a partir de un arreglo
     * @param Array $datos
     */
    private function poblar($datos) {
        $this->id = $datos['id_usuario'];
        $this->nombre = $datos['nombre'];
        $this->correo = $datos['correo'];
        $this->contraseña = $datos['contraseña'];
        $this->rol = $datos['rol'];
        $this->estado = $datos['estado'];
    }
}

?>