  
<?php
	session_start();
	if(isset($_SESSION["session_username"])){
		header("Location: aplicacionlogin.php");
	}
 
	if(isset($_POST["login"])){
		
		//conexion: 
		$link = mysqli_connect("localhost","root","","videojuegos") or die("Error de conexion" . mysqli_error($link));
 
		//if(!empty($_POST['cedula']) && !empty($_POST['pass'])) {
			$cedula=$_POST['cedula'];
			$password=$_POST['pass'];
 
			$query =mysqli_query($link,"SELECT * FROM cliente WHERE cedula='".$cedula."' AND password='".$password."'")or die("Error en la consulta.." . mysqli_error($link));
			//echo "$query";
			$numrows=mysqli_num_rows($query);// or die("Error en la numeracion de filas.." . mysqli_error($link));
			if($numrows==0){
				$message = "cedula de usuario ó contraseña invalida!";
				//echo "$message";
			}
			//if($numrows!=0){
			//	while($row=mysqli_fetch_assoc($query)){
				$row=mysqli_fetch_assoc($query);
					$dbcedula=$row['cedula'];
					$dbpass=$row['password'];
			//	}
				//echo "Cedula: $dbcedula";
			//$nombre =mysqli_query($link,"SELECT nombre FROM cliente WHERE cedula='".$cedula."' AND password='".$password."'")or die("Error en la consulta.." . mysqli_error($link));
			
				if($cedula == $dbcedula && $password == $dbpass){
					$_SESSION['session_username']=$row['nombre'];
					$_SESSION['session_cedula']=$cedula;
					//echo "Hola: ".$row['nombre'];
					header("Location: aplicacionlogin.php");
				}
			//} 
			
		//} 
		//else {
		//	$message = "Todos los campos son requeridos!";
		//}
	}
?>
