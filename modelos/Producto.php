<?php

namespace MODELO;

Class Producto {

    public $idProducto = 'idProducto:p';
    public $nomProducto = 'nomProducto';
    public $precioProducto = 'precioProducto';
    public $detallesProducto = 'detallesProducto';
    public $idCategoria = 'idCategoria:p';
    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public function listar() {
        $sentencia = $this->bd->query("SELECT * FROM producto");
        return $sentencia->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>