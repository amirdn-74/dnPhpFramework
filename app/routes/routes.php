<?php

use App\Controllers\AccountController;
use App\Controllers\CartController;
use App\Controllers\HomeController;
use App\Controllers\ProductsController;
use Core\Router;

$router = new Router();

$router->get('/', [HomeController::class, 'index']);

$router->get('/account', [AccountController::class, 'login']);
$router->get('/account/register', [AccountController::class, 'register']);
$router->post('/account/register', [AccountController::class, 'createUser']);

$router->get('/cart', [CartController::class, 'index']);

$router->get('/products', [ProductsController::class, 'index']);
$router->get('/products/:id', [ProductsController::class, 'show']);
