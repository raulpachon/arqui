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
		<meta name="description" content="Juego llorona">
		<meta name="keywords" content="canvas colisiones jquery ajax">
		<meta name="author" content="Alejandro Daza">
		<title>La leyenda de la llorona</title>
		
		<link rel="stylesheet" type="text/css" href="static/css/default.css" media="screen">
		<link href="static/css/estilo1.css" rel="stylesheet">
		<script src="static/js/jquery-1.11.0.min.js" language="JavaScript1.2"></script>
		<script src="static/js/quica.js" language="JavaScript1.2"></script>
		<script src="static/js/calaca.js" language="JavaScript1.2"></script>
		<script src="static/js/script.js" language="JavaScript1.2"></script>

		
		
	</head>
	<body>
	<header>
        <div class="logo">JuegosXmonton</div>
        <nav>
        <a href="inicio.php"> Inicio</a>
        <a href="puntajesj.php"> &#127918;<?php
            echo "  $name ";
			$_SESSION['name'] = $name; 
			$_SESSION['juego'] = "llorona"; 
        }       
        ?></a>
            <a href="salir.php"> Salir</a>
        </nav>
    </header>
		<section>
			<canvas id="mi_canvas" width="640" height="480">
				Tu navegador no es compatible
			</canvas>			
		</section>
		<section>
			<div id="popup" style="display: none;">
				<div class="content-popup">
					<div class="close"><a href="#" id="close"><img src="static/imagenes/close.png"/></a></div>
					<div>
					   <h2>Teclas de juego</h2>
					   <img src="static/imagenes/teclado.png"/>
					   <h2>Creditos</h2>
					   <p>Alejandro Paolo Daza Corredor</p>
						<p>UNIR</p>
						<p>Computación en el Cliente</p>
					</div>
				</div>
			</div>
			<h1>La Llorona</h1>
			<button id="instrucciones">Ver Instrucciones</button><br>
			<button id="iniciar">Iniciar</button>
			<form method="post" action="regPuntaje.php" >
			<br><br>
			<h1>- Guardar -</h1>
				<br>
				<input  type="text"  id="pntaje" name="puntaje" readonly ><br>
				<input   type="text"  name="juego" value="llorona" readonly ><br>		
				<h3>___________________________</h3><br>
				<input type="submit" value="Guardar puntaje"  ><br>
			</form>
		</nav>
		</section>
		<audio id="pierde">
			<source src="static/sonidos/pierde_vida.ogg" type="audio/ogg">
			<source src="static/sonidos/pierde_vida.mp3" type="audio/mpeg">
			<source src="static/sonidos/pierde_vida.wav" type="audio/wav">
			Tu navegador no es compatible
		</audio>
		
		<img id="abajo" src="static/imagenes/kika.png"/>
		<img id="arriba" src="static/imagenes/kika2.png"/>
		<img id="salto" src="static/imagenes/kika.png"/>
		<img id="sentado" src="static/imagenes/kika3.png"/>
		<img id="calaca_1" src="static/imagenes/calaca_child.png"/>
		<img id="calaca_2" src="static/imagenes/calaca_girl.png"/>
		
		
	</body>
</html>
