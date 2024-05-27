<?php

use CodeIgniter\Router\RouteCollection;
use CodeIgniter\Routing\Router;

/**
 * @var RouteCollection $routes
 */

$routes->get('barang/tambah', 'CBarang::tambah', ['filter' => 'auth']);
$routes->post('/barang2/simpan', 'CBarang::simpan', ['filter' => 'auth']);
$routes->get('barang/buat', 'CBarang::buat', ['filter' => 'auth']);
$routes->post('barang/create', 'CBarang::create', ['filter' => 'auth']);
$routes->get('/barang2', 'CBarang::index', ['filter' => 'auth']);
$routes->get('barang2/lihat/(:segment)', 'CBarang::view/$1', ['filter' => 'auth']);
 

$routes->get('/home', 'CHome::index', ['filter' => 'auth']);
$routes->get('/info', 'CInfo::index', ['filter' => 'auth']);


$routes->get('/login', 'CLogin::index', ['filter' => 'loggedin']);
$routes->post('/auth/login', 'AuthController::login');
$routes->post('/auth/logout', 'AuthController::logout');

$routes->get('/', function () {
    return redirect()->to('/home');
});

