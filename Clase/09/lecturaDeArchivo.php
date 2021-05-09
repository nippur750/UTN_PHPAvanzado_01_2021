<?php


//  Tipos de errores
// ; Error Level Constants:
// ; E_ALL             - All errors and warnings (includes E_STRICT as of PHP 5.4.0)
// ; E_ERROR           - fatal run-time errors
// ; E_RECOVERABLE_ERROR  - almost fatal run-time errors
// ; E_WARNING         - run-time warnings (non-fatal errors)
// ; E_PARSE           - compile-time parse errors
// ; E_NOTICE          - run-time notices (these are warnings which often result
// ;                     from a bug in your code, but it's possible that it was
// ;                     intentional (e.g., using an uninitialized variable and
// ;                     relying on the fact it is automatically initialized to an
// ;                     empty string)
// ; E_STRICT          - run-time notices, enable to have PHP suggest changes
// ;                     to your code which will ensure the best interoperability
// ;                     and forward compatibility of your code
// ; E_CORE_ERROR      - fatal errors that occur during PHP's initial startup
// ; E_CORE_WARNING    - warnings (non-fatal errors) that occur during PHP's
// ;                     initial startup
// ; E_COMPILE_ERROR   - fatal compile-time errors
// ; E_COMPILE_WARNING - compile-time warnings (non-fatal errors)
// ; E_USER_ERROR      - user-generated error message
// ; E_USER_WARNING    - user-generated warning message
// ; E_USER_NOTICE     - user-generated notice message
// ; E_DEPRECATED      - warn about code that will not work in future versions
// ;                     of PHP
// ; E_USER_DEPRECATED - user-generated deprecation warnings
// ;

 
define("LN","\n");
// Capturar errores, seteos previos en


// Modo 1 (decomentar este modo y comentar el otro)
/*
function exception_error_handler($errno,$errstr,$errfile,$errline){
     throw new ErrorException($errstr,0,$errno,$errfile,$errline);
}

set_error_handler("exception_error_handler");

*/

//Modo 2  (decomentar este modo y comentar el otro)

error_reporting(E_ERROR);

echo " -------------------------------------------------------------------------------------------".LN;
echo " -------------------------------------------------------------------------------------------".LN;

try {
    $f = fopen("D:\\www\\UTN_PHPAvanzado_01_2021\\Clase\\10\\resource.txt", "r");
    if (! $f) {
        throw new Exception("No se pudo abrir el archivo");
    }
}catch (Exception $e) {
    echo "Captura de error:".$e->getMessage().LN;
   
}
if ($f!=0) {
    $str=stream_get_contents($f);   
    echo $str.LN.LN;
    fclose($f);
}

echo " -------------------------------------------------------------------------------------------".LN;
echo " -------------------------------------------------------------------------------------------".LN;

// Caso en el que el archivo tiene permisos de  lectura y y escritura , 
// configurar en el explorador de archivos como de solo lectura. 

try {
    $f = fopen("D:\\www\\UTN_PHPAvanzado_01_2021\\Clase\\10\\resource.txt", "r+");
    if (!$f) {
        throw new Exception("El archivo no tiene permisos de escritura");
    }
    
}catch (Exception $e) {
    echo "Captura de error:".$e->getMessage().LN;
}
if ($f!=0) {
    $str=stream_get_contents($f);   
    echo $str.LN.LN;
    fclose($f);
}
?>