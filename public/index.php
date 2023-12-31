<?php

use Controllers\AdminController;
use Controllers\AuthController;
use Controllers\DateController;
use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . "../../includes/app.php";

$router = new Router();

/** ZONA PUBLICA **/
$router->get('/', [PaginasController::class, 'index']);
$router->post('/', [PaginasController::class, 'index']);
$router->get('/history', [PaginasController::class, 'history']);
$router->post('/history', [PaginasController::class, 'history']);
$router->get('/setting', [PaginasController::class, 'setting']);
$router->post('/setting', [PaginasController::class, 'setting']);
$router->get('/dating', [PaginasController::class, 'index']);
$router->post('/dating', [PaginasController::class, 'index']);
$router->get('/add-date', [DateController::class, 'date']);
$router->post('/add-date', [DateController::class, 'date']);
$router->get('/date', [DateController::class, 'oneDate']);
$router->post('/date', [DateController::class, 'oneDate']);

/** AUTH **/
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->get('/new-account', [AuthController::class, 'newAccount']);
$router->post('/new-account', [AuthController::class, 'newAccount']);
$router->get('/forget-password', [AuthController::class, 'forgetPassword']);
$router->get('/logout', [AuthController::class,'logOut']);

/** ZONA PRIVADA **/
$router->get('/admin', [AdminController::class, 'index']);
$router->get('/admin/dates', [AdminController::class, 'historial']);
$router->get('/admin/setting', [AdminController::class, 'setting']);
$router->post('/admin/setting', [AdminController::class, 'setting']);

$router->comprobarRutas();