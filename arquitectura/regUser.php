<?php
//controlador
session_start();
include "conexion.php";
$name = $_POST['name'];
$clave=$_POST['clave'];

$sql =<<<EOF
SELECT * FROM jugador where username = '$name' and clave = '$clave';
EOF;
$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
if($row['username']==""){
$sql =<<<EOF
    INSERT INTO jugador (username,clave)
    VALUES ('$name','$clave');       
EOF;
    $ret = $db->exec($sql);
    if(!$ret) {
        echo '<script language="javascript">alert("ERROR: no se guardaron los datos");</script>'; 
    } else {
        echo '<script language="javascript" >alert("DATOS GUARDADOS");</script>'; 
        header("location: index.php");
    $db->close();
    }
}else{
    header("location: index.php");
}
?>