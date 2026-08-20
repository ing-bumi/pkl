<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/profil', 'Home::profil');
$routes->get('/jurusan', 'Home::jurusan');
$routes->get('/fasilitas', 'Home::fasilitas');
$routes->get('/kontak', 'Home::kontak');
