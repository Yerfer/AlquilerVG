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
						?>

						
						
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
	
			<aside name="izquierdo"></aside>
		
			<section> 
				<?php
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//consulta: 
					$query = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
					//ejecutar consulta:
					$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
					//display information: 
					$i=0;
					while($row = mysqli_fetch_array($result)) { 
						echo "
							<article name='vg".($i+1)."' title='".$row["descripcion"]."    Stock:".$row["stock"]."'>
								<img height=80% width=100% src='".$row["imagen"]."'/>
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