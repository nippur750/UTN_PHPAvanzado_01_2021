<?php
define("LN","</br>\n");




class SuperHeroe{
    private $nombre;
    private $tipo;
    private $fuerza;
    
    public function __construct(){
        $this->nombre("Batman");
        $this->tipo("heroe");
    }

    public function nombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function tipo($tipo){
        $this->tipo = $tipo;
    }

    public function fuerza($fuerza){
        $this->fuerza = $fuerza;
    }

    public function atributos(){
        echo "Soy ".$this->nombre." y soy un ".$this->tipo.LN;
    }
    
    public function atributosHTML(){
        echo "Soy <b>".$this->nombre." </b> y soy un <b>".$this->tipo."</b>".LN;    
    }

}


Class Superman extends SuperHeroe{
    public function __construct(){
        
        parent::__construct(); //Llamada al constructor de la clase hija.
        $this->nombre("Superman");
        $this->tipo("heroe");
    }

    public function rayos(){
        echo "Lanzar rayo".LN;
    }

    public function volar(){
        echo "Esto en el aire".LN;
    }
}


Class Batman extends SuperHeroe{
    public function __construct(){
        $this->nombre("Batman");
        $this->tipo("heroe");
    }

    public function Bummerang(){
        echo "Lanzar Bumerang".LN;
    }

    public function Combate(){
        echo "Peleando cuerpo a cuerpo".LN;
    }
}




$super1=new SuperHeroe();
$super1->nombre("Flash");
$super1->tipo("Heroe");
$super1->atributos();
$super1->atributosHTML();

echo LN.LN;

$super2 =  new Superman();
$super2->atributos();
$super2->atributosHTML();
$super2->rayos();
$super2->volar();

echo LN.LN;
$super2 = new Batman();
$super2->atributos();
$super2->atributosHTML();
$super2->Bummerang();
$super2->Combate();