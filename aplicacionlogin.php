<!DOCTYPE html>

<html lang="es">

	<head>
		<title>VideoGames</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="estilos.css" />
	</head>

	<body>
		<form method="post" action="procesar.php" autocomplete="on">
			<header name="superior" title="Ikaros - Anime: Sora no Otoshimono">
				<div id="login">		
					<fieldset>
						<legend>Datos de Contacto</legend>
						
						<?php
							session_start();
							if(!isset($_SESSION["session_username"])) {
								header("location:aplicacion.php");
							} 
							else {
						?>
								<div id="bienvenido">
								<h2>Bienvenido, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
								<input type="submit" name="apartar" value="Apartar" href="procesar.php">
								<p><a href="logout.php">Cerrar Sesión</a></p>
								</div>
								<?php
							}
<<<<<<< HEAD
						?>						
=======
						?>

						
						
>>>>>>> 3d59a466b17ea190fc73b19e2add43ab83ddcc5a
						<!--<ul>
							<li>
								<label for="cedula">Cedula</label>
								<input type="number" name="cedula" id="cedula" placeholder="123456" autofocus="autofocus" required="required" min="1" maxlength="40" />
							</li>
							<li>
								<label for="pass">Password</label>
								<input type="password" name="pass" id="pass" placeholder="****"  required="required"  min="1" maxlength="15" />
							</li>
							<input type="submit" name="login" value="LOGIN" />
							<input type="reset" name="reiniciar" value="Reiniciar">
							<p>Eres nuevo? <a href="registrar.php" >Registrate Aquí</a>!</p>
						</ul> -->
					</fieldset>	
				</div>
			</header>
	
<<<<<<< HEAD
			<aside name="izquierdo">
			
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
					$query = "SELECT * FROM categoria" or die("Error en la consulta" . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
					//display information: 
					$i=0;
					
					echo "<ul><h2>CATEGORIA <h2>";			
					
					
					while($row = mysqli_fetch_array($result)) { 
					$nombrecate=$row["nombre"];
					$idcate=$row["id_categoria"];
						echo "							
							<li>
								<href='aplicacionfiltro.php' input='submit' name=categoria value='$idcate'>
							</li>
							";
						$i++;
					}
					echo " <li><a href='aplicacionlogin.php' method='post' name=categoria value='' >VISTA GENERAL</a> </li>";
					echo "</ul>";
				?>			
				
			</aside>
=======
			<aside name="izquierdo"></aside>
>>>>>>> 3d59a466b17ea190fc73b19e2add43ab83ddcc5a
		
			<section> 
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
<<<<<<< HEAD
					$consulta = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $consulta) or die("La consulta falló: " . mysqli_error($link));
=======
					$query = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
>>>>>>> 3d59a466b17ea190fc73b19e2add43ab83ddcc5a
					//display information: 
					$i=0;
					while($row = mysqli_fetch_array($result)) { 
						echo "
							<article name='vg".($i+1)."' title='".$row["descripcion"]."    Stock:".$row["stock"]."'>							
<<<<<<< HEAD
								<form action='vg_individual.php' method='post' > 
								<input name='juegos' value='".($i+1)."' src='".$row["imagen"]."' height=240px width=100% type='image' /> 
=======
								<form action='vg_individual.php'> 
								<input name='vg".($i+1)."'  src='".$row["imagen"]."' height=80% width=100% type='image' />  //ARREGLAR ESTA PARTE
>>>>>>> 3d59a466b17ea190fc73b19e2add43ab83ddcc5a
								</form>
								Precio por Día:".$row["precio_dia"]."<br/>
								Consola:".$row["consola"]."<br/>
								<input name='vg".($i+1)."' type='checkbox' value='vg".($i+1)."' />".$row["nombre"]."
							</article>  ";
						$i++;
					}	 	
				?>

			</section>
			
			<aside name="derecho"> </aside>
	
			<footer name="pie">	</footer>

		</form>

	</body>

</html>