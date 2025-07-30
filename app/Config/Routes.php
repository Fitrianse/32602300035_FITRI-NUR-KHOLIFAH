<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/halodunia', 'HelloWorld::halodunia');
$routes->get('/form', 'Mahasiswa::form');
$routes->post('/submit', 'Mahasiswa::submit');
$routes->get('/latihanview', 'HalloWorld::index');
$routes->get('/about', 'About::index');
$routes->get('/profile', 'Halaman::profile');
$routes->get('/experience', 'Halaman::experience');
$routes->get('crud', 'Crud::index');
$routes->get('crud/tambah', 'Crud::tambah');
$routes->post('crud/tambah', 'Crud::tambah');
$routes->get('crud/edit/(:segment)', 'Crud::edit/$1');
$routes->post('crud/update', 'Crud::update');
$routes->get('crud/delete/(:segment)', 'Crud::delete/$1');
$routes->get('/crud', 'Crud::index'); // redirect setelah tambah



