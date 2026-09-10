<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

/* EMPLEADOS RUTAS */
$routes->group('empleados', function($routes) {
    $routes->get('/', 'EmpleadosController::index');
    $routes->get('eliminar/(:num)', 'EmpleadosController::eliminar/$1');
    $routes->get('buscar/(:num)', 'EmpleadosController::buscarId/$1');
    $routes->post('actualizar', 'EmpleadosController::actualizar');
    $routes->post('insertar', 'EmpleadosController::insertar');
});

/* ESTADOS RUTAS */
$routes->group('estados', function($routes) {
    $routes->get('/', 'EstadosController::index');
    $routes->get('eliminar/(:num)', 'EstadosController::eliminar/$1');
    $routes->get('buscar/(:num)', 'EstadosController::buscarId/$1');
    $routes->post('actualizar', 'EstadosController::actualizar');
    $routes->post('insertar', 'EstadosController::insertar');
});

/* GRADOS RUTAS */
$routes->group('grados', function($routes) {
    $routes->get('/', 'GradosController::index');
    $routes->get('eliminar/(:num)', 'GradosController::eliminar/$1');
    $routes->get('buscar/(:num)', 'GradosController::buscarId/$1');
    $routes->post('actualizar', 'GradosController::actualizar');
    $routes->post('insertar', 'GradosController::insertar');
});

/* EDITORIALES RUTAS */
$routes->group('editoriales', function($routes) {
    $routes->get('/', 'EditorialesController::index');
    $routes->get('eliminar/(:num)', 'EditorialesController::eliminar/$1');
    $routes->get('buscar/(:num)', 'EditorialesController::buscarId/$1');
    $routes->post('actualizar', 'EditorialesController::actualizar');
    $routes->post('insertar', 'EditorialesController::insertar');
});

/* AUTORES RUTAS */
$routes->group('autores', function($routes) {
    $routes->get('/', 'AutoresController::index');
    $routes->get('eliminar/(:num)', 'AutoresController::eliminar/$1');
    $routes->get('buscar/(:num)', 'AutoresController::buscarId/$1');
    $routes->post('actualizar', 'AutoresController::actualizar');
    $routes->post('insertar', 'AutoresController::insertar');
});

/* ESTUDIANTES RUTAS */
$routes->group('estudiantes', function($routes) {
    $routes->get('/', 'EstudiantesController::index');
    $routes->get('eliminar/(:num)', 'EstudiantesController::eliminar/$1');
    $routes->get('buscar/(:num)', 'EstudiantesController::buscarId/$1');
    $routes->post('actualizar', 'EstudiantesController::actualizar');
    $routes->post('insertar', 'EstudiantesController::insertar');
});

/* LIBROS RUTAS */
$routes->group('libros', function($routes) {
    $routes->get('/', 'LibrosController::index');
    $routes->get('eliminar/(:num)', 'LibrosController::eliminar/$1');
    $routes->get('buscar/(:num)', 'LibrosController::buscarId/$1');
    $routes->post('actualizar', 'LibrosController::actualizar');
    $routes->post('insertar', 'LibrosController::insertar');
});

/* PRÉSTAMOS RUTAS */
$routes->group('prestamos', function($routes) {
    $routes->get('/', 'PrestamosController::index');
    $routes->get('eliminar/(:num)', 'PrestamosController::eliminar/$1');
    $routes->get('buscar/(:num)', 'PrestamosController::buscarId/$1');
    $routes->post('actualizar', 'PrestamosController::actualizar');
    $routes->post('insertar', 'PrestamosController::insertar');
});