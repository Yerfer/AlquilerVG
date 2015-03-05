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
		
			<!--<header name="superior" title="Sakura - Anime: Sakura Card Captor">	</header>-->
		
			<!--<aside name="izquierdo"></aside>-->
			
			<form method="post" action=".php" autocomplete="on">
			
			<?php
			
			//conexion: 
				$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
				//$nombro=$_REQUEST[""];
				//consulta: 
				$query = "SELECT * FROM videogame"; 
				//ejecutar consulta:
				$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
				echo "$query";
				//echo "$nombro";
							
				$i=0;
				while($row = mysqli_fetch_array($result)) {
					$nombre=$row["nombre"];
					echo "hola ".$i.".";
					echo "$nombre";
					if (isset($_POST["vg".($i+1).""])) {
						
						$nombre=$row["nombre"];
						$descripcion=$row["descripcion"];
						$precio_dia=$row["precio_dia"];
						$stock=$row["stock"];
						$video="https://www.youtube.com/watch?v=EsfSuL-VFBw";
						$cosa="cosa cosa";
						
						echo "$cosa";
						/*
						echo "						
						<section name='juego'> 
							<header>
								<p name='nombre'>Nombre del VideoJuego: $nombre</p>
								<p name='cantidad'>Cantidad: $stock</p>
							</header>
							<section>
								<header>
									<video src='$video'  controls autobuffer>
										<p> Try this page in Safari  4! Or you can <a  href='$video'>download the  video</a> instead</p>
									</video>
								</header>
								<footer>
									<p>Precio: $precio_dia</p>
									<input type='submit' name='alquilar' value='Alquilar' />
									<p>$descripcion</p>
									<p>Categorias: lllll, oooooo, pppppp</p>
								</footer>
							</section>
						</section>				
						";*/
						
						
						//$update = "UPDATE videogame set stock='".(($row["stock"])-1)."' WHERE nombre='".$row["nombre"]."'";
						//mysqli_query($link, $update) or die("La actualización falló: " . mysqli_error($link));
						//$insert_prestamo = "INSERT INTO prestamo (id_cliente, id_videojuego) VALUES('".$_SESSION['session_cedula']."', '".$row["id_vj"]."')";
						//mysqli_query($link, $insert_prestamo) or die("La inserción de prestamo falló: " . mysqli_error($link));
					}	
					$i++;
				}
			?>
			
			</form>
			
			<!--<aside name="derecho"> </aside> -->
	
			<!--<footer name="pie">	</footer> -->

		</body>
	
	<!--?>-->
</html>