<?php
abstract class AbstracClass{
    
    abstract protected function name();
    abstract protected function age();
    abstract protected function profession($numero);

    public function getName(){
        return $this->name();
    }
}


class PersonType extends AbstracClass{
    public function name(){
        return "Jose Perez";
    }
    public function age(){
        return 35;
    }
    public function profession($numero){
        switch($numero){
            case 1:
                $profession="Ingeniero";
                break;
            case 2:
                $profession="Ingeniero";
                break;
            default:
                $profession="Profesor";
        }
    }
}

class empleado extends PersonType{
    public function salario(){
        return 100;
    }
    public function cargo(){
        return "programador";
    }
}

class sector extends empleado{
    public $sector=0;
    public function grupo($sector){
        $this->sector=$sector;
    }
    public function getGrupo(){
        return $this->sector;
    }
}


$persona= new PersonType();
$name=$persona->getName();
$age=$persona->age();
$profession=$persona->profession(1);

$empleadoNuevo=new sector();

echo "<b>{$name}</b> tiene <b>{$age}</b> años y es un <b>{$profession}</b> </br>";

?>