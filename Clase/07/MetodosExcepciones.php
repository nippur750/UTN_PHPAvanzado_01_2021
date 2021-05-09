<?php
define("LN","\n");

try{    
    throw new Exception("Error en el proceso",120);
}catch(Exception $e){
    echo "Codigo de error ".$e->getCode().LN;
}

try {
    throw new Exception("Error de archivo");
}catch(Exception $e){
    echo "Error en el archivo ".$e->getFile().LN;
}

try {
    throw new Exception("No se pudo abrir la base de datos");
}catch(Exception $e){
    echo "Mensaje de error \"".$e->getMessage()."\"".LN;
}


try {
    throw new Exception("Error en la linea");
}catch(Exception $e){
    echo "Error en linea \"".$e->getLine()."\"".LN;
}

try {
    try {
        throw new Exception("Primer mensaje de error",1);
    }catch(Exception $e){
        throw new Exception("Ultimo mensaje de error",2,$e);
    }
}catch(Exception $e1){
    echo "Mensaje de error \"".$e1->getPrevious()."\"".LN;
}


function otraFuncion(){
    throw new Exception("Error en la funcion");
}
function funcionError($num){
    echo "hola mundo";
    otraFuncion();
}

try{
    funcionError(5);
}catch(Exception $e){
    print_r($e->getTrace());
}


function otraFuncion2(){
    throw new Exception("Error en la funcion");
}
function funcionError2($num){
    echo "hola mundo";
    otraFuncion();
}

try{
    funcionError(5);
}catch(Exception $e){
    print_r($e->getTraceAsString());
}
?>