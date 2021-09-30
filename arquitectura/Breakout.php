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
<link rel="stylesheet" type="text/css" href="static/css/estilo1.css">
<link rel="stylesheet" type="text/css" href="static/css/style.css">
    <meta charset="utf-8" />
    <title>Breakout Ralph game</title>
    <style>
    	* { padding: 0; margin: 0; }
    	canvas { background: #0e0d0d; display: block; margin: 0 auto; }
    </style>
    
</head>
<body >
	<header>
		<div class="logo">JuegosXmonton</div>
		<div>
        <nav>
        <a href="inicio.php"> Inicio</a>
        <a href="puntajesj.php"> &#127918;<?php
            echo "  $name ";
            $_SESSION['name'] = $name; 
        }       
        ?></a>
            <a href="salir.php"> Salir</a>
		</nav>
	</div>
	</header>  
	<center><b >________________________________<img src="static/imagenes/ralph.gif" width="115" height="115" >
	<input type="checkbox" id="chec">
		<label for="chec">
			<img src="static/imagenes/menu.png" width="40px" height="40px">
		</label>
		<nav class="nav1">
			<ul>
				<li><b></b></li>
				<li><h5>INSTRUCCIONES</h5></li>
				<br>
				<li><h3>  Breakout es el famoso juego de los años 70s y 80s en el que se deben romper todos los bloques existentes.</h3></li>
				<li><h3>Ayuda a Ralph a romper cada ladrillos que hay por nivel para realizar su cometido contra las personas del hotel.</h3></li>
				<li><h3>___________________________</h3></li>
				<li><center><h3>BUENA SUERTE</h3></li>
				<li><b><center><img src="static/imagenes/instrucciones.png" width="180" height="180"></b></li>
			</ul>
		</nav><br>
		<input type="checkbox" id="chec1" class="input1">
		<label for="chec1">
			<img src="static/imagenes/guardar.png" width="40px" height="40px">
		</label>
		<nav class="nav2">
			<form method="post" action="regPuntaje.php" >
			
				<h5>Guardar</h5>
				<br>
				<input  type="text"  id="puntaje" name="puntaje" readonly ><br>
				<input   type="text"  name="juego" value="ralf" readonly ><br>		
				<h3>___________________________</h3><br>
				<input type="submit" value="Guardar"  ><br>
			</form>
		</nav>
    <canvas id="mi_canvas" width="550" height="440"></canvas>
    <script type="text/javascript">
	
		/*Declaración de variables para realizar el juego*/
		
		//"canvas" es un elemento HTML el cual puede ser usado para dibujar gráficos usando scripts
        var micanvas = document.getElementById("mi_canvas");
        var contexto = micanvas.getContext("2d");
        var x = micanvas.width/2, y = micanvas.height/2;
        var radio = 10;
        var cambioX = 2;
        var cambioY = 2.5;
		
		//Variables para la barra-raqueta
        var altoRaqueta = 10;
        var anchoRaqueta = 120;
        var posicionRaqueta = micanvas.width/2;
		
		//Variables para eventos, bola y puntuacion
        var keyRight = false;
        var keyLeft = false;
		var colorbola= 1000;
		var puntuacion= 0;
		var puntosMostrar= 0;
		
		//Variables para dibujo y manejo de los ladrillos
		var filaLadrillos = 2;
		var columnaLadrillos = 6;
		var anchoLadrillos = 75;
		var altoLadrillos = 20;
		var espacioEntreLadrillo = 10;
		var margenSuperiorLadrillo = 30;
		var margenIzquierdaLadrillo = 30;
		var ladrillos = [];

		//
		for(c=0; c<columnaLadrillos; c++) {
			ladrillos[c] = [];
			for(r=0; r<filaLadrillos; r++) {
				ladrillos[c][r] = { x: 0, y: 0 ,estado: 1};
			}
		}
		
		//Eventos para accion si presiona o no presiona la tecla
        document.addEventListener("keydown", presionTecla, false);
        document.addEventListener("keyup", levantarTecla, false);
        
		//Funcion para dibujar la bola y su comportamiento
        function dibujarBola(){
            contexto.beginPath();
            contexto.arc(x, y, radio, 0, Math.PI*2, false);
			
			if(cambioY>-2){
				contexto.fillStyle = "#ff"+colorbola;
			}
			else{
				contexto.fillStyle = "red";
			}
            contexto.fill();
            contexto.closePath();
        }
		
		//Funcion para dibujar la barra-raqueta y su comportamiento
        function dibujarRaqueta(){
            contexto.beginPath();
            contexto.rect(posicionRaqueta, micanvas.height-altoRaqueta, anchoRaqueta, altoRaqueta);
            contexto.fillStyle = "blue";
            contexto.fill(); 
            contexto.closePath();
        }
		
		//Funcion de calculo de puntos y muestra en pantalla de los puntos
		function dibujarPuntos() {
			contexto.font = "20px Times New Roman";
			contexto.fillStyle = "#F17501";
			contexto.fillText("Puntuación: "+puntosMostrar, 8, 20);
		}
		
		//Funcion para graficar los ladrillos en pantalla
		function dibujarLadrillos() {
			for(c=0; c<columnaLadrillos; c++) {
				for(r=0; r<filaLadrillos; r++) {
					if(ladrillos[c][r].estado == 1){
						var colorLadrillo=Math.floor(Math.random()*1000);
						var ladrilloX = (c*(anchoLadrillos+espacioEntreLadrillo))+margenIzquierdaLadrillo;
						var ladrilloY = (r*(altoLadrillos+espacioEntreLadrillo))+margenSuperiorLadrillo	;		
						ladrillos[c][r].x = ladrilloX;
						ladrillos[c][r].y = ladrilloY;
						contexto.beginPath();
						contexto.rect(ladrilloX, ladrilloY, anchoLadrillos, altoLadrillos);
						contexto.fillStyle = "#f09"+colorLadrillo;
						contexto.fill();
						contexto.closePath();
					}
				}
			}
		}

		//Funcion para el funcionamiento del juego respecto a las acciones y funciones ya declaradas
        function juego(){
            contexto.clearRect(0,0, micanvas.width, micanvas.height);
			dibujarLadrillos();
            dibujarBola();
            dibujarRaqueta();
			dibujarPuntos();
			deteccionColicion();
            x += cambioX;
            y += cambioY;
            if (y + cambioY < radio){
                cambioY = -cambioY;
            }else if(y + cambioY > micanvas.height-radio ){
                if(x > posicionRaqueta && x < posicionRaqueta+anchoRaqueta){
                    cambioY = -cambioY
                }else{
					//Mensaje de fin de juego y pausa del juego
					contexto.font = "bold 30px sans-serif";
					document.getElementById('puntaje').value = puntosMostrar;
                    contexto.fillText("GAME OVER", micanvas.height/2, micanvas.width/2);
                    sleep();
					document.location.reload();
					 

                }
            }

            if(x + cambioX > micanvas.width-radio || x + cambioX < radio) {
                cambioX = -cambioX;
            }
			
            if (keyRight && posicionRaqueta < micanvas.width-anchoRaqueta){
                posicionRaqueta +=7;
            }else if(keyLeft && posicionRaqueta > 0){
                posicionRaqueta -=7;
            }
        }

		//Funcion para declarar las acciones de acuerdo a los eventos de "presion" de una tecla
        function presionTecla(evento){
            if (evento.keyCode == 39){
                keyRight = true;
            }else if(evento.keyCode == 37){
                keyLeft = true;
            }
        }
		
		//Funcion para declarar las acciones de acuerdo a los eventos de "no presion" de una tecla
        function levantarTecla(evento){
            if(evento.keyCode == 39){
                keyRight = false;
            }else if(evento.keyCode == 37){
                keyLeft = false;
            }
        }
		
		//Funcion para declarar las acciones cuando la bola choque contra un ladrillo
		function deteccionColicion(){
			for(c=0; c<columnaLadrillos; c++) {
				for(r=0; r<filaLadrillos; r++) {
					var b = ladrillos[c][r];
					if(b.estado == 1){
						if(x > b.x && x < b.x+anchoLadrillos && y > b.y && y < b.y+altoLadrillos) {
						cambioY = -cambioY;
						b.estado= 0;
						puntuacion++;
						puntosMostrar++;
						colorbola = Math.floor(Math.random()*10000);
	                    if(puntuacion == filaLadrillos*columnaLadrillos && filaLadrillos<4) {
                        alert("¡AVANZASTE AL SIGUIENTE NIVEL!");
							filaLadrillos++;
							cambioY+= 0.5;
							cambioX+= 0.5;
							puntuacion=0;
							for(c=0; c<columnaLadrillos; c++) {
								ladrillos[c] = [];
								for(r=0; r<filaLadrillos; r++) {
									ladrillos[c][r] = { x: 0, y: 0 ,estado: 1};
								}
							}
							x = micanvas.width/2;
							y = micanvas.height/2;
							posicionRaqueta = micanvas.width/2;
						}
						
						if(puntos == filaLadrillos*columnaLadrillos && filaLadrillos==4){
							alert("HAS GANADO");
							document.location.reload();
						}
						
					}
					}
				}
			}
		}
		
        setInterval(juego, 10);

    </script>
	<div class="social-bar">
			<a href="Breakout.php" class="icon icon-frUDiv" target="_blank"></a>
			<a href="https://www.youtube.com/watch?v=IIOJdMdS56k" class="icon icon-youtube" target="_blank"></a>
</body>
</html>