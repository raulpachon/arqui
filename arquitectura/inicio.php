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
</head>

<body>

    <header>
        <div class="logo">JuegosXmonton</div>
        <nav>
        <a href="#"> Inicio</a>
        <a href="puntajesj.php"> &#127918;<?php
            echo "  $name ";
            $_SESSION['name'] = $name; 
        }       
        ?></a>
            <a href="salir.php"> Salir</a>
        </nav>
    </header>
    <div class="contenedor">
   
        <section class="panelJuegos">

            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="llorona.php"><img class="imgJuego" src="static/imagenes/kika.png"></a>
            </div>
            <div class="itemJuego">
            <a href="Breakout.php"><img class="imgJuego" src="static/imagenes/ralph.gif"></a>
            </div>
            <div class="itemJuego">
            <a href="snake.php"><img class="imgJuego" src="static/imagenes/snakegif.gif"></a>
            </div>
            
            

        </section>
    </div>
    
</body>

</html>
