<?php

class Calculadora{
    public $error;
    function suma($valor1,$valor2){
        if(is_numeric($valor1) && is_numeric($valor2)){
            $this->error="";
            return $valor1+$valor2;
        }else{
            $this->error="Un valor no es numerico";
            return 0;
        }
    }

    function resta($valor1,$valor2){
        if(is_numeric($valor1) && is_numeric($valor2)){
            $this->error="";
            return $valor1-$valor2;
        }else{
            $this->error="Un valor no es numerico";
            return 0;
        }
    }
    function getError(){
        return $this->error;
    }
}


