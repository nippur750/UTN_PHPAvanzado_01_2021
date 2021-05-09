<?php

define("LN","\n");


function dividir($numero1,$numero2){
    if($numero2!=2){
        throw new Exception("Solo se puede dividir por 2");
    }
    return $numero1/$numero2;
}

try{
    echo "El resultado es : ". dividir(15,2).LN;

    echo "El resultado es : ". dividir(15,6).LN;
}catch(Exception $e){
    echo "excepcion capturada (".$e->getMessage().") ".LN;
}
?>