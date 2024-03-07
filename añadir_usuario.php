
<?php
$nombre= $_REQUEST["nombre"];//mas controles
$correo= $_REQUEST["correo"];//mas controles
$password= $_REQUEST["password"];//mas controles
$opcion= $_REQUEST["opcion"];//mas controles

include "conexion.php";
$conexion=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conexion) {
		die("Conexion fallida: " . mysqli_connect_error());
	} else {
		$instruccion = "INSERT INTO usuario (nombres,correo,clave,tipo_usuario) VALUES ('$nombre','$correo','$password','$opcion');";
		$consulta = mysqli_query ($conexion,$instruccion) or die ("Fallo en la consulta de consulta.");
		$nfilas = mysqli_num_rows ($consulta);
		if ($nfilas > 0) {
			echo "No fue exitoso.";
		} else {
			echo "<script>";
	echo "alert('Usuario añadido');";
	echo "window.history.go(-1);"; // Redirige hacia atrás en la historia del navegador
	echo "</script>";
		}
	}
?>