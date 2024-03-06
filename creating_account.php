<?php
$nombre = $_POST['name_creando_name'];
$correo = $_POST['email'];
$password = $_POST['contrasena'];
$check = $_POST['politicas'];
$tipo = $_POST['tipo'];

$tam=strlen($password);
if ($tam <= 6 ) {
	echo "<script>";
	echo "alert('Pon una contraseña de minimo 7 caracteres.');";
	echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
	echo "</script>";
} elseif ($check == "") {
	echo "<script>";
	echo "alert('Marca que acepta las condiciones de uso y la información básica de Protección de Datos');";
	echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
	echo "</script>";
} else {
	include "conexion.php";
	
	$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
	if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion1 = "INSERT INTO usuario (nombres,correo,clave,tipo_usuario) VALUES ('$nombre','$correo','$password','$tipo');";
		$consulta1 = mysqli_query ($conexion,$instruccion1) or die ("Fallo en la consulta de consulta.");
		$resultado = mysqli_fetch_array ($consulta);
		session_start();
		$_SESSION['loggin'] = true;
		$_SESSION['usuario'] = $nombre;
		$_SESSION['id'] = $resultado['usuario_id'];
		$_SESSION['tipo'] = $resultado['tipo_usuario'];
		header('Location: ./index.php');
		
	}
}
?>