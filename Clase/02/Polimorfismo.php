<?php

define("LN","</br>\n");


class Figura{
    public $base=0;
    public $altura=0;
    public $nombre="";

    function perimetro(){
        return 0;
    }

    function area(){
        return 0;
    }

    function mostrar_datos(){
        echo "Calculo del area: ".LN;
        echo "el perimetro es : ".$this->perimetro().LN;
        echo "el area es: ".$this->area().LN.LN;
    }
}

class Rectangulo extends Figura{
        public function __construct(){
            
            $this->base=10;
            $this->altura=5;
        }

        function perimetro(){
            return 2*($this->base+$this->altura);
            
        }

        function Area(){
            return $this->base*$this->altura;
        }
}

$f1= new Figura();
echo $f1->perimetro().LN;
echo $f1->area().LN;
echo $f1->mostrar_datos().LN;

$f1= new Rectangulo();
echo $f1->perimetro().LN;
echo $f1->area().LN;
echo $f1->mostrar_datos().LN;

?>
