<?php
//Llamamos una url solicita, la cual esta en la variable super global $_SERVER
$RequestUrl = parse_url($_SERVER["REQUEST_URI"]);
$url = $RequestUrl["path"];
//var_dump($RequestUrl); # Sacamos la posicion path de la url

//Covertimos la la informacion de la url en un arreglo y guardamos los parametros en $url
$url = explode("/", $url);


//eliminamos la posicion vacia inial y vacia final
$lastArrayPosition = count($url) -1;

if(empty($url[$lastArrayPosition])){
    array_shift($url); //Esta funcion elimina la primer posicion vacia del array $url
    array_pop($url); //Esta funcion elimina la ultima posicion vacia del array $url
}else{
    array_shift($url);
} 
var_dump($url);

?>