<?php
//MODELO
class BaseDatos extends SQLite3{
     public function __construct(){
        $this->open('jueosXM.db');
    }
}

$db= new BaseDatos();
if($db){
    echo"<p>se conecto</p>";
}else{
    echo"<p>ERROR al abrir la base de datos Banco</p>";
}
?>