<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Home
$routes->get('/', 'Home::index');

// Rutas para carreras
$routes->get('careers', 'Career::index');
$routes->get('careers/create', 'Career::create');
$routes->post('careers/store', 'Career::store');
$routes->get('careers/edit/(:num)', 'Career::edit/$1');
$routes->post('careers/update/(:num)', 'Career::update/$1');
$routes->get('careers/delete/(:num)', 'Career::delete/$1');

// Rutas para estudiantes
$routes->get('students', 'Student::index');                 // (opcional: listado de estudiantes)
$routes->get('students/create', 'Student::create');         // formulario de creación
$routes->post('students/store', 'Student::store');          // guarda en BD
$routes->get('students/show', 'Student::show');
   // muestra detalle del estudiante

// Rutas de edición/borrado de estudiantes se pueden agregar luego si las implementas
// $routes->get('students/edit/(:num)', 'Student::edit/$1');
// $routes->post('students/update/(:num)', 'Student::update/$1');
// $routes->get('students/delete/(:num)', 'Student::delete/$1');
