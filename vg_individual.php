<!DOCTYPE html>

<html lang="es">

		<head>
			<title>Videojuego</title>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="individualCSS.css" />
		</head>

		<body>
		
			<header name="superior" title="Sakura - Anime: Sakura Card Captor">	</header>
		
			<aside name="izquierdo"></aside>
			
					
			<?php
				session_start();				
				$id_vj=$_POST["juegos"];				
				//conexion: 
				$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link));
				//consulta: 
				$query = "SELECT * FROM videogame WHERE id_vj='".$id_vj."'";
				//ejecutar consulta. 
				$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
											
				//$i=0;
				//while($row = mysqli_fetch_array($result)) {
					$row = mysqli_fetch_array($result);	
					if (isset($id_vj)) {
						
						$nombre=$row["nombre"];
						$descripcion=$row["descripcion"];
						$precio_dia=$row["precio_dia"];
						$stock=$row["stock"];
						$video="Esquema\\Videos\\DBZ.avi";
							
						echo "							
						<form method='post' action='procesar.php'>
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
									<input type='submit' name='vg".$id_vj."' value='Alquilar' />
									<p>$descripcion</p>
									<p>Categorias: lllll, oooooo, pppppp</p>
								</footer>
							</section>
						</section>
						</form>
						";
						/*
						$update = "UPDATE videogame set stock='".($stock-1)."' WHERE nombre='".$nombre."'";
						mysqli_query($link, $update) or die("La actualización falló: " . mysqli_error($link));
						$insert_prestamo = "INSERT INTO prestamo (id_cliente, id_videojuego) VALUES('".$_SESSION['session_cedula']."', '".$id_vj."')";
						mysqli_query($link, $insert_prestamo) or die("La inserción de prestamo falló: " . mysqli_error($link));
						*/
					}	
					//$i++;
					//header("location:aplicacion.php");
				//}
			?>
			
			
						
			<aside name="derecho"> </aside> 
	
			<footer name="pie">	</footer> 

		</body>
	
	<!--?>-->
</html>