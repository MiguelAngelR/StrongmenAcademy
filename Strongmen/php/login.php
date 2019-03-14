<?php
	$conexion = new PDO("mysql: host=localhost;dbname=strongmenacademy","root","");
	$user = $_POST["email"];
	$sql = "SELECT pass FROM `usuarios` WHERE correo = '$user'";
	
	$resultado = $conexion->query($sql);

	if($resultado->rowCount() != 0){
		$fila = $resultado -> fetch(PDO::FETCH_ASSOC);
		if(strcmp(base64_decode(base64_decode($fila["pass"])),$_POST["password"])==0){
			echo "las contraseñas coinciden";
		}else{
			session_start();
			$_SESSION["error_login"]=2;
			header("location:../login.php");
		}
	}else{
		session_start();
		$_SESSION["error_login"]=1;
		header("location:../login.php");
	}
?>