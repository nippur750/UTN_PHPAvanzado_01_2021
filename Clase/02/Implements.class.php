<?php
define("LN","</BR>\n");
interface interface_Vehiculo{
    public function escribirMatricula();
    public function coordenadas();
}

interface interface_detalles{
    public function detalle();
    public function numero();
}

class vehiculo implements interface_Vehiculo, interface_detalles{
    public $x=0;
    public $y=0;
    public $matricula;

    public function coordenadas(){
        return '('.$this->x.', '.$this->y.')';
    }
    public function escribirMatricula(){
        return $this->matricula;
    }
    public function detalle(){
        echo "Auto 2021";
    }
    public function numero(){
        echo 203330444;
    }
}

$auto = new vehiculo();
$auto->x=250;
$auto->y=600;
$auto->matricula="GWQ345";
echo $auto->coordenadas().LN;
echo $auto->escribirMatricula().LN;
echo $auto->detalle().LN;
echo $auto->numero().LN;

?>