<?php
<<<<<<< HEAD
	//conexion: 
	$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
	//crear usuario: 
	$insert = "INSERT INTO cliente (cedula, nombre, telefono, password) VALUES('".$_REQUEST["cedula"]."', '".$_REQUEST["nombre"]."', '".$_REQUEST["telefono"]."','".$_REQUEST["password"]."')" or die("Error en la creacion de User.." . mysqli_error($link)); 
	//ejecutar la insercion:
	$result = mysqli_query($link, $insert) or die("La insercion falló: " . mysqli_error($link));
	
	header("Location: aplicacion.php");
=======
					//conexion: 
					$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
					//crear usuario: 
					$insert = "INSERT INTO cliente (cedula, nombre, telefono, password) VALUES('".$_REQUEST["cedula"]."', '".$_REQUEST["nombre"]."', '".$_REQUEST["telefono"]."','".$_REQUEST["password"]."')" or die("Error en la creacion de User.." . mysqli_error($link)); 
					//ejecutar la insercion:
					$result = mysqli_query($link, $insert) or die("La insercion falló: " . mysqli_error($link));
			
				header("Location: aplicacion.php");
>>>>>>> 66059ba9aad6f6d6aeb10abb90ae97d30732313a
?>