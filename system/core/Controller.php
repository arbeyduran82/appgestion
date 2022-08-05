<?php

class Controller{

    private $view;
    public function __construct(){
        echo __CLASS__ . ' Instanciada';
        
    }

    public function exec(){
        echo 'Ejecutando metodo exec() </br>';
    }

}
