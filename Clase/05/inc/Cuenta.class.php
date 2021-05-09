<?php

class Cuenta{

    private $num_cuenta=0;
    private $saldo=500;

    public function setSaldo($value){
        $this->saldo=$value;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function setNumeroCuenta($value){
        $this->num_cuenta=$value;
    }

    public function getNumeroCuenta(){
        return $this->num_cuenta;
    }

    public function nueva_cuenta($num_cuenta){
        $this->numero_cuenta=$num_cuenta;
    }

    public function consultar_saldo(){
        return $this->saldo;
    }

    public function 
    actualizar_saldo($valor){
        $this->saldo=$valor;
    }




}



?>