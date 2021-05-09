<?php
require_once("inc/Calculadora.class.php");
require_once("inc/Cuenta.class.php") ;


$calc=new Calculadora();
echo $calc->suma(100,50)."</BR>\n";
echo $calc->resta(600,50)."</BR>\n";


$calc->resta(600,50);
echo $calc->getError();

$cuenta1=new Cuenta();
echo "Saldo = ".$cuenta1->getSaldo();
$cuenta1->actualizar_saldo(750);
echo "Saldo = ".$cuenta1->getSaldo();

$cuenta2=new Cuenta();
echo "Saldo = ".$cuenta2->getSaldo();
$cuenta2->actualizar_saldo(750);
echo "Saldo = ".$cuenta2->getSaldo();



?>