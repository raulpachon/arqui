<?php
//controlador
session_start();
$name = $_SESSION['name'];
$clave=$_SESSION['clave'];
 if(!isset($name)){
     header("location: index.php");
   }else{
include "conexion.php";
 
$juego = $_POST['juego'];
$puntaje = $_POST['puntaje'];
$_SESSION['name'] = $name; 

$sql =<<<EOF
    INSERT INTO puntajes (nomJugador,nomJuego,puntos)
    VALUES ('$name','$juego','$puntaje');       
EOF;
    $ret = $db->exec($sql);
    if(!$ret) {
        echo '<script language="javascript">alert("ERROR: no se guardaron los datos");</script>'; 
    } else {
        echo '<script language="javascript" >alert("DATOS GUARDADOS");</script>'; 
        header("location: inicio.php");
    }
    $db->close();
}
?>