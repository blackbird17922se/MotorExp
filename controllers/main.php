<?php
class main extends Controller{
    function __construct(){
        parent::__construct();
        echo "main";
    }

    function saludo(){
        echo "hola";
    }
}