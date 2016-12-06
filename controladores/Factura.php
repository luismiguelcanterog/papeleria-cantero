<?php

namespace CONTROLADOR;

class Factura {

    public function principal() {
        mostrarVista('factura');
    }

    public function sb() {
        mostrarVista('lista_medicamento');
    }

    public function articulos() {
        mostrarVista('agregar_usuario');
    }

    public function crear() {
        $productos = filter_input(INPUT_POST, 'productos');
        $productos = json_decode($productos);

        print_r($productos);

        $Factura = cargarModelo('Factura');
        $Factura->idCliente = 1;
        $Factura->idVendedor = 0;
        $idFactura = $Factura->generar();

        $Venta = cargarModelo('FacturaHasProducto');
        foreach ($productos as $producto) {
            $Venta->idFactura = $idFactura;
            $Venta->idCliente = $Factura->idCliente;
            $Venta->idVendedor = $Factura->idVendedor;
            $Venta->idProducto = $producto->id;
            $Venta->idCategoria = 1;
            $Venta->guardar();
        }
    }

}

?>