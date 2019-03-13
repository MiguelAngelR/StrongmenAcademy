<?php

	$nombre = $_POST["nombre"];
	$ap_pat = $_POST["ap_pat"];
	$ap_mat = $_POST["ap_mat"];
	$email  = $_POST["email"];
	$password = $_POST["password"];
	$pass =base64_encode(base64_encode($password));

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>	
	<?php
		$conexion = new PDO("mysql: host=localhost;dbname=strongmenacademy","root","");
		$sql = "SELECT * FROM `usuarios` WHERE (nombre= '$nombre' and apt_pat='$ap_pat' and apt_mat = '$ap_mat') or correo='$email'";

		$resultado = $conexion->query($sql);

		if($resultado -> rowCount()==0){
			$sql = "INSERT INTO `usuarios`(`nombre`, `apt_pat`,`apt_mat`, `correo`, `pass`) VALUES ('$nombre','$ap_pat','$ap_mat','$email','$pass')";
			$resultado = $conexion->query($sql);
			if($resultado){
				echo "Todo bien";
			}else{
				echo "algo salio mal";
				print_r($conexion->errorInfo());
			}
		}else{
			echo "Existen usuarios que comparten algún dato critico (nombre ó correo)";
		}
	?>
</body>
</html>
