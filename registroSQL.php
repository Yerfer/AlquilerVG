<?php
	//conexion: 
	$link = mysqli_connect("localhost","root","","videojuegos") or die("Error " . mysqli_error($link)); 
	//crear usuario: 
	$insert = "INSERT INTO cliente (cedula, nombre, telefono, password) VALUES('".$_REQUEST["cedula"]."', '".$_REQUEST["nombre"]."', '".$_REQUEST["telefono"]."','".$_REQUEST["pass"]."')" or die("Error en la creacion de User.." . mysqli_error($link)); 
	//ejecutar la insercion:
	$result = mysqli_query($link, $insert) or die("La insercion falló: " . mysqli_error($link));
	
	echo "$insert";
	
	//header("Location: aplicacion.php");
?>