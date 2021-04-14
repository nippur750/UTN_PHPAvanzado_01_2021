<?php
define("LN","</BR>\n");

$codigo=1234567;
$nombreDelProducto="Agua mineral ";
$precio=2.75;

$numeroDeDocumento=23423423456;
$datos_str="Agua";
$altura_int=1022;

echo "Codigo =".$codigo.LN;
echo "Nombre del producto =".$nombreDelProducto.LN;

$nombreDelProducto="Agua mineral ";
$nombreDelProducto="";
echo $nombreDelProducto.LN;


$nombreDelProducto="Agua mineral ";
unset($nombreDelProducto);
var_dump($nombreDelProducto);
// echo $nombreDelProducto.LN;


$nombreDelProducto="Agua mineral ";
$nombreDelProducto=NULL;
var_dump($nombreDelProducto);

echo $nombreDelProducto." precio ". strval($precio). LN;

for($i=0;$i<100;$i++){
    echo $i.LN;
}

// echo $nombreDelProducto.LN
