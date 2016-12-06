<?php

namespace MODELO;

Class FacturaHasProducto {

    public $idFactura = 'idFactura:p';
    public $idCliente = 'idCliente:p';
    public $idVendedor = 'idVendedor:p';
    public $idProducto = 'idProducto:p';
    public $idCategoria = 'idCategoria:p';
    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public function guardar() {
        print_r($this);
        $sentencia = $this->bd->prepare("INSERT INTO factura_has_producto(idFactura, idCliente, idVendedor, idProducto, idCategoria) VALUES (?, ?, ?, ?, ?)");
        $sentencia->execute([$this->idFactura, $this->idCliente, $this->idVendedor, $this->idProducto, $this->idCategoria]);
        return $this->bd->lastInsertId();
    }
}

?>