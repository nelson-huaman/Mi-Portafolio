<?php

use Controllers\DashboardController;
use Controllers\PaginasController;
use MVC\Router;

require_once __DIR__ . '/../config/app.php';

$router = new Router;

// Login

// Panel de Administración
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Paginas Publicas
$router->get('/', [PaginasController::class, 'inicio']);

$router->comprobarURL();