<?php

function urlBase($funcion = NULL, Array $argumentos = []) {
    $servidor = $_SERVER['SERVER_NAME'];
    if ($servidor == 'localhost') {
        $directorio = __DIR__;
        $servidor .= '/' . array_pop(explode(DIRECTORY_SEPARATOR, $directorio));
    }
    if ($funcion) {
        $funcion = "?funcion=$funcion";
    }
    if ($argumentos) {
        $funcion .= '&' . implode('&', $argumentos);
    }
    return "http://$servidor/$funcion";
}

/** ############################################################################
 *                      FUNCIONES PARA TRABAJAR CON CONTROLADORES
  ########################################################################### */
function cargarControlador($clase) {
    require_once __DIR__ . "/controladores/$clase.php";
    $controlador = "CONTROLADOR\\$clase";
    return new $controlador();
}

/** ############################################################################
 *                      FUNCIONES PARA TRABAJAR CON MODELOS
  ########################################################################### */
function cargarModelo($clase) {
    $dsn = 'mysql:dbname=nekoosco_papeleria;host=localhost';
    $opciones = array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES "UTF8"');
    $bd = new \PDO($dsn, 'nekoosco_root', 'Ne-1140816758', $opciones);

    require_once __DIR__ . "/modelos/$clase.php";
    $modelo = "MODELO\\$clase";
    return new $modelo($bd);
}

/** ############################################################################
 *                      FUNCIONES PARA TRABAJAR CON VISTAS
  ########################################################################### */
function redireccionar($funcion, $argumentos = []) {
    $url = 'Location: ' . urlBase($funcion, $argumentos);
    header($url);
    exit();
}

function mostrarVista($html) {
    require_once __DIR__ . "/vistas/$html.php";
}

function datosVista($campo, $valor = NULL) {
    static $datos = [];
    if (!is_null($valor)) {
        $datos[$campo] = $valor;
    }
    return $datos[$campo];
}
?>