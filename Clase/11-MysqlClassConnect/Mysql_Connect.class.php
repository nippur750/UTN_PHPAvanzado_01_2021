<?php

class Mysql_connect{
    public $db;
    public $connect;
    public $result;

    public function __construct(){
        $this->db=new mysqli(SERVIDOR,USUARIO,PASSWORD,BD);
        if($this->db->connect_error){
            $this->connect=false;
            die("Error de conexion: ".$this->db->connect_error);
        }else{
            $this->connect=true;
        }
    }
    public function execQuery($query){
        if ($this->connect){
            $this->result=mysqli_query($this->db,$query);
            if (!$this->result){
                echo "Error: ".mysqli_error($this->db);
                return 0;
            }
        }else{
            return 0;
        }
    }
}

?>