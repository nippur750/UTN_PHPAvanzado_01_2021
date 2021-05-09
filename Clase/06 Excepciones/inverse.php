<?php


function inverse($val){
    if($val==0){
        throw new exception("División por cero");
    }
    return 1/$val;
}

try{
    echo inverse(4);
}catch(Exception $e){
    echo "Excepcion capturada:" . $e->getMessage()."\n" ;
}finally{
    echo "Sali del catch";
}

?>