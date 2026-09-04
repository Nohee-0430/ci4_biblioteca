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
$routes->get('estados','EstadosController::index');
$routes->get('eliminar/(:num)','EstadosController::eliminar/$1');
$routes->get('buscar/(:num)','EstadosController::buscarId/$1');
$routes->post('actualizar','EstadosController::actualizar');
$routes->post('insertar','EstadosController::insertar');
/*GRADOS RUTAS*/
$routes->get('grados','GradosController::index');
$routes->get('eliminar/(:num)','GradosController::eliminar/$1');
$routes->get('buscar/(:num)','GradosController::buscarId/$1');
$routes->post('actualizar','GradosController::actualizar');
$routes->post('insertar','GradosController::insertar');
/*EDITORIALES RUTAS*/
$routes->get('editoriales','EditorialesController::index');
$routes->get('eliminar/(:num)','EditorialesController::eliminar/$1');
$routes->get('buscar/(:num)','EditorialesController::buscarId/$1');
$routes->post('actualizar','EditorialesController::actualizar');
$routes->post('insertar','EditorialesController::insertar');
/*AUTORES RUTAS*/
$routes->get('autores','AutoresController::index');
$routes->get('eliminar/(:num)','AutoresController::eliminar/$1');
$routes->get('buscar/(:num)','AutoresController::buscarId/$1');
$routes->post('actualizar','AutoresController::actualizar');
$routes->post('insertar','AutoresController::insertar');
/*ESTUDIANTES RUTAS*/
$routes->get('estudiantes','EstudiantesController::index');
$routes->get('eliminar/(:num)','EstudiantesController::eliminar/$1');
$routes->get('buscar/(:num)','EstudiantesController::buscarId/$1');
$routes->post('actualizar','EstudiantesController::actualizar');
$routes->post('insertar','EstudiantesController::insertar');
/*LIBROS RUTAS*/
$routes->get('libros','LibrosController::index');
$routes->get('eliminar/(:num)','LibrosController::eliminar/$1');
$routes->get('buscar/(:num)','LibrosController::buscarId/$1');
$routes->post('actualizar','LibrosController::actualizar');
$routes->post('insertar','LibrosController::insertar');
/*PRÉSTAMOS*/
$routes->get('prestamos','PrestamosController::index');
$routes->get('eliminar/(:num)','PrestamosController::eliminar/$1');
$routes->get('buscar/(:num)','PrestamosController::buscarId/$1');
$routes->post('actualizar','PrestamosController::actualizar');
$routes->post('insertar','PrestamosController::insertar');