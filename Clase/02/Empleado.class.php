<?php
class Empleado{
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre,$apellido,$edad){
        $this->nombre=$nombre;       
        $this->apellido=$apellido;       
        $this->edad=$edad;       
    }
    
    
    public function getNombre(){      
        return $this->nombre;
    }
    public function getApellido(){      
        return $this->apellido;
    }
    public function getEdad(){      
        return $this->edad;
    }
    public function showUser(){ 
        return $this->getNombre()." ".$this->getApellido()." ".$this->getEdad();
    }

}
$usuario=new Empleado("Juan","Perez",34);
echo $usuario->showUser();

// $usuario=new Empleado("Juan","Perez",34);
// echo $usuario->getNombre()." ".$usuario->getApellido()." ".$usuario->getEdad();
// echo "</br>\n";

// $usuario=new Empleado("Martin","West",24);
// echo $usuario->getNombre()." ".$usuario->getApellido()." ".$usuario->getEdad();




?>