<?php
define("LN","\n");
// Capturar errores, seteos previos en


// Modo 1 (decomentar este modo y comentar el otro)
/*
function exception_error_handler($errno,$errstr,$errfile,$errline){
     throw new ErrorException($errstr,0,$errno,$errfile,$errline);
}

set_error_handler("exception_error_handler");
*/

// Modo 2  (decomentar este modo y comentar el otro)

error_reporting(E_ERROR);

function abrirArchivo($file){
    $str="";
        echo "-------------------------------------------------------------------".LN;
        echo "-------------------------------------------------------------------".LN;
        echo "Abriendo url ".$file.LN;
        $pagina = file_get_contents($file);  
        if (!$pagina) {
            throw new Exception("No se pudo abrir ".$file);
        } 
        echo $pagina.LN;
  return $str;
}

try{
    echo abrirArchivo("http://www.google.com");
}catch (Exception $e){
    echo "Error (".$e->getMessage().")".LN;
}

try{
    echo abrirArchivo("https://rickandmortyapi.com/api/character/482");
}catch (Exception $e){
    echo "Error (".$e->getMessage().")".LN;
}


?>