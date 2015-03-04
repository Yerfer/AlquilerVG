<!DOCTYPE html>

<html lang="es">


		<!--//conexion: 
		$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); -->

		<head>
			<title>Videojuego</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="individualCSS.css" />
		</head>

		<body>
		
			
		
			<form method="post" action=".php" autocomplete="on">
			
				<header name="superior" title="Sakura - Anime: Sakura Card Captor">	
				</header>
	
				<aside name="izquierdo"></aside>
		
				<section name="juego"> 
					
					<header>
						<p name="nombre">Nombre del video juego</p>
						<p name="cantidad">Cantidad: XX</p>
					</header>
					
					<section>
						<header>
						<video src="Esquema\\Videos\\DBZ.avi"  controls autobuffer>
						<p> Try this page in Safari  4! Or you can <a  href="Esquema\\Videos\\DBZ.avi">download the  video</a> instead.</p>
						</video>
						</header>
						<footer>
						<p>Precio: $YYYYY</p>
						<input type="submit" name="alquilar" value="Alquilar" />
						<p>Esta es la descripcion del videojuego</p>
						<p>Categorias: lllll, oooooo, pppppp</p>
						</footer>
						
					</section>
									
					<?php
						//conexion: 
						$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
						//consulta: 
						$query = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
						//ejecutar consulta:
						$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
						//display information: 
					
						 	
					?>
				</section>
			
				<aside name="derecho"> </aside>
	
				<footer name="pie">	</footer>

			</form>

		</body>
	
	<!--?>-->
</html>