<?php

function cargarlibs($lib){
    require_once 'libs/' . $lib . '.php';
}

spl_autoload_register('cargarlibs');
 $app = new App();