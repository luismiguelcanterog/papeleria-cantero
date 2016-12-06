<?php

namespace MODELO;

class Medicamento {

    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public $id = NULL;
    public $nombre = NULL;
    public $precio = NULL;
    public $detalle = NULL;
    public $atc = NULL;
    public $registroSanitario = NULL;

    /**
     * ::Create::
     * Funcion que permite crear un registro en la BD y retorna el id generado.
     * @return int
     */
    public function crear() {
        $sentencia = $this->bd->prepare("INSERT INTO medicamento (nombre, precio, detalle, atc, registro_sanitario) VALUES (?, ?, ?, ?, ?);");
        $sentencia->execute([$this->nombre, $this->precio, $this->detalle, $this->atc, $this->registroSanitario]);
        return $this->bd->lastInsertId();
    }

    /**
     * ::Read::
     * Funcion que permite consultar un registro unico.
     * @param string $campo
     * @param string $valor
     */
    public function buscar() {
        $sentencia = $this->bd->prepare("SELECT * FROM medicamento WHERE id_medicamento = ?");
        $sentencia->execute([$this->id]);
        $datos = $sentencia->fetch(\PDO::FETCH_ASSOC);
        $this->poblar($datos);
    }

    /**
     * ::Read::
     * Funcion que permite consultar todos los registros.
     * @return Array(Array)
     */
    public function listar() {
        $sentencia = $this->bd->prepare("SELECT * FROM medicamento");
        $sentencia->execute();
        return $sentencia->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * ::Update::
     * Funcion que permite actualizar un registro.
     * @return boolean
     */
    public function actualizar() {
        if (!is_null($this->nombre)) {
            $campos[] = 'nombre=?'; $valores[] = $this->nombre;
        }
        if (!is_null($this->precio)) {
            $campos[] = 'precio=?'; $valores[] = $this->precio;
        }
        if (!is_null($this->detalle)) {
            $campos[] = 'detalle=?'; $valores[] = $this->detalle;
        }
        if (!is_null($this->atc)) {
            $campos[] = 'atc=?'; $valores[] = $this->atc;
        }
        if (!is_null($this->registroSanitario)) {
            $campos[] = 'registro_sanitario=?'; $valores[] = $this->registroSanitario;
        }
        if ($campos) {
            $campos = implode(',', $campos);
            $valores[] = $this->id;
            $sentencia = $this->bd->prepare("UPDATE medicamento SET $campos WHERE id_medicamento = ?");
            $sentencia->execute($valores);
            return TRUE;
        }
        return FALSE;
    }

    /**
     * ::Delete::
     * Funcion que permite eliminar un registro.
     * @return boolean
     */
    public function eliminar() {
        $sentencia = $this->bd->prepare("DELETE FROM medicamento WHERE id_medicamento = ?");
        return $sentencia->execute($this->id);
    }

    /**
     * funcion que permite setear los atributos de la clase a partir de un arreglo
     * @param Array $datos
     */
    private function poblar($datos) {
        $this->id = $datos['id_medicamento'];
        $this->nombre = $datos['nombre'];
        $this->correo = $datos['precio'];
        $this->contraseña = $datos['detalle'];
        $this->estado = $datos['atc'];
        $this->estado = $datos['registro_sanitario'];
    }
}

?>