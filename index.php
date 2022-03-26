<?php
//Llamamos una url solicita, la cual esta en la variable super global $_SERVER
$RequestUrl = parse_url($_SERVER["REQUEST_URI"]);
$url = $RequestUrl["path"];
//var_dump($RequestUrl); # Sacamos la posicion path de la url
//Covertimos la url en un arreglo
$url = explode("/", $url);
var_dump($url);

?>