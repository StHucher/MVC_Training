<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/controllers/MainController.php';

$router = new AltoRouter();
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));