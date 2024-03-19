<?php

use Bramus\Router\Router;
use Ducan\Webstore\Controllers\Client\HomeController;

require_once "./vendor/autoload.php";
require_once "./helper.php";


$router = new Router();

$router->get('/', HomeController::class . '@index');

$router->run();