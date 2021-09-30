<?php
//CONTROLADOR

session_start();
require 'conexion.php';
$name = $_POST['name'];
$clave = $_POST['clave'];


 $sql =<<<EOF
SELECT * FROM jugador where username = '$name' and clave = '$clave';
EOF;
$ret = $db->query($sql);
$row = $ret->fetchArray(SQLITE3_ASSOC);
if($row['username']==""){
  header("location: index.php");
}else{
  $_SESSION['name'] = $name;
  $_SESSION['clave'] = $clave;
  header("location: puntajesj.php");
}
$db->close();

?>