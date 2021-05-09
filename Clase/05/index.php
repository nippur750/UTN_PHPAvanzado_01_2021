<?php

define("LN","<br>\n");
require_once("inc/Calculadora.class.php");
require_once("inc/Cuenta.class.php") ;


$calc=new Calculadora();
// echo $calc->suma(100,50)."</BR>\n";
// echo $calc->resta(600,50)."</BR>\n";


// $calc->resta(600,50);
// echo $calc->getError();

$cuenta1=new Cuenta();
// echo "Saldo = ".$cuenta1->getSaldo();
$cuenta1->actualizar_saldo(750);
// echo "Saldo = ".$cuenta1->getSaldo();

$cuenta2=new Cuenta();
// echo "Saldo = ".$cuenta2->getSaldo().LN;
$cuenta2->actualizar_saldo(750);
// echo "Saldo = ".$cuenta2->getSaldo().LN;

$transferir=500;
if ($cuenta1->getSaldo()>$transferir){
    $cuenta1->actualizar_saldo($calc->resta($cuenta1->getSaldo(),$transferir));
    $cuenta2->actualizar_saldo($calc->suma($cuenta2->getSaldo(),$transferir));
}


echo "Cuenta 1 ".$cuenta1->getSaldo().LN;
echo "Cuenta 2 ".$cuenta2->getSaldo().LN;



?>