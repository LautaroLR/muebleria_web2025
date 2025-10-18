<?php
require_once 'RouterClass.php';
require_once './app/controllers/authController.php';
require_once './app/controllers/Controller.php';

// require_once 'php/controller/pokemon.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('ADMIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/admin');

$url = $_GET['action'] ?? '';
$verb = $_SERVER['REQUEST_METHOD'];

$r = new Router();

$r->addRoute('login', 'GET', 'authController', 'showLogin');
$r->addRoute('catalogo', 'GET', 'modelController', 'showItems');

$r->route($url, $verb)
?>