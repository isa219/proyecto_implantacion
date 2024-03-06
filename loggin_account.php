<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
$correo = $_POST['mi_correo'];
$password = $_POST['password'];
$passhash = password_hash($password, PASSWORD_DEFAULT);
include "conexion.php";

$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
$instruccion = "SELECT * FROM usuario WHERE correo LIKE '$correo' AND clave='$password';";
$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");	
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			$resultado = mysqli_fetch_array ($consulta);
			session_start();
			$_SESSION['loggin'] = true;
			$_SESSION['usuario'] = $resultado['nombres'];;
			$_SESSION['id'] = $resultado['usuario_id'];
			$_SESSION['tipo'] = $resultado['tipo_usuario'];
			header('Location: ./index.php');
		} else {
			echo "<script>";
			echo "alert('Contraseña incorrecta');";
			echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
			echo "</script>";
	  }
	}
?>
</body>
</html>