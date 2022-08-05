<?php
require 'system/config.php';
require 'system/core/autoload.php';
$router = new Router();

echo '<pre>';
print_r($router->getUri());
echo '</pre>';

$controlador = $router->getController();
$metodo = $router->getMethod();
$parametro = $router->getParam();

echo "Controlador: {$controlador} </br>";
echo "Método: {$metodo} </br>";
echo "Param: {$parametro} </br>";

$objController = new $controlador();
$objController->$metodo();