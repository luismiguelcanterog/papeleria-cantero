<?php

namespace MODELO;

Class Factura {

    public $idFactura = 'idFactura:p';
    public $cantidad = 'cantidad';
    public $total = 'total';
    public $detalles = 'detalles';
    public $fecha = 'fecha';
    public $idCliente = 'idCliente:p';
    public $idVendedor = 'idVendedor:p';
    private $bd;

    public function __construct(\PDO $bd) {
        $this->bd = $bd;
    }

    public function generar() {
        $sentencia = $this->bd->prepare("INSERT INTO factura(idCliente, idVendedor) VALUES (?, ?)");
        $sentencia->execute([$this->idCliente, $this->idVendedor]);
        return $this->bd->lastInsertId();
    }
}

?>