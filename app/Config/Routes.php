<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
/*EMPLEADOS RUTAS*/
$routes->get('empleados','EmpleadosController::index');
$routes->get('eliminar/(:num)','EmpleadosController::eliminar/$1');
$routes->get('buscar/(:num)','EmpleadosController::buscarId/$1');
$routes->post('actualizar','EmpleadosController::actualizar');
$routes->post('insertar','EmpleadosController::insertar');
/*ESTADOS RUTAS*/
/*GRADOS RUTAS*/
/*EDITORIALES RUTAS*/
/*AUTORES RUTAS*/
