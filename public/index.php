<?php
require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../app/controllers/MainController.php';

$router = new AltoRouter();
$router->setBasePath(dirname($_SERVER['SCRIPT_NAME']));


$router->map('GET', '/', 'MainController::home');
$router->map('GET', '/about', 'MainController::about');
$router->map('GET', '/about/autor', 'MainController::aboutMe');

$match = $router->match();
/* var_dump($match); */

if($match){

  $action = $match['target'];

  $pieces = explode("::", $action);

  $controllerName=$pieces[0];
  $methodName=$pieces[1];

  $controller = new $controllerName();
  $controller->$methodName();

}else{

  $controller = new MainController();
  $controller->err404();
}