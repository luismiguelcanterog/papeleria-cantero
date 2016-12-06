<?php

/** se inluyen funciones globales para todo el proyectos */
include 'sistema.php';
include './Sesion.php';

/** se captura la cadena que invocara la accion a realizar */
$funcion = filter_input(INPUT_GET, 'funcion');
$partesFuncion = explode('.', $funcion);

/** se interpreta cada parte del resultado {controlador.metodo} */
$controlador = ucfirst(array_shift($partesFuncion)); //La primera letra en Mayuscula
$metodo = array_shift($partesFuncion);

/** valores por defecto */
$controlador = $controlador ? $controlador : 'Inicio';
$metodo = $metodo ? $metodo : 'principal';

/** se incluye el  documento que declara la clase */
include "controladores/$controlador.php";

/** se crea un objeto a partir de la clase que acabamos de declarar */
$clase = "CONTROLADOR\\$controlador";
$objeto = new $clase();

/** se implementa el metodo del objeto */
$objeto->$metodo();
?>