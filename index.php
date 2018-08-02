<?php

// Archivo que se encarga de la autocarga de clases.
require_once 'vendor/autoload.php';

require_once 'model/database.php';

/**
 * Inicio el manejo de sesión en este archivo ya que es el que
 * procesa todas las peticiones, por lo tanto la variable estará
 * disponible para todos los demas archivos.
 */
session_start();

$controller = 'registro';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
