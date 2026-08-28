<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('hola', 'Home::verMensaje');
$routes->get('prueba', 'Home::prueba' );
$routes->get('micontrolador' ,'MiControlador::metodoInventado');
$routes->get('ejemplo' ,'Aprendido::hacer');
//la ruta estados llama al método mostrarDatos del controlador EstadosController
$routes->get('estados' ,'EstadosController::mostrarDatos');
$routes->get('empleados' ,'EmpleadosController::mostrarDatos');
$routes->get('grados' ,'GradosController::mostrarDatos');
$routes->post('guardar_empleados' ,'EmpleadosController::guardar');
