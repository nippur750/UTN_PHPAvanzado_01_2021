<?php
require_once("inc/Calculadora.class.php");
require_once("inc/Cuenta.class.php") ;


$calc=new Calculadora();
echo $calc->suma(100,50)."</BR>\n";

echo $calc->resta(600,50)."</BR>\n";


$calc->resta(600,50);
echo $calc->getError();

$cuenta=new Cuenta();
echo "Saldo = ".$cuenta->getSaldo();


?>