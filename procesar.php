<?php

	//conexion: 
	$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
	//consultation: 
	$query = "SELECT * FROM videogame" or die("Error in the consult.." . mysqli_error($link)); 
	//execute the query. 
	$result = mysqli_query($link, $query) or die("La consulta falló: " . mysqli_error($link));
	//display information: 
	$insert_Cliente = "INSERT INTO cliente (cedula, nombre, telefono) VALUES('".$_REQUEST["cedula"]."', '".$_REQUEST["nombre"]."', '".$_REQUEST["telefono"]."')";
	mysqli_query($link, $insert_Cliente) or die("La insercion falló: " . mysqli_error($link));

	$i=0;
	while($row = mysqli_fetch_array($result)) {
	
		if (isset($_REQUEST["vg".($i+1).""])) {
			$update = "UPDATE videogame set stock='".(($row["stock"])-1)."' WHERE nombre='".$row["nombre"]."'";
			mysqli_query($link, $update) or die("La actualización falló: " . mysqli_error($link));
			$insert_prestamo = "INSERT INTO prestamo (id_cliente, id_videojuego) VALUES('".$_REQUEST["cedula"]."', '".$row["id_vj"]."')";
			mysqli_query($link, $insert_prestamo) or die("La inserción de prestamo falló: " . mysqli_error($link));
		}
		$i++;
	}

	header("Location: aplicacion.php");

?>