<?php
//VISTA
      session_start();
     $name = $_SESSION['name'];
     $clave=$_SESSION['clave'];
      if(!isset($name)){
          header("location: index.php");
        }else{
?>
<html>

<head>
    <meta charset="utf-8">
    <title>JuegosXmonton</title>
    <link href="static/css/estilo1.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="header.js"></script>
    <style>
    .heading { color: #FF0000; }
  </style>
</head>

<body>

    <header>
        <div class="logo">SISTEMA CONTROL DE DESINFECCION</div>
        <nav>
       
        <a href="#"> 
          
            registros    
       </a>
            <a href="salir.php"> Salir</a>
        </nav>
    </header>
    <div class="contenedor">
<h3>Bienvenido <?php echo "  $name "; ?> estos son los registros:</h3><br>
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
            <thead>
              <th><h3>id</h3></th>
              <th><h3>fecha</h3></th>
              <th><h3>hora</h3></th>
              <th><h3>credencial</h3></th>
              <th><h3>temperatura</h3></th>
             
            </thead>

            <?php
            include "conexion.php";
            $sql =<<<EOF
            SELECT * FROM registros;
EOF;
            $ret = $db->query($sql);
            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
            
              echo "<tr>";
                echo "<td><h3>".$row['id']."</h3></td>";
                echo "<td><h3>"; echo $row['fecha']; echo "</h3></td>";
                echo "<td><h3>"; echo $row['hora']; echo "</h3></td>";
                echo "<td><h3>"; echo $row['credencial']; echo "</h3></td>";
                echo "<td><h3>"; echo $row['temperatura']; echo "</h3></td>";
     
              echo "</tr>";
            }
        }
            ?>
          </table>
        </div>
    </body>

</html>