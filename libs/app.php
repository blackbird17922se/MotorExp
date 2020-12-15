<?php
class App{
    function __construct(){
        require_once 'controllers/errores.php';

        // echo "nueva app";

        $url = $_GET['url'];
        $url = rtrim($url, '/');  //rtrim — Retira los espacios en blanco (u otros caracteres) del final de un string
        $url = explode('/', $url);   //explode — Divide un string en varios string (delim, substring)

        // CARGAR EL CONTROLADOR
        $archivoControl = 'controllers/' . $url[0] . '.php';

        // VALIDAR CONTROLADOR
       if(file_exists($archivoControl)){
            require_once $archivoControl;
            $controller = new $url[0];

            // VALIDAR METODO
            if (isset($url[1])) {  //isset — Determina si una variable está definida y no es NULL
                $controller->{$url[1]}();   //{$url[1]}() convertira lo contenido en [1] en un metodo()
            }
       }else{
           $controller = new Errores();
       }

    }
    
}
/* 
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l */