<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('profil', 'Profil::index');
$routes->get('jurusan', 'Jurusan::index');
$routes->get('fasilitas', 'Fasilitas::index');
$routes->get('kontak', 'Kontak::index');
